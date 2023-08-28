<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accordian;
use Validator;
use DB;

class AccordianController extends Controller
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
        $accordian = Accordian::all()->sortByDesc("id");
        return view('backend.accordian.list',compact('accordian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
           return view('backend.accordian.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $accordian = new Accordian();
        $accordian->title = $request->input('title');
        $accordian->content = $request->input('content');       
        $accordian->save();
         return redirect()->route('accordian.create')->with('success', _lang('Saved Sucessfully'));
   }
	

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $accordian = Accordian::find($id);
        return view('backend.accordian.edit',['accordian'=>$accordian]);
        
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
        $accordian =Accordian::find($id);
        $accordian->title = $request->input('title');
        $accordian->value = $request->input('content');
        $accordian->save();
        return redirect()->route('accordian.index')->with('success', _lang('Updated Sucessfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $accordian = Accordian::find($id);
        $accordian->delete();
        return redirect()->route('accordian.index')->with('success',_lang('Deleted Sucessfully'));
    }
}