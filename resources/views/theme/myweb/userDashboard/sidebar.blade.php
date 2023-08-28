@if (Auth::check())
    @php
        $doctor = App\SlotsData::where('user_id', Auth::user()->id)->first();
        $slots_count = App\SlotsData::where('user_id', Auth::user()->id)->sum('no_of_slots');
        $patient_list = App\DoctorRegisterPortal::where('user_id', Auth::user()->id)
            ->where('status', 'patient')
            ->where('client_permission', 1)
            ->get();
        
        $single_patient = App\DoctorRegisterPortal::where('user_matching_id', Auth::user()->id)
            ->where('status', 'patient')
            ->first();
        
        $count_patient = count($patient_list);
        $columnCount = intval($slots_count);
    @endphp
@endif
<style>
    .user-name_2 {
        padding: 20px 0px 0px 0px;
    }

    .user-name_2 a {
        color: white;
        font-size: 15px;
    }

    .user-name_2 p {
        color: white;
        font-size: 12px;
    }
</style>

<div class="sidebar-menu">
    <div class="sidebar-header text-center">
        <a href="{{ url('/') }}">
            <span class="text-white ml-1 d-inline-block">
                <img src='{{ asset('public/theme/myweb/images/logo.png') }}'>
            </span>
        </a>
    </div>
    <div class="user-details">
        <img class="avatar"
            src="{{ Auth::user()->profile_picture != '' ? asset('public/uploads/profile/' . Auth::user()->profile_picture) : asset('public/uploads/profile/default.png') }}"
            alt="avatar">
        <span class="text-white d-inline-block"> </span><br>
        <div class="user-name_2">
            <a href="{{ url('doctor_register_portal') }}"><i class="ti-dashboard"></i>
                <span>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span>
            </a>
            @if (Auth::user()->practitioners_name)
                <p>{{ Auth::user()->practitioners_name }}</p>
            @endif
        </div>
    </div>
    <div class="main-menu" style='overflow-y: scroll;margin-bottom: 90px;'>
        <div class="menu-inner">
            <nav class="active">
                <ul class="metismenu hidingWhilePrint" id="products_table">
                    <li class="active">
                    </li>
                    @if (Auth::check() && Auth::user()->user_status == 'Dental_Specialist')
                        <li><a href='{{ url('doctor_register_portal') }}'><i class="ti-ticket"></i> <span>Slots
                                    ( @if ($count_patient > 0)
                                        {{ $count_patient }}
                                    @else
                                        0
                                    @endif/{{ $columnCount }})</span></a>
                        </li>
                    @else
                    @endif
                    @if (Auth::check() && Auth::user()->user_status == 'Dental_Specialist')
                        @if ($count_patient > 0)
                            <div>
                                <input type='text' placeholder='search' class='form-control' id='search'>
                            </div>
                            <div id='myTable'>
                                @foreach ($patient_list as $item)
                             
                              
                                    <li><a href="{{ route('viewPatient', [$item->id ]) }}"><i class="ti-ticket"></i>
                                            <span>{{ $loop->index + 1 }} ){{ $item->fname }}
                                                {{ $item->lname }}</span></a>
                                    </li>
                                @endforeach
                            </div>
                        @endif
                    @endif

                    @if (Auth::check() && Auth::user()->user_status == 'patient')
                        @if ($single_patient)
                            <li><a href="{{ route('viewPatient', [$single_patient->id]) }}"><i class="ti-ticket"></i>
                                    <span>1 ){{ $single_patient->fname }}  {{ $single_patient->lname }} </span></a>
                            </li>
                        @endif


                    @endif

                    @if (Auth::check() && Auth::user()->user_status == 'Dental_Specialist')
                        <li classs='btn btn-danger btn-sm '><a href="{{ url('pricing') }}"
                                class='btn btn-danger btn-sm position_class'
                                style='margin-top:24rem; margin-left: 0rem;'>Upgrade</a>
                        </li>
                    @endif

                </ul>
            </nav>
        </div>
    </div>
</div>
