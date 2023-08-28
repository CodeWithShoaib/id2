<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DoctorRegisterPortal;
use Illuminate\Support\Facades\Session;
use Validator;
use DB;
use App\User;
use Auth;

class PatientController extends Controller
{
	
    
    public function index()
    {
        $patient = DoctorRegisterPortal::where('status','patient')->latest()->paginate(8);
        return view('backend.patient.list',compact('patient'));
    }
    
    public function view(Request $request,$id)
    {
        $doctor = DoctorRegisterPortal::where('id',$id)->first();
        $user=User::where('email',$doctor->email)->first();
        Session::put('admin_id', Auth::user()->id);
        Auth::loginUsingId($user->id);
        return redirect('doctor_register_portal');
    }
    public function destroy($id)
    {
        $doctors = DoctorRegisterPortal::where('id',$id)->first();
        $doctors->delete();
        $user=User::where('email',$doctors->email)->first();
        if($user){
        $user->delete();
        }
        return redirect()->back()->with('success','Deleted Sucessfully');
    }
}