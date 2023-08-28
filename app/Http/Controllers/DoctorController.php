<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use DB;
use Illuminate\Support\Facades\Session;
use Auth;

class DoctorController extends Controller
{
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = User::where('user_status','Dental_Specialist')->latest()->get();
        return view('backend.doctor.list',compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if( ! $request->ajax()){
           return view('backend.coupon.create');
        }else{
           return view('backend.coupon.modal.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {	
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'value' => 'required',
            'fee_time' => 'required',
            'patience_registeration_time_limit' => 'required',
            'button_name' => 'required',
        ]);

        if ($validator->fails()) {
            if($request->ajax()){ 
                return response()->json(['result'=>'error','message'=>$validator->errors()->all()]);
            }else{
                return redirect()->route('coupons.create')
                	             ->withErrors($validator)
                	             ->withInput();
            }			
        }

        if(isset($request->products) && isset($request->exclude_products)){
            return redirect()->route('coupons.create')
                             ->with('error',_lang('Exclude products only allow when products filed is empty !'))
                             ->withInput();
        }

        if(isset($request->categories) && isset($request->exclude_categories)){
            return redirect()->route('coupons.create')
                             ->with('error',_lang('Exclude Categories only allow when categories filed is empty !'))
                             ->withInput();
        }
	
        
        DB::beginTransaction();

        $coupon = new Coupon();
        $coupon->title = $request->input('title');
        $coupon->value = $request->input('value');
        $coupon->fee_time = $request->input('fee_time');
        $coupon->patience_registeration_time_limit = $request->input('patience_registeration_time_limit');
        $coupon->button_name = $request->input('button_name');
        $coupon->no_of_slots = $request->input('no_of_slots');
        $coupon->save();

        //Store Products
        // if(isset($request->products)){
        //     $coupon->products()->attach($request->products);
        // }

        //Store Exclude Products
        // if(isset($request->exclude_products)){
        //     $pivotData = array_fill(0, count($request->exclude_products), ['exclude' => true]);
        //     $coupon->excludeProducts()->sync(array_combine($request->exclude_products, $pivotData));
        // }

        //Store Category
        // if(isset($request->categories)){
        //     $coupon->categories()->attach($request->categories);
        // }

        //Store Exclude Category
        // if(isset($request->exclude_categories)){
        //     $pivotData = array_fill(0, count($request->exclude_categories), ['exclude' => true]);
        //     $coupon->excludeCategories()->sync(array_combine($request->exclude_categories, $pivotData));
        // }

        //Store Translation
        $coupon->translation->fill($request->all())->save();

        DB::commit();

        if(! $request->ajax()){
           return redirect()->route('coupons.create')->with('success', _lang('Saved Sucessfully'));
        }else{
           return response()->json(['result'=>'success','action'=>'store','message'=>_lang('Saved Sucessfully'),'data'=>$coupon, 'table' => '#coupons_table']);
        }
        
   }
	

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $coupon = Coupon::find($id);
        if(! $request->ajax()){
            return view('backend.coupon.edit',compact('coupon','id'));
        }else{
            return view('backend.coupon.modal.edit',compact('coupon','id'));
        }  
        
    }
    public function view(Request $request,$id)
    {
        Session::put('admin_id', Auth::user()->id);
        Auth::loginUsingId($id);
        return redirect('doctor_register_portal');

        
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

		$validator = Validator::make($request->all(), [
            'title' => 'required',
            'value' => 'required',
            'fee_time' => 'required',
            'patience_registeration_time_limit' => 'required',
            'button_name' => 'required',
		]);
     

		if ($validator->fails()) {
			if($request->ajax()){ 
				return response()->json(['result'=>'error','message'=>$validator->errors()->all()]);
			}else{
				return redirect()->route('coupons.edit', $id)
							->withErrors($validator)
							->withInput();
			}			
		}
  

        // if(isset($request->products) && isset($request->exclude_products)){
        //     return redirect()->route('coupons.edit', $id)
        //                      ->with('error',_lang('Exclude products only allow when products filed is empty !'))
        //                      ->withInput();
        // }
 

        // if(isset($request->categories) && isset($request->exclude_categories)){
        //     return redirect()->route('coupons.edit', $id)
        //                      ->with('error',_lang('Exclude Categories only allow when categories filed is empty !'))
        //                      ->withInput();
        // }
        
        
        
		// DB::beginTransaction();
        
        $coupon =Coupon::find($id);
        $coupon->title = $request->input('title');
        $coupon->value = $request->input('value');
        $coupon->fee_time = $request->input('fee_time');
        $coupon->patience_registeration_time_limit = $request->input('patience_registeration_time_limit');
        $coupon->button_name = $request->input('button_name');
        $coupon->no_of_slots = $request->input('no_of_slots');
        $coupon->save();
        return redirect()->route('coupons.index')->with('success', _lang('Updated Sucessfully'));
   
        //Store Products

        //Store Exclude Products
        // if(isset($request->exclude_products)){
        //     $pivotData = array_fill(0, count($request->exclude_products), ['exclude' => true]);
        //     $coupon->excludeProducts()->sync(array_combine($request->exclude_products, $pivotData));
        // }else{
        //     $coupon->excludeProducts()->detach();
        // }

        //Store Category
        // if(isset($request->categories)){
        //     $coupon->categories()->sync($request->categories);
        // }else{
        //     $coupon->categories()->detach();
        // }

        //Store Exclude Category
        // if(isset($request->exclude_categories)){
        //     $pivotData = array_fill(0, count($request->exclude_categories), ['exclude' => true]);
        //     $coupon->excludeCategories()->sync(array_combine($request->exclude_categories, $pivotData));
        // }else{
        //     $coupon->excludeCategories()->detach();
        // }

        //Update Translation
        // $coupon->translation->fill($request->all())->save();

        // DB::commit();
		
	    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctors = User::where('id',$id)->delete();
        return redirect()->back()->with('success','Deleted Sucessfully');
    }
}