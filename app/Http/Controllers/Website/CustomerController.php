<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\CustomerAddress;
use App\Utilities\Overrider;
use App\Order;
use Validator;
use Hash;
use Illuminate\Support\Facades\Session;
use Auth;
use Mail;
use App\DoctorRegisterPortal;
use Illuminate\Support\Facades\Crypt;


class CustomerController extends Controller
{
    private $theme;

    public function __construct()
    {
        $this->theme = env('ACTIVE_THEME', 'default');
        date_default_timezone_set(get_option('timezone', 'Asia/Dhaka'));
    }

    /**
     * Show the Customer Login Page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function sign_in(Request $request)
    {

        if (Auth::check()) {
            return redirect('/');
        }

        if ($request->ajax()) {
            return response()->json(['result' => false, 'message' => _lang('You need to login first !')]);
        }

        if ($request->isMethod('get')) {
            return view("theme.$this->theme.customer.sign_in")->with('success', 'You are login successfully!');
        } else if ($request->isMethod('post')) {

            if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'status' => 1])) {
                if ($request->redirect_to != "") {
                    return redirect('doctor_register_portal');
                }
                return redirect('/')->with('success', 'You are login successfully!');
            } else {
                return back()->with('error', _lang('Username or password is incorrect !'))->withInput();
            }
        }
    }

    /**
     * Show the Customer Register Page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function sign_up(Request $request)
    {
        dd($request->all());
        if (Auth::check()) {
            return redirect('/');
        }
        if ($request->isMethod('get')) {
            return view("theme.$this->theme.customer.sign_up");
        } else if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [
                'user_status' => 'required',
                'first_name' => 'required|max:255',
                'last_name' => 'required|max:255',
                'email' => 'required|email|unique:users|max:255',
                'phone' => 'required',
                'password' => 'required|min:6|confirmed',
            ]);
            if ($validator->fails()) {
                if ($request->ajax()) {
                    return response()->json(['result' => 'error', 'message' => $validator->errors()->all()]);
                } else {
                    return back()->withErrors($validator)
                        ->withInput();
                }
            }
            $user = new User();
            $user->first_name = $request->input('first_name');
            $user->last_name = $request->input('last_name');
            $user->phone = $request->input('phone');
            $user->email = $request->input('email');
            $user->user_status = $request->input('user_status');
            $user->user_type = 'customer';
            $user->status = 1;
            $user->profile_picture = 'default.png';
            $user->email_verified_at = get_option('email_verification') == 'disabled' ? now() : null;
            $user->password = Hash::make($request->password);
            $user->save();
            $details = ['name' => $request->first_name];
            if($user->user_status=='Dental_Specialist'){
                  Mail::send('theme.myweb.professionalEmail', $details, function($message) use ($request) {
                  $message->to($request->email)->subject('Welcome to id2: The Official Dental Implant Registry™ Patient Portal');
                 });
            }else{
                  Mail::send('theme.myweb.PatientEmail', $details, function($message) use ($request) {
                  $message->to($request->email)->subject('Welcome to id2: The Official Dental Implant Registry™ Patient Portal');
                 });
            }
            if ($user->user_status == 'Dental_Specialist') {
                if ($request->isMethod('post')) {
                    if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'status' => 1])) {
                        return redirect('pricing')->with('success', _lang('Your are register and login successfully!'));
                    } else {
                        return back()->with('error', _lang('Username or password is incorrect !'))->withInput();
                    }
                }
            }
            //Trigger Verified Event
            event(new \Illuminate\Auth\Events\Verified($user));
            if (!$request->ajax()) {
                if ($request->input('user_status') == 'patient') {
                    if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'status' => 1])) {
                        return  redirect('/doctor_register_portal')->with('success', _lang('Your account has been created sucessfully'));
                    }
                }
            } else {
                return response()->json(['result' => 'success', 'action' => 'store', 'message' => _lang('Your account has been created sucessfully'), 'data' => $user, 'table' => '#users_table']);
            }
        }
    }

    /**
     * Show the Customer Account Page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function my_account(Request $request, $page = 'overview')
    {
        if (!Auth::check()) {
            return back();
        }
        $data = array();
        $data['page'] = $page;

        if ($page == 'overview') {
            return view("theme.$this->theme.customer.my_account.$page", $data);
        } else if ($page == 'orders') {
            $data['orders'] = Order::where('customer_id', Auth::id())->paginate(10);
            return view("theme.$this->theme.customer.my_account.$page", $data);
        } else if ($page == 'downloads') {
            $orders = Order::where('customer_id', Auth::id())
                ->where('status', 'completed')
                ->pluck('id');

            $data['downloads'] = \App\OrderProduct::whereHas('product', function (Builder $query) {
                $query->where('product_type', 'digital_product');
            })
                ->with('order')
                ->whereIn('order_id', $orders)
                ->get();
            return view("theme.$this->theme.customer.my_account.$page", $data);
        } else if ($page == 'reviews') {
            return view("theme.$this->theme.customer.my_account.$page", $data);
        } else if ($page == 'addresses') {
            $data['addresses'] = CustomerAddress::where('customer_id', Auth::id())->get();
            return view("theme.$this->theme.customer.my_account.$page", $data);
        } else if ($page == 'account_details') {
            return view("theme.$this->theme.customer.my_account.$page", $data);
        } else if ($page == 'change_password') {
            return view("theme.$this->theme.customer.my_account.$page", $data);
        }

        abort(404);
    }

    /** Download Digital Product **/
    public function download_product($order_product_id)
    {
        $order_product_id = decrypt($order_product_id);

        $orderProduct = \App\OrderProduct::whereHas('product', function (Builder $query) {
            $query->where('product_type', 'digital_product');
        })
            ->whereHas('order', function (Builder $query) {
                $query->where('status', 'completed');
            })
            ->with('product')
            ->first();
        if (!$orderProduct) {
            return;
        }

        return Storage::download($orderProduct->product->digital_file);
    }

    /** View Order Details **/
    public function order_details(Request $request, $order_id)
    {
        $order_id = decrypt($order_id);
        $order = Order::where('id', $order_id)->where('customer_id', Auth::id())->first();
        return view("theme.$this->theme.customer.my_account.order-details", compact('order'));
    }

    /** Update Account **/
    public function update_account(Request $request)
    {
        $patient = DoctorRegisterPortal::where('user_matching_id', Auth::user()->id)->first();
        if ($patient) {
            if ($request->user_edit_allow == 1) {
                $patient['requets_for_editing'] = 2;
                $patient['user_edit_allow'] = 1;
                $patient->save();
            } else {
                $patient['user_edit_allow'] = $request->user_edit_allow;
                $patient['requets_for_editing'] = 0;
                $patient->save();
            }
            $patient['client_permission'] = $request->client_permission;
            $patient['hide_from_doctor'] = $request->hide_from_doctor;
            $patient->save();
            $data = $request->all();
            $validator = Validator::make($request->all(), [
                'first_name' => 'required|max:255',
                'email' => [
                    'required',
                    'email',
                    Rule::unique('users')->ignore(Auth::id()),
                ],
                'phone' => 'required',
                'profile_picture' => 'nullable|image|max:5120',
            ]);


            if ($validator->fails()) {
                if ($request->ajax()) {
                    return response()->json(['result' => 'error', 'message' => $validator->errors()->all()]);
                } else {
                    return back()->withErrors($validator)->withInput();
                }
            }
        }
 
        $user = Auth::user();
        $data=$request->all();
        if ($request->hasFile('profile_picture')) {
            $file = $request->file('profile_picture');
            $extension = $file->getClientOriginalExtension();
            $filename = "profile_" . time() . '.' . $extension;
            $file->move('public/uploads/profile/', $filename);
            // $user->profile_picture = $filename;
            $data['profile_picture'] = $filename;
        }
            
        $user->fill($data)->save();

        return back()->with('success', _lang('Updated sucessfully'));
    }


    /** Update Password **/
    public function update_password(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'password' => 'required|min:6|confirmed',
        ]);


        if ($validator->fails()) {
            if ($request->ajax()) {
                return response()->json(['result' => 'error', 'message' => $validator->errors()->all()]);
            } else {
                return back()->withErrors($validator)->withInput();
            }
        }

        $user = Auth::user();
        $user->password = Hash::make($request->password);

        $user->save();

        if (!$request->ajax()) {
            return back()->with('success', _lang('Password Updated sucessfully'));
        } else {
            return response()->json(['result' => 'success', 'action' => 'store', 'message' => _lang('Password Updated sucessfully'), 'data' => $user, 'table' => '#users_table']);
        }
    }
    public function set_patient_password(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'password' => 'required|min:6|confirmed',
        ]);


        if ($validator->fails()) {
            if ($request->ajax()) {
                return response()->json(['result' => 'error', 'message' => $validator->errors()->all()]);
            } else {
                return back()->withErrors($validator)->withInput();
            }
        }

        $dycryptId = Crypt::decrypt($request->id);
        $user = User::find($dycryptId);
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('user/login')->with("success", 'You updated your password successfully. Now you are ready to log in!');
    }


    public function add_new_address(Request $request)
    {
        if ($request->isMethod('get')) {
            return view("theme.$this->theme.customer.my_account.create_address", ['page' => 'addresses']);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            //'email' => 'required',
            //'phone' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'address' => 'required',
            'post_code' => 'required',
            'is_default' => 'required',
        ]);

        if ($validator->fails()) {
            if ($request->ajax()) {
                return response()->json(['result' => 'error', 'message' => $validator->errors()->all()]);
            } else {
                return back()->withErrors($validator)->withInput();
            }
        }

        $customeraddress = new CustomerAddress();
        $customeraddress->customer_id = Auth::id();
        $customeraddress->name = $request->input('name');
        //$customeraddress->email = $request->input('email');
        //$customeraddress->phone = $request->input('phone');
        $customeraddress->country = $request->input('country');
        $customeraddress->state = $request->input('state');
        $customeraddress->city = $request->input('city');
        $customeraddress->address = $request->input('address');
        $customeraddress->post_code = $request->input('post_code');
        $customeraddress->is_default = $request->input('is_default');

        $customeraddress->save();

        if (!$request->ajax()) {
            return redirect('my_account/addresses')->with('success', _lang('New address added successfully'));
        } else {
            return response()->json(['result' => 'success', 'action' => 'store', 'message' => _lang('New address added successfully'), 'data' => $customeraddress, 'table' => '#customer_addresses_table']);
        }
    }

    /**
     * Store Customer Address
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update_address(Request $request, $address_id)
    {
        if ($request->isMethod('get')) {
            $address = CustomerAddress::where('id', $address_id)
                ->where('customer_id', Auth::id())
                ->first();
            $page = 'addresses';
            return view("theme.$this->theme.customer.my_account.edit_address", compact('address', 'page'));
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            //'email' => 'required',
            //'phone' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'address' => 'required',
            'post_code' => 'required',
            'is_default' => 'required',
        ]);

        if ($validator->fails()) {
            if ($request->ajax()) {
                return response()->json(['result' => 'error', 'message' => $validator->errors()->all()]);
            } else {
                return back()->withErrors($validator)->withInput();
            }
        }

        $customeraddress = CustomerAddress::where('id', $address_id)
            ->where('customer_id', Auth::id())
            ->first();
        $customeraddress->name = $request->input('name');
        //$customeraddress->email = $request->input('email');
        //$customeraddress->phone = $request->input('phone');
        $customeraddress->country = $request->input('country');
        $customeraddress->state = $request->input('state');
        $customeraddress->city = $request->input('city');
        $customeraddress->address = $request->input('address');
        $customeraddress->post_code = $request->input('post_code');
        $customeraddress->is_default = $request->input('is_default');

        $customeraddress->save();

        if (!$request->ajax()) {
            return redirect('my_account/addresses')->with('success', _lang('Updated Successfully'));
        } else {
            return response()->json(['result' => 'success', 'action' => 'store', 'message' => _lang('Updated Successfully'), 'data' => $customeraddress, 'table' => '#customer_addresses_table']);
        }
    }


    /**
     * Delete Customer By ID
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function delete_address($address_id)
    {
        $customeraddress = CustomerAddress::where('id', $address_id)
            ->where('customer_id', Auth::id());

        $customeraddress->delete();

        return redirect('my_account/addresses')->with('success', _lang('Address Removed Successfully'));
    }


    /**
     * Sign Out.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function sign_out()
    {
        if (Auth::check()) {
            Auth::logout();
            return redirect('/');
        } else {
            return back();
        }
    }
}
