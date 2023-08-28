<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Entity\Brand\Brand;
use App\Entity\Brand\BrandTranslation;
use Validator;
use DB;

class BrandController extends Controller
{
	
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        date_default_timezone_set(get_option('timezone','Asia/Dhaka'));
    }
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all()->sortByDesc("id");
        return view('backend.product.brand.list',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if( ! $request->ajax()){
           return view('backend.product.brand.create');
        }else{
           return view('backend.product.brand.modal.create');
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
            'name' => 'required',
            'title' => 'required',
            'content' => 'required',
        ]);
        $brand = new Brand();
        $data=$request->all();
        if($request->hasFile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename='image'.time().'.'.$extension;
            $file->move('upload/image/',$filename);
            $data['image'] = $filename;
        }
    
        $brand->create($data)->save();
        return redirect()->route('brands.create')->with('success', _lang('Saved Sucessfully'));
  
 
    



      
        
   }
	

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $brand = Brand::find($id);
        if(! $request->ajax()){
            return view('backend.product.brand.view',compact('brand','id'));
        }else{
            return view('backend.product.brand.modal.view',compact('brand','id'));
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
        $brand = Brand::find($id);
        if(! $request->ajax()){
            return view('backend.product.brand.edit',compact('brand','id'));
        }else{
            return view('backend.product.brand.modal.edit',compact('brand','id'));
        }  
        
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


        $brand =Brand::find($id);
        $data=$request->all();
        if($request->hasFile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename='image'.time().'.'.$extension;
            $file->move('upload/image/',$filename);
            $data['image'] = $filename;
        }
        
        $brand->update($data);     
        return redirect()->route('brands.index')->with('success', _lang('Updated Sucessfully'));
	    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::beginTransaction();

        $brand = Brand::find($id);
        $brand->files()->detach();
        $brand->delete();
        
        DB::commit();

        return redirect()->route('brands.index')->with('success',_lang('Deleted Sucessfully'));
    }
}