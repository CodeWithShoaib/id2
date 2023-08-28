<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SlotsData;
use App\TeethData;
use App\ToothImage;
use App\DoctorRegisterPortal;
use Auth;

class SlotsController extends Controller
{


    public function __construct()
    {
        date_default_timezone_set(get_option('timezone', 'Asia/Dhaka'));
    }
    public function index()
    {
        $data = SlotsData::all()->sortByDesc("id");
        return view('backend.user.role.list', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if (!$request->ajax()) {
            return view('backend.user.role.create');
        } else {
            return view('backend.user.role.modal.create');
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
        if (!Auth::check()) {
            return redirect()->back()->with("error", 'Please login yourself then you continue process!');
        }
        $slot = new SlotsData;
        $slot->user_id = Auth::user()->id;
        $slot->title = $request->title;
        $slot->price = $request->price;
        $slot->no_of_slots = $request->no_of_slots;
        $slot->registration_time = $request->registration_time;
        $slot->save();
    }

    public function edit(Request $request, $id, $patientId)
    {
        $slot = TeethData::find($id);
        $patiente = DoctorRegisterPortal::find($patientId);
        return view('theme.myweb.userDashboard.editSlot')->with(['dental_implant_edit' => $slot, 'patiente' => $patiente]);
    }
    public function slotList(Request $request)
    {
        return view('backend.doctor.payment');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $role = Role::find($id);
        if (!$request->ajax()) {
            return view('backend.user.role.view', compact('role', 'id'));
        } else {
            return view('backend.user.role.modal.view', compact('role', 'id'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

   
        $teethData = TeethData::find($id);
        $count_manu = count($request->manufactures);
        $manufac = [];
        $brands = [];
        $platform = [];
        $b = json_decode($teethData->brand);
        $m = json_decode($teethData->manufactures);
        $p = json_decode($teethData->platform);
        for ($k = 0; $k < $count_manu; $k++) {
            $manufac[] = $request->manufactures[$k] ?? $m[$k];
            $brands[] = $request->brand[$k] ?? $b[$k];
            $platform[] = $request->platform[$k] ?? $p[$k];
        }
        
        $teethData['doctor_name'] = json_encode($request->doctors_name);
        $teethData['doctor_phone_number'] = json_encode($request->doctor_phone_number);
        $teethData['practice_name_of_restoring_dentist'] = json_encode($request->practice_name_of_restoring_dentist);
        $teethData['Implant_Restoration_date'] = json_encode($request->Implant_Restoration_date);
        $teethData['abutment_type'] = json_encode($request->abutment_type);
        $teethData['restoring_dentist_name'] = json_encode($request->restoring_dentist_name);
        $teethData['manufactures'] = json_encode($manufac);
        $teethData['brand'] = json_encode($brands);
        $teethData['platform'] = json_encode($platform);
        $teethData['reference_Part'] = json_encode($request->reference_Part);
        $teethData['lot'] = json_encode($request->lot);
        $teethData['implant_surgery'] = json_encode($request->implant_surgery);
        $teethData->save();
        $toothIds = $request->input('tooth_ids');
        $l=0;
        foreach ($toothIds as $index => $toothId) {
            if ($request->hasFile('images' . ($index + 1))) {
                $images = $request->file('images' . ($index + 1));
                $multipleImages = [];
                foreach ($images as $image) {
                    $l++;
                    $extension = $image->getClientOriginalExtension();
                    $filename = $l.$index . '_image' . time() . '.' . $extension;
                    $image->move(public_path('image/xrays/'), $filename);
                    $multipleImages[] = $filename;
                }
        
                $toothImage = ToothImage::where('teeth_data_id', $teethData->id)
                    ->where('tooth_id', $toothId) // Add this condition to target specific record
                    ->update([
                        'images' => json_encode($multipleImages),
                    ]);
            }
        }
        return redirect()->back()->with("success", 'Update data successfully!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::find($id);
        $role->delete();
        return redirect()->route('roles.index')->with('success', _lang('Deleted Sucessfully'));
    }
}
