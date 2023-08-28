<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\DoctorRegisterPortal;
use App\TeethData;
use App\ToothImage;

use App\Transaction;
use Validator;
use DataTables;
use DB;
use Auth;
use Illuminate\Support\Facades\Session;

use Carbon\Carbon;
use Mail;
use Illuminate\Support\Facades\Crypt;


class DoctorRegisterPortalController extends Controller
{


    public function index()
    {
        return view('backend.order.list');
    }

    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->back()->with("error", 'Please login and  then continue process');
        }
        // making slots for doctor
        $validator = Validator::make($request->all(), [
            '*' => 'required',
            'streesAddress' => 'sometimes',
            'State' => 'sometimes',
            'dental_implant' => 'sometimes',
            'abutment_type' => 'sometimes',
            'Implant_Restoration_date' => 'sometimes',
            'manufactures' => 'sometimes',
            'brand' => 'sometimes',
            'platform' => 'sometimes',
            'reference_Part' => 'sometimes',
            'lot' => 'sometimes',
            'implant_surgery' => 'sometimes',
            'images' => 'sometimes',
        ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
        }



        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $uniqueNumber = random_int(10000, 99999);
        $data['unique_id'] = $uniqueNumber;

        // making data for tooth
        //    create patient account
        if ($request->storing == '1') {
            $email_duplication = User::where("email", $request->email)->first();
            if ($email_duplication) {
                return redirect()->back()->with("success", 'Duplicate email error');
            }
            $user = new User;
            $user->first_name = $request->fname;
            $user->last_name = $request->lname;
            $user->email = $request->email;
            $user->phone = $request->number;
            $user->country = $request->country;
            $user->State = $request->State;
            $user->city = $request->city;
            $user->storing = '1';
            $user->status = 1;

            $user->email_verified_at = 1;
            $user->user_status = 'patient';
            $user->user_type = 'customer';
            $currentDateTime = Carbon::now();
            $formattedDateTime = $currentDateTime->format('Y-m-d H:i:s');
            $user->email_verified_at = $formattedDateTime;
            $user->save();

            $doctor_data = new DoctorRegisterPortal;
            $doctor_data['user_matching_id'] = $user->id;
            $doctor_data['fname'] = $request->fname;
            $doctor_data['lname'] = $request->lname;
            $doctor_data['streesAddress'] = $request->streesAddress;
            $doctor_data['city'] = $request->city;
            $doctor_data['country'] = $request->country;
            $doctor_data['State'] = $request->State;
            $doctor_data['zipCode'] = $request->zipCode;
            $doctor_data['gender'] = $request->gender;
            $doctor_data['email'] = $request->email;
            $doctor_data['user_id'] = Auth::user()->id;
            $doctor_data['age'] = $request->age;
            $doctor_data['number'] = $request->number;
            $doctor_data['status'] = 'patient';

            $doctor_data['doctor_name'] = json_encode($request->doctor_name);
            $doctor_data['doctor_phone_number'] = json_encode($request->doctor_phone_number);
            $doctor_data['practice_name_of_restoring_dentist'] = json_encode($request->practice_name_of_restoring_dentist);
            $doctor_data['Implant_Restoration_date'] = json_encode($request->Implant_Restoration_date);
            if ($request->abutment_type) {
                $doctor_data['abutment_type'] = json_encode($request->abutment_type);
            }
            $doctor_data['restoring_dentist_name'] = json_encode($request->restoring_dentist_name);
            $doctor_data->save(); // Use fill() to set attributes and save()
            $patiente_id = $doctor_data->id;

            $teethData = new TeethData;
            $teethData['unique_id'] = $uniqueNumber;
            if ($request->dental_implant) {
                $teethData['dental_implant'] = json_encode($request->dental_implant);
            }
            $teethData['manufactures'] = json_encode($request->manufactures);
            $teethData['brand'] = json_encode($request->brand);
            $teethData['platform'] = json_encode($request->platform);
            $teethData['reference_Part'] = json_encode($request->reference_Part);
            $teethData['lot'] = json_encode($request->lot);
            $teethData['implant_surgery'] = json_encode($request->implant_surgery);
            $teethData['patiente_id'] = $patiente_id;
            $teethData['doctor_name'] = json_encode($request->doctor_name);
            $teethData['doctor_phone_number'] = json_encode($request->doctor_phone_number);
            if ($request->images) {
                $teethData['images'] = json_encode($multiple_images);
            }

            $teethData['restoring_dentist_name'] = json_encode($request->restoring_dentist_name);
            if ($request->practice_name_of_restoring_dentist) {
                $teethData['practice_name_of_restoring_dentist'] = json_encode($request->practice_name_of_restoring_dentist);
            }
            if ($request->Implant_Restoration_date) {
                $teethData['Implant_Restoration_date'] = json_encode($request->Implant_Restoration_date);
            }
            if ($request->abutment_type) {
                $teethData['abutment_type'] = json_encode($request->abutment_type);
            }

            $teethData['current_dentist'] = $request->current_dentist;
            $teethData['status'] = $request->status;
            $teethData['user_id'] = Auth::user()->id;
            $teethData['user_matching_id'] = $user->id;
            $teethData->save();

            $toothIds = $request->input('tooth_ids');
            foreach ($toothIds as $index => $toothId) {
                if ($request->hasFile('images' . ($index + 1))) {
                    $images = $request->file('images' . ($index + 1));
                    $multipleImages = [];
                    foreach ($images as $image) {
                        $extension = $image->getClientOriginalExtension();
                        $filename = $index . '_image' . time() . '.' . $extension;
                        $image->move(public_path('image/xrays/'), $filename);  // Use absolute path
                        $multipleImages[] = $filename;
                    }

                    ToothImage::create([
                        'tooth_id' => $toothId,
                        'teeth_data_id' => $teethData->id,
                        'images' => json_encode($multipleImages),
                        'user_id' => Auth::user()->id,
                        'doctor_register_portal_id' => $doctor_data->id,
                    ]);
                }
            }





               $encryptedId = Crypt::encrypt($user->id);
            // Sending email through that point
                $details = ['encryptedId' => $encryptedId,'name'=>$request->fname];
                Mail::send('theme.myweb.Link', $details, function($message) use ($request) {
                $message->to($request->email)->subject('Welcome to id2: The Official Dental Implant Registry™ Patient Portal');
                });


        } else {
           
            $doctor_data = new DoctorRegisterPortal;
            $doctor_data['user_matching_id'] = Auth::user()->id;
            $doctor_data['fname'] = $request->fname;
            $doctor_data['lname'] = $request->lname;
            $doctor_data['streesAddress'] = $request->streesAddress;
            $doctor_data['city'] = $request->city;
            $doctor_data['country'] = $request->country;
            $doctor_data['State'] = $request->State;
            $doctor_data['zipCode'] = $request->zipCode;
            $doctor_data['age'] = $request->age;
            $doctor_data['number'] = $request->number;
            $doctor_data['gender'] = $request->gender;
            $doctor_data['email'] = $request->email;
            $doctor_data['user_id'] = Auth::user()->id;
            $doctor_data['status'] = 'patient';


            $doctor_data['doctor_name'] = json_encode($request->doctor_name);
            $doctor_data['doctor_phone_number'] = json_encode($request->doctor_phone_number);
            $doctor_data['practice_name_of_restoring_dentist'] = json_encode($request->practice_name_of_restoring_dentist);
            $doctor_data['Implant_Restoration_date'] = json_encode($request->Implant_Restoration_date);
            if ($request->abutment_type) {
                $doctor_data['abutment_type'] = json_encode($request->abutment_type);
            }
            $doctor_data['restoring_dentist_name'] = json_encode($request->restoring_dentist_name);
            $doctor_data->save(); // Use fill() to set attributes and save()
         
            $patiente_id = $doctor_data->id;
            $teethData = new TeethData;
       
            if ($request->dental_implant) {
                $teethData['dental_implant'] = json_encode($request->dental_implant);
            }
            $teethData['manufactures'] = json_encode($request->manufactures);
            $teethData['brand'] = json_encode($request->brand);
            $teethData['platform'] = json_encode($request->platform);
            $teethData['reference_Part'] = json_encode($request->reference_Part);
            $teethData['lot'] = json_encode($request->lot);
            $teethData['implant_surgery'] = json_encode($request->implant_surgery);
            $teethData['patiente_id'] = $patiente_id;
            $teethData['doctor_name'] = json_encode($request->doctor_name);
            $teethData['doctor_phone_number'] = json_encode($request->doctor_phone_number);


            $teethData['restoring_dentist_name'] = json_encode($request->restoring_dentist_name);
            if ($request->practice_name_of_restoring_dentist) {
                $teethData['practice_name_of_restoring_dentist'] = json_encode($request->practice_name_of_restoring_dentist);
            }
            if ($request->Implant_Restoration_date) {
                $teethData['Implant_Restoration_date'] = json_encode($request->Implant_Restoration_date);
            }
            if ($request->abutment_type) {
                $teethData['abutment_type'] = json_encode($request->abutment_type);
            }

       
            $teethData['status'] = $request->status;
            $teethData['user_id'] = Auth::user()->id;
            $teethData['user_matching_id'] = Auth::user()->id;
            $teethData->save();
            $toothIds = $request->input('tooth_ids');


            foreach ($toothIds as $index => $toothId) {
                if ($request->hasFile('images' . ($index + 1))) {
                    $images = $request->file('images' . ($index + 1));
                    $multipleImages = [];

                    foreach ($images as $image) {
                        $extension = $image->getClientOriginalExtension();
                        $filename = $index . '_image' . time() . '.' . $extension;
                        $image->move(public_path('image/xrays/'), $filename);  // Use absolute path
                        $multipleImages[] = $filename;
                    }

                    ToothImage::create([
                        'tooth_id' => $toothId,
                        'teeth_data_id' => $teethData->id,
                        'images' => json_encode($multipleImages),
                        'user_id' => Auth::user()->id,
                        'doctor_register_portal_id' => $doctor_data->id,
                    ]);
                }
            }
        }
        return redirect()->back()->with("success", 'You Register Data Successfully!');
    }

    public function setPassword(Request $request, $id)
    {
        // $decryptId = Crypt::decrypt($id);
        $User = User::find($id);
        return view('theme.myweb.setPassword')->with(["user" => $User]);
    }
    public function link(Request $request)
    {
        return view('theme.myweb.Link');
    }




    public function implantStore(Request $request)
    {   
 
        $teethData = new TeethData;
        $teethData['dental_implant'] = json_encode($request->dental_implant);
        $teethData['manufactures'] = json_encode($request->manufactures);
        $teethData['brand'] = json_encode($request->brand);
        $teethData['platform'] = json_encode($request->platform);
        $teethData['reference_Part'] = json_encode($request->reference_Part);
        $teethData['lot'] = json_encode($request->lot);
        $teethData['implant_surgery'] = json_encode($request->implant_surgery);
        $teethData['patiente_id'] = $request->patiente_id;
        $teethData['doctor_name'] = json_encode($request->doctor_name);
        $teethData['doctor_phone_number'] = json_encode($request->doctor_phone_number);
        $teethData['restoring_dentist_name'] = json_encode($request->restoring_dentist_name);
        if ($request->practice_name_of_restoring_dentist) {
            $teethData['practice_name_of_restoring_dentist'] = json_encode($request->practice_name_of_restoring_dentist);
        }
        $teethData['Implant_Restoration_date'] = json_encode($request->Implant_Restoration_date);
        if ($request->abutment_type) {
            $teethData['abutment_type'] = json_encode($request->abutment_type);
        }
        $teethData['current_dentist'] = $request->current_dentist;
        $teethData['status'] = $request->status;
        $teethData['user_id'] = Auth::user()->id;

        $teethData->save();
        $toothIds = $request->input('tooth_ids');
        $i=0;
        foreach ($toothIds as $index => $toothId) {
            $i++;
            if ($request->hasFile('images' . ($index + 1))) {
                $images = $request->file('images' . ($index + 1));
                $multipleImages = [];

                foreach ($images as $image) {
                    $extension = $image->getClientOriginalExtension();
                    $filename = $index . '_image' .$i. time() . '.' . $extension;
                    $image->move(public_path('image/xrays/'), $filename);  // Use absolute path
                    $multipleImages[] = $filename;
                }

                $doctor_register_portal_id = session('doctor_register_portal_id');

                ToothImage::create([
                    'tooth_id' => $toothId,
                    'teeth_data_id' => $teethData->id,
                    'images' => json_encode($multipleImages),
                    'user_id' => Auth::user()->id,
                    'doctor_register_portal_id' => $doctor_register_portal_id,
                ]);
                session()->forget('doctor_register_portal_id');
            }
        }
        return redirect()->back()->with("success", 'You Add Impant Successfully!');
    }


    public function destroy($id)
    {
        $order = Order::find($id);
        if ($order->status != 'canceled' && $order->status != 'pending_payment') {
            foreach ($order->products as $orderItem) {
                $orderItem->product->increment('qty', $orderItem->qty);

                if ($orderItem->product->fresh()->qty > 0) {
                    $orderItem->product->revertOutOfStock();
                }
            }
        }

        $order->delete();
        return redirect()->route('orders.index')->with('success', _lang('Deleted Successfully'));
    }
    public function editingRequest(Request $request, $id)
    {
        $doctor_data = DoctorRegisterPortal::find($id);
        $details = ['id' => $id];
        Mail::send('theme.myweb.AllowEditing', $details, function($message) use ($request) {
        $message->to($request->request_email)->subject('ID2');
        });
        $doctor_data['requets_for_editing'] = intval($request->requets_for_editing);
        $doctor_data->save();
        return redirect()->back()->with("success", 'Send Request Successfully!');
    }
    public function givePermission(Request $request, $id)
    {
        $doctor_data = DoctorRegisterPortal::find($id);
        // allow for editing
        $doctor_data['requets_for_editing'] = 2;
        $doctor_data['user_edit_allow'] = 1;
        $doctor_data->save();
        return view("theme.myweb.index")->with("success", 'You give permission to doctor successfully!');
    }
    public function rejectPermission(Request $request, $id)
    {
        $doctor_data = DoctorRegisterPortal::find($id);
        // allow for editing
        $doctor_data['requets_for_editing'] = 3;
        $doctor_data['user_edit_allow'] = 0;
        $doctor_data->save();
        return view("theme.myweb.index")->with("success", 'You give permission to doctor successfully!');
    }
}
