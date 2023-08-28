  <div class='' style='margin-right:4rem;'>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class='row hidingWhilePrint'>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    @if (Auth::Check())
                                                        <label class="control-label">{{ _lang('First Name') }}</label>
                                                        <input type="text" readonly class="form-control"
                                                            value="{{ $patiente->fname ?? 'N/A' }}">
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">{{ _lang('Last Name') }}</label>
                                                    <input type="text" readonly class="form-control"
                                                        value="{{ $patiente->lname ?? 'N/A' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">{{ _lang('Strees Address') }}</label>
                                                    <input type="text" readonly class="form-control "
                                                        value="{{ $patiente->streesAddress ?? 'N/A' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">{{ _lang('City') }}</label>
                                                    <input type="text" readonly class="form-control"
                                                        value="{{ $patiente->city ?? 'N/A' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">{{ _lang('State') }}</label>
                                                    <input type="text" readonly class="form-control "
                                                        value="{{ $patiente->State ?? 'N/A' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">{{ _lang('Zip Code') }}</label>
                                                    <input type="text" readonly class="form-control "
                                                        value="{{ $patiente->zipCode ?? 'N/A' }}">
                                                </div>
                                            </div>
                                       
                                          
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">{{ _lang('Email') }}</label>
                                                    <input type="text" readonly class="form-control "
                                                        value="{{ $patiente->email ?? 'N/A' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">{{ _lang('Phone No') }}</label>
                                                    <input type="text" readonly class="form-control "
                                                        value="{{ $patiente->number ?? 'N/A' }}">
                                                </div>
                                            </div>
                                            </div>
                                              <div class="col-12 my-4 hidingWhilePrint" style='text-align:end;'>
                                                     <button onclick="printPage()" class='btn btn-warning'>Print</button>
                                                        <button class='btn btn-danger' data-toggle="modal" data-target="#exampleModal" >Share</button>
                                                        <input type='hidden' value='{{ route("sharePatient", [$patiente->id]) }}' id="myAnchorTag" />

                                                </div>
                                              
                                            @php
                                         
                                                if ($patiente->id) {
                                                    $tooth = App\TeethData::where('patiente_id', $patiente->id)->get();
                                                }
                                            @endphp
                                            <div class='row print-section'>
                                            @foreach ($tooth as $teeth)
                                                @php
                                                    $dental_implant = json_decode($teeth->dental_implant);
                                                    $manufactures = json_decode($teeth->manufactures);
                                                    $brand = json_decode($teeth->brand);
                                                    $platform = json_decode($teeth->platform);
                                                    $reference_Part = json_decode($teeth->reference_Part);
                                                    $implant_surgery = json_decode($teeth->implant_surgery);
                                                    $lot = json_decode($teeth->lot);
                                                    if ($dental_implant) {
                                                        $teeth_count = count($dental_implant);
                                                    }
                                                @endphp
                                                
                                                <div class='row flex col-12'>
                                                <div class="col-6 my-4">
                                                    <h5>Information About Dentist and Implant:-</h5>
                                                </div>
                                                 @if (Auth::Check() && Auth::user()->user_status=='patient')
                                                  <div class="col-12 my-4 text-left text-white" style='text-align:end;'>
                                                     <a class='btn btn-success' href='{{route('edit.slot',[$teeth->id,$patiente])}}'>Edit Slots</a>
                                                </div>
                                                 @endif
                                            @if (Auth::Check() && Auth::user()->user_status=='Dental_Specialist')
                                            @if($patiente->requets_for_editing==0)
                                            <!--0 means request for editing-->
                                            <!--1 means pending-->
                                            <!--2 means request accept-->
                                            <!--3 means rejected-->
                                              
                                                <div class='container-fluid'>    
                                                <div class='row'>
                                                     <div class="col-12">
                                                        <form method='post' action='{{route('editingRequest',[$patiente->id])}}'>
                                                            @csrf  
                                                            <div class="form-group">
                                                              <input type='hidden' value='1' name='requets_for_editing'>
                                                              <input type='hidden' value='{{$patiente->email}}' name='request_email'>
                                                              <input type='submit' class='btn btn-success' value='Request for editing'>
                                                            </div>
                                                        </form>    
                                                     </div>
                                                </div>
                                                </div>
                                                @elseif($patiente->requets_for_editing==1)
                                                 <div class='container-fluid'>    
                                                <div class='row'>
                                                     <div class="col-12">
                                                            <div class="form-group">
                                                              <a class='btn btn-success text-white'>Pending Request</a>
                                                            </div>    
                                                     </div>
                                                </div>
                                                </div>
                                                
                                                 @elseif($patiente->requets_for_editing==2)
                                                 @if($patiente->user_edit_allow==1)
                                                <div class="col-12 my-4 text-left text-white" style='text-align:end;'>
                                                     <a class='btn btn-success' href='{{route('edit.slot',[$teeth->id,$patiente])}}'>Edit Slots</a>
                                                </div>

                                                @endif
                                                @elseif($patiente->requets_for_editing==3)
                                                @if($patiente->user_edit_allow==0)
                                                <div class='container'>  
                                                  <div class='row'>
                                                     <div class="col-12">
                                                        <form method='post' action='{{route('editingRequest',[$patiente->id])}}'>
                                                            @csrf  
                                                            <div class="form-group">
                                                              <input type='hidden' value='1' name='requets_for_editing'>
                                                              <input type='hidden' value='{{$patiente->email}}' name='request_email'>
                                                              <input type='submit' class='btn btn-success' value='Request for editing'>
                                                            </div>
                                                        </form>   
                                                        <p class='text-danger'>{{$patiente->fname}} Reject your request!</p>
                                                     </div>
                                                  </div>
                                                </div>
                                             
                                                @endif
                                                @endif
                                                @endif
                                                
                                              
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label
                                                            class="control-label">{{ _lang('Doctor Name') }}</label>
                                                        <input type="text" readonly class="form-control "
                                                            value="{{ $teeth->doctor_name ?? 'N/A' }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label
                                                            class="control-label">{{ _lang('Doctor Phone No') }}</label>
                                                        <input type="text" readonly class="form-control "
                                                            value="{{ $teeth->doctor_phone_number ?? 'N/A' }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label
                                                            class="control-label">{{ _lang('Practice Name Of Restoring Dentist') }}</label>
                                                        <input type="text" readonly class="form-control "
                                                            value="{{ $teeth->practice_name_of_restoring_dentist ?? 'N/A' }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label
                                                            class="control-label">{{ _lang('Implant Restoration Date') }}</label>
                                                        <input type="text" readonly class="form-control "
                                                            value="{{ $teeth->Implant_Restoration_date ?? 'N/A' }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label
                                                            class="control-label">{{ _lang('Abutment Type') }}</label>
                                                        <input type="text" readonly class="form-control "
                                                            value="{{ $teeth->abutment_type ?? 'N/A' }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label
                                                            class="control-label">{{ _lang('Current Dentist') }}</label>
                                                        <input type="text" readonly class="form-control "
                                                            value="{{ $teeth->current_dentist ?? 'N/A' }}">
                                                    </div>
                                                </div>
                                         
                                                @php
                                                    $json_images = json_decode($teeth->images);
                                                @endphp
                                                @if($teeth->images)
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label
                                                            class="control-label">{{ _lang('X-Rays Images:-') }}</label>
                                                    </div>
                                                </div>
                                                @foreach ($json_images as $data)
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <img src="{{ asset('image/xrays/' . $data) }}"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                @endforeach
                                                @endif
                                                <!--$dental_implant-->
                                               
                                                @php
                                                 $allow_doctor_for_edit = App\DoctorRegisterPortal::where('user_id', Auth::user()->id)->where('user_edit_allow',1)->where('status','patient')->first();
                                                @endphp
                                             
                                                @if ($dental_implant) 
                                                    @for ($i = 0; $i < $teeth_count; $i++)
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <h5 style="text-transform: capitalize">
                                                                    {{ $dental_implant[$i] }}:-</h5>
                                                            </div>
                                                        </div>
                                                        @php
                                                        $m=App\Manufacturer::where('manufacturer_id',$manufactures[$i])->first();
                                                        @endphp
                                                        @if($m)
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label">{{ _lang('Manufactures') }}</label>
                                                                <input type="text" readonly class="form-control "
                                                                    value="{{ $manufactures[$i] ?  $m->manufacturer_name : 'N/A' }}">
                                                            </div>
                                                        </div>
                                                        @endif
                                                        @if($brand)
                                                        @php
                                                        if(isset($brand[$i])){
                                                        $b=App\Brand::where('brand_id',$brand[$i])->first();
                                                         }
                                                        @endphp
                                                        @if(isset($b))
                                                        <div class="col-md-6">
                                                        <div class="form-group">
                                                        <label class="control-label">{{ _lang('Brand') }}</label>
                                                        <input type="text" readonly class="form-control"
                                                        data-real-value="{{ isset($brand[$i]) ? $brand[$i] : 'N/A' }}" value="{{ $b->brand_name }}">
                                                        </div>
                                                        </div>
                                                        @endif
                                                        @endif
                                                        @if($platform)
                                                        @php
                                                        $p=App\Diameter::where('delimeter_id',$platform[$i])->first();
                                                        @endphp
                                                        @if($p)
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label">{{ _lang('Platform') }}</label>
                                                                <input type="text" readonly class="form-control "  value="{{ $platform[$i] ? $p->delimiter_name : 'N/A' }}"  >
                                                            </div>
                                                        </div>
                                                        @endif
                                                        @endif
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label">{{ _lang('Reference Part') }}</label>
                                                                <input type="text" readonly class="form-control "
                                                                    value="{{ $reference_Part[$i] ? $reference_Part[$i] : 'N/A' }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label">{{ _lang('Lot') }}</label>
                                                                <input type="text" readonly class="form-control "
                                                                    value="{{ $lot[$i] ? $lot[$i] : 'N/A' }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label">{{ _lang('Implant Surgery') }}</label>
                                                                <input type="text" readonly class="form-control "
                                                                    value="{{ $implant_surgery[$i] ? $implant_surgery[$i] : 'N/A' }}">
                                                            </div>
                                                        </div>
                                                      
                                                    @endfor
                                                    
                                                @endif
                                            @endforeach
                                            </div>
                                            <div class="col-12 hidingWhilePrint">
                                                <button class="btn btn-primary btn-sm add_promte" onclick="">Add  Another Implant</button>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 another_implant"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>