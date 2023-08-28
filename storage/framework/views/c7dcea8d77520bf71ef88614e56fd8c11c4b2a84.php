<?php if(Auth::check()): ?>
    <?php
        $doctor = App\SlotsData::where('user_id', Auth::user()->id)->first();
        $patient_list = App\DoctorRegisterPortal::where('user_id', Auth::user()->id)->get();
        $count_patient = count($patient_list);
        $uriSegments = explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        $id = $uriSegments[2];
        
    ?>
<?php endif; ?>
<?php echo $__env->make('theme.myweb.userDashboard.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Preloader area end -->
<div class="page-container">
    <!-- sidebar menu area start -->
    <?php echo $__env->make('theme.myweb.userDashboard.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
    <!-- sidebar menu area end -->
    <!-- main content area start -->
    <div class="main-content">
        <!-- header area start -->
        <?php echo $__env->make('theme.myweb.userDashboard.headerAreaComponent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 
        <!-- header area end -->
        <!-- page title area start -->
        <div class="page-title-area mb-3">
            <div class="row align-items-center py-3">

                <div class="col-sm-12">
                    <div class="breadcrumbs-area clearfix">
                        <h4 class="page-title float-left">Dashboard</h4>
                    </div>
                </div>

            </div>
        </div><!-- page title area end -->

        <div class="main-content-inner" style='padding-left:130px;'>
            <div class="alert alert-success alert-dismissible" id="main_alert" role="alert">
                <button type="button" id="close_alert" class="close">
                    <span aria-hidden="true"><i class="far fa-times-circle"></i></span>
                </button>
                <span class="msg"></span>
            </div>
            <link rel="stylesheet" href="<?php echo e('public/backend/plugins/chartjs/Chart.min.css'); ?>">
            <div class="">
                <div class="row hidingWhilePrint">
                    <div class="col-md-12 mb-12">
                        <div class="card">
                            <div class="seo-fact sbg1">
                                <div class="p-4">
                                    <div class="seofct-icon">
                                        <?php if(Auth::Check() && Auth::user()->user_status == 'Dental_Specialist'): ?>
                                            <span>Welcome <?php echo Auth::user()->first_name; ?> <?php echo Auth::user()->last_name; ?></span>
                                        <?php else: ?>
                                            <span>Welcome <?php echo Auth::user()->first_name; ?> <?php echo Auth::user()->last_name; ?></span>
                                        <?php endif; ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php if(Auth::user()->user_status == 'Dental_Specialist'): ?>
                <?php
                    session(['doctor_register_portal_id' => $patiente->id]);
                ?>
                <?php if($patiente->hide_from_doctor == 0): ?>
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
                                                                <?php if(Auth::Check()): ?>
                                                                    <label
                                                                        class="control-label"><?php echo e(_lang('First Name')); ?></label>
                                                                    <input type="text" readonly class="form-control"
                                                                        value="<?php echo e($patiente->fname ?? 'N/A'); ?>">
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label"><?php echo e(_lang('Last Name')); ?></label>
                                                                <input type="text" readonly class="form-control"
                                                                    value="<?php echo e($patiente->lname ?? 'N/A'); ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label"><?php echo e(_lang('Strees Address')); ?></label>
                                                                <input type="text" readonly class="form-control "
                                                                    value="<?php echo e($patiente->streesAddress ?? 'N/A'); ?>">
                                                            </div>
                                                        </div>
                                                        <?php
                                                          
                                                            $c = App\City::where('id', $patiente->city)->first();
                                                            $s = App\State::where('id', $patiente->State)->first();
                                                            $countries = App\Country::where('id', $patiente->country)->first();
                                                        ?>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label"><?php echo e(_lang('Country')); ?></label>
                                                                <input type="text" readonly class="form-control "
                                                                    value="<?php echo e($countries->name ?? 'N/A'); ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label"><?php echo e(_lang('State')); ?></label>
                                                                <input type="text" readonly class="form-control "
                                                                    value="<?php echo e($s->name ?? 'N/A'); ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label"><?php echo e(_lang('City')); ?></label>
                                                                <input type="text" readonly class="form-control"
                                                                    value="<?php echo e($c->name ?? 'N/A'); ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label"><?php echo e(_lang('Zip Code')); ?></label>
                                                                <input type="text" readonly class="form-control "
                                                                    value="<?php echo e($patiente->zipCode ?? 'N/A'); ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label"><?php echo e(_lang('Email')); ?></label>
                                                                <input type="text" readonly class="form-control "
                                                                    value="<?php echo e($patiente->email ?? 'N/A'); ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label"><?php echo e(_lang('Phone No')); ?></label>
                                                                <input type="text" readonly class="form-control "
                                                                    value="<?php echo e($patiente->number ?? 'N/A'); ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label"><?php echo e(_lang('Age')); ?></label>
                                                                <input type="text" readonly class="form-control "
                                                                    value="<?php echo e($patiente->age ?? 'N/A'); ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label"><?php echo e(_lang('Gender')); ?></label>
                                                                <input type="text" readonly class="form-control "
                                                                    value="<?php echo e($patiente->gender ?? 'N/A'); ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 my-4 hidingWhilePrint" style='text-align:end;'>
                                                        <button onclick="printPage()"
                                                            class='btn btn-warning'>Print</button>
                                                        <button class='btn btn-danger' data-toggle="modal"
                                                            data-target="#exampleModal">Share</button>
                                                        <input type='hidden'
                                                            value='<?php echo e(route('sharePatient', [$patiente->id])); ?>'
                                                            id="myAnchorTag" />
                                                    </div>

                                                    <?php
                                                        
                                                        if ($patiente->id) {
                                                            $tooth = App\TeethData::where('patiente_id', $patiente->id)->get();
                                                        }
                                                    ?>
                                                    <div class='row print-section'>
                                                        <?php $__currentLoopData = $tooth; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teeth): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php
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
                                                            ?>

                                                            <div class='row flex col-12'>
                                                                <div class="col-6 my-4">
                                                                    <h5>Information About Dentist and Implant:</h5>
                                                                </div>
                                                                <?php if(Auth::Check() && Auth::user()->user_status == 'patient'): ?>
                                                              
                                                              
                                                                    <div class="col-12 my-4 text-left text-white"
                                                                        style='text-align:end;'>
                                                                        <a class='btn btn-success'
                                                                            href='<?php echo e(route('edit.slot', [$teeth->id, $patiente])); ?>'>Edit
                                                                            Slots</a>
                                                                    </div>
                                                                <?php endif; ?>
                                                                <?php if(Auth::Check() && Auth::user()->user_status == 'Dental_Specialist'): ?>
                                                                    <?php if($patiente->requets_for_editing == 0): ?>
                                                                        <!--0 means request for editing-->
                                                                        <!--1 means pending-->
                                                                        <!--2 means request accept-->
                                                                        <!--3 means rejected-->

                                                                        <div class='container-fluid'>
                                                                            <div class='row'>
                                                                                <div class="col-12">
                                                                                    <form method='post'
                                                                                        action='<?php echo e(route('editingRequest', [$patiente->id])); ?>'>
                                                                                        <?php echo csrf_field(); ?>
                                                                                        <div class="form-group">
                                                                                            <input type='hidden'
                                                                                                value='1'
                                                                                                name='requets_for_editing'>
                                                                                            <input type='hidden'
                                                                                                value='<?php echo e($patiente->email); ?>'
                                                                                                name='request_email'>
                                                                                            <input type='submit'
                                                                                                class='btn btn-success'
                                                                                                value='Request for editing'>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    <?php elseif($patiente->requets_for_editing == 1): ?>
                                                                        <div class='container-fluid'>
                                                                            <div class='row'>
                                                                                <div class="col-12">
                                                                                    <div class="form-group">
                                                                                        <a
                                                                                            class='btn btn-success text-white'>Pending
                                                                                            Request</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    <?php elseif($patiente->requets_for_editing == 2): ?>
                                                                        <?php if($patiente->user_edit_allow == 1): ?>
                                                                            <div class="col-12 my-4 text-left text-white"
                                                                                style='text-align:end;'>
                                                                                <a class='btn btn-success'
                                                                                    href='<?php echo e(route('edit.slot', [$teeth->id, $patiente])); ?>'>Edit
                                                                                    Slots</a>
                                                                            </div>
                                                                        <?php endif; ?>
                                                                    <?php elseif($patiente->requets_for_editing == 3): ?>
                                                                        <?php if($patiente->user_edit_allow == 0): ?>
                                                                            <div class='container'>
                                                                                <div class='row'>
                                                                                    <div class="col-12">
                                                                                        <form method='post'
                                                                                            action='<?php echo e(route('editingRequest', [$patiente->id])); ?>'>
                                                                                            <?php echo csrf_field(); ?>
                                                                                            <div class="form-group">
                                                                                                <input type='hidden'
                                                                                                    value='1'
                                                                                                    name='requets_for_editing'>
                                                                                                <input type='hidden'
                                                                                                    value='<?php echo e($patiente->email); ?>'
                                                                                                    name='request_email'>
                                                                                                <input type='submit'
                                                                                                    class='btn btn-success'
                                                                                                    value='Request for editing'>
                                                                                            </div>
                                                                                        </form>
                                                                                        <p class='text-danger'>
                                                                                            <?php echo e($patiente->fname); ?>

                                                                                            Reject your request!</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        <?php endif; ?>
                                                                    <?php endif; ?>
                                                                <?php endif; ?>


                                                            </div>


                                                            <!--<div class="col-md-6">-->
                                                            <!--    <div class="form-group">-->
                                                            <!--        <label-->
                                                            <!--            class="control-label"><?php echo e(_lang('Current Dentist')); ?></label>-->
                                                            <!--        <input type="text" readonly class="form-control "-->
                                                            <!--            value="<?php echo e($teeth->current_dentist ?? 'N/A'); ?>">-->
                                                            <!--    </div>-->
                                                            <!--</div>-->


                                                            <!--$dental_implant-->
                                                            <?php
                                                                $allow_doctor_for_edit = App\DoctorRegisterPortal::where('user_id', Auth::user()->id)
                                                                    ->where('user_edit_allow', 1)
                                                                    ->where('status', 'patient')
                                                                    ->first();
                                                                $doctors_name = json_decode($teeth->doctor_name);
                                                                $doctor_phone_number = json_decode($teeth->doctor_phone_number);
                                                                $Implant_Restoration_date = json_decode($teeth->Implant_Restoration_date);
                                                                $abutment_type = json_decode($teeth->abutment_type);
                                                                $restoring_dentist_name = json_decode($teeth->restoring_dentist_name);
                                                            ?>
                                                            <?php if($dental_implant): ?>
                                                                <?php for($i = 0; $i < $teeth_count; $i++): ?>
                                                                    <?php
                                                                        $new_dental_word = str_replace('-', ' # ', $dental_implant[$i]);
                                                                        $words = explode('-', $dental_implant[$i]);
                                                                        $teeth_no = intval($words[1]);
                                                                        
                                                                        $json_images = App\ToothImage::where('doctor_register_portal_id', $patiente->id)
                                                                            ->where('tooth_id', $teeth_no)
                                                                            ->where('teeth_data_id', $teeth->id)
                                                                            ->first();
                                                                        if ($json_images) {
                                                                            $array_images = json_decode($json_images->images);
                                                                            $countImages = count($array_images);
                                                                        } else {
                                                                            $countImages = 0; // Set count to 0 if there are no images
                                                                        }
                                                                    ?>
                                                    </div>


                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <h5 style="text-transform: capitalize">
                                                                <?php echo e($new_dental_word); ?>:</h5>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <?php for($j = 0; $j < $countImages; $j++): ?>
                                                            <?php if(isset($array_images[$j])): ?>
                                                                <div class="col-md-4 text-center">
                                                                    <div class="form-group">
                                                                        <img src="<?php echo e(asset('public/image/xrays/' . $array_images[$j])); ?>"
                                                                            alt="image" class="img-fluid"
                                                                            style="width: 300px; height: 300px;">
                                                                    </div>
                                                                </div>
                                                            <?php endif; ?>
                                                        <?php endfor; ?>
                                                    </div>
                                                    <div class="row d-flex">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label"><?php echo e(_lang('Doctor Name')); ?></label>
                                                                <input type="text" readonly class="form-control "
                                                                    value="<?php echo e($doctors_name[$i] ?? 'N/A'); ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label"><?php echo e(_lang('Doctor Phone No')); ?></label>
                                                                <input type="text" readonly class="form-control "
                                                                    value="<?php echo e($doctor_phone_number[$i] ?? 'N/A'); ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label"><?php echo e(_lang('Practice Name Of Restoring Dentist')); ?></label>
                                                                <input type="text" readonly class="form-control "
                                                                    value="<?php echo e($restoring_dentist_name[$i] ?? 'N/A'); ?> ">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label"><?php echo e(_lang('Implant Restoration Date')); ?></label>
                                                                <input type="text" readonly class="form-control "
                                                                    value="<?php echo e($Implant_Restoration_date[$i] ?? 'N/A'); ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label"><?php echo e(_lang('Abutment Type')); ?></label>
                                                                <input type="text" readonly class="form-control "
                                                                    value="<?php echo e($abutment_type[$i] ?? 'N/A'); ?>">
                                                            </div>
                                                        </div>

                                                        <?php
                                                            $m = App\Manufacturer::where('manufacturer_id', $manufactures[$i])->first();
                                                            
                                                            if ($m->manufacturer_id == '0') {
                                                                $m->manufacturer_name = null;
                                                            }
                                                            
                                                        ?>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label"><?php echo e(_lang('Manufactures')); ?></label>
                                                                <input type="text" readonly class="form-control "
                                                                    value="<?php echo e($m->manufacturer_name ?? ($manufactures[$i] ?? 'N/A')); ?>">
                                                            </div>
                                                        </div>

                                                        <?php if($brand): ?>
                                                            <?php
                                                                if (isset($brand[$i])) {
                                                                    $b = App\Brand::where('brand_id', $brand[$i])->first();
                                                                }
                                                            ?>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label
                                                                        class="control-label"><?php echo e(_lang('Brand')); ?></label>
                                                                    <input type="text" readonly
                                                                        class="form-control"
                                                                        data-real-value="<?php echo e(isset($brand[$i]) ? $brand[$i] : 'N/A'); ?>"
                                                                        value="<?php echo e($b->brand_name ?? ($brand[$i] ?? 'N/A')); ?>">
                                                                </div>
                                                            </div>
                                                        <?php endif; ?>
                                                        <?php if($platform): ?>
                                                            <?php
                                                                $p = App\Diameter::where('delimeter_id', $platform[$i])->first();
                                                            ?>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label
                                                                        class="control-label"><?php echo e(_lang('Platform')); ?></label>
                                                                    <input type="text" readonly
                                                                        class="form-control "
                                                                        value="<?php echo e($p ? $p->delimiter_name : $platform[$i] ?? 'N/A'); ?>">
                                                                </div>
                                                            </div>
                                                        <?php endif; ?>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label"><?php echo e(_lang('Reference Part')); ?></label>
                                                                <input type="text" readonly class="form-control "
                                                                    value="<?php echo e($reference_Part[$i] ? $reference_Part[$i] : 'N/A'); ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label"><?php echo e(_lang('Lot')); ?></label>
                                                                <input type="text" readonly class="form-control "
                                                                    value="<?php echo e($lot[$i] ? $lot[$i] : 'N/A'); ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label"><?php echo e(_lang('Implant Surgery')); ?></label>
                                                                <input type="text" readonly class="form-control "
                                                                    value="<?php echo e($implant_surgery[$i] ? $implant_surgery[$i] : 'N/A'); ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                <?php endfor; ?>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="col-12 hidingWhilePrint">
            <button class="btn btn-primary btn-sm add_promte" onclick="">Add Another Implant</button>
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
<?php else: ?>
<div class='row'>
    <div class='col-12 hiding_text'>
        <h3><?php echo e($patiente->fname); ?> has hidden his information from you</h3>
        <img src='<?php echo e(asset('public/theme/myweb/images/blur.png')); ?>' alt='image' />
    </div>
</div>
<?php endif; ?>
<?php else: ?>
<?php
session(['doctor_register_portal_id' => $patiente->id]);
?>
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
                                            <?php if(Auth::Check()): ?>
                                                <label class="control-label"><?php echo e(_lang('First Name')); ?></label>
                                                <input type="text" readonly class="form-control"
                                                    value="<?php echo e($patiente->fname ?? 'N/A'); ?>">
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label"><?php echo e(_lang('Last Name')); ?></label>
                                            <input type="text" readonly class="form-control"
                                                value="<?php echo e($patiente->lname ?? 'N/A'); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label"><?php echo e(_lang('Strees Address')); ?></label>
                                            <input type="text" readonly class="form-control "
                                                value="<?php echo e($patiente->streesAddress ?? 'N/A'); ?>">
                                        </div>
                                    </div>
                                    <?php
                                        
                                        $c = App\City::where('id', $patiente->city)->first();
                                        $s = App\State::where('id', $patiente->State)->first();
                                        $countries = App\Country::where('id', $patiente->country)->first();
                                    ?>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label"><?php echo e(_lang('Country')); ?></label>
                                            <input type="text" readonly class="form-control "
                                                value="<?php echo e($countries->name ?? 'N/A'); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label"><?php echo e(_lang('State')); ?></label>
                                            <input type="text" readonly class="form-control "
                                                value="<?php echo e($s->name ?? 'N/A'); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label"><?php echo e(_lang('City')); ?></label>
                                            <input type="text" readonly class="form-control"
                                                value="<?php echo e($c->name ?? 'N/A'); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label"><?php echo e(_lang('Zip Code')); ?></label>
                                            <input type="text" readonly class="form-control "
                                                value="<?php echo e($patiente->zipCode ?? 'N/A'); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label"><?php echo e(_lang('Email')); ?></label>
                                            <input type="text" readonly class="form-control "
                                                value="<?php echo e($patiente->email ?? 'N/A'); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label"><?php echo e(_lang('Phone No')); ?></label>
                                            <input type="text" readonly class="form-control "
                                                value="<?php echo e($patiente->number ?? 'N/A'); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label"><?php echo e(_lang('Age')); ?></label>
                                            <input type="text" readonly class="form-control "
                                                value="<?php echo e($patiente->age ?? 'N/A'); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label"><?php echo e(_lang('Gender')); ?></label>
                                            <input type="text" readonly class="form-control "
                                                value="<?php echo e($patiente->gender ?? 'N/A'); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 my-4 hidingWhilePrint" style='text-align:end;'>
                                    <button onclick="printPage()" class='btn btn-warning'>Print</button>
                                    <button class='btn btn-danger' data-toggle="modal"
                                        data-target="#exampleModal">Share</button>
                                    <input type='hidden' value='<?php echo e(route('sharePatient', [$patiente->id])); ?>'
                                        id="myAnchorTag" />
                                </div>

                                <?php
                                    
                                    if ($patiente->id) {
                                        $tooth = App\TeethData::where('patiente_id', $patiente->id)->get();
                                    }
                                ?>
                                <div class='row print-section'>
                                    <?php $__currentLoopData = $tooth; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teeth): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
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
                                        ?>

                                        <div class='row flex col-12'>
                                            <div class="col-6 my-4">
                                                <h5>Information About Dentist and Implant:</h5>
                                            </div>
                                            <?php if(Auth::Check() && Auth::user()->user_status == 'patient'): ?>
                                                <div class="col-12 my-4 text-left text-white" style='text-align:end;'>
                                                    <a class='btn btn-success'
                                                        href='<?php echo e(route('edit.slot', [$teeth->id, $patiente])); ?>'>Edit
                                                        Slots</a>
                                                </div>
                                            <?php endif; ?>
                                            <?php if(Auth::Check() && Auth::user()->user_status == 'Dental_Specialist'): ?>
                                                <?php if($patiente->requets_for_editing == 0): ?>
                                                    <!--0 means request for editing-->
                                                    <!--1 means pending-->
                                                    <!--2 means request accept-->
                                                    <!--3 means rejected-->

                                                    <div class='container-fluid'>
                                                        <div class='row'>
                                                            <div class="col-12">
                                                                <form method='post'
                                                                    action='<?php echo e(route('editingRequest', [$patiente->id])); ?>'>
                                                                    <?php echo csrf_field(); ?>
                                                                    <div class="form-group">
                                                                        <input type='hidden' value='1'
                                                                            name='requets_for_editing'>
                                                                        <input type='hidden'
                                                                            value='<?php echo e($patiente->email); ?>'
                                                                            name='request_email'>
                                                                        <input type='submit' class='btn btn-success'
                                                                            value='Request for editing'>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php elseif($patiente->requets_for_editing == 1): ?>
                                                    <div class='container-fluid'>
                                                        <div class='row'>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <a class='btn btn-success text-white'>Pending
                                                                        Request</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php elseif($patiente->requets_for_editing == 2): ?>
                                                    <?php if($patiente->user_edit_allow == 1): ?>
                                                        <div class="col-12 my-4 text-left text-white"
                                                            style='text-align:end;'>
                                                            <a class='btn btn-success'
                                                                href='<?php echo e(route('edit.slot', [$teeth->id, $patiente])); ?>'>Edit
                                                                Slots</a>
                                                        </div>
                                                    <?php endif; ?>
                                                <?php elseif($patiente->requets_for_editing == 3): ?>
                                                    <?php if($patiente->user_edit_allow == 0): ?>
                                                        <div class='container'>
                                                            <div class='row'>
                                                                <div class="col-12">
                                                                    <form method='post'
                                                                        action='<?php echo e(route('editingRequest', [$patiente->id])); ?>'>
                                                                        <?php echo csrf_field(); ?>
                                                                        <div class="form-group">
                                                                            <input type='hidden' value='1'
                                                                                name='requets_for_editing'>
                                                                            <input type='hidden'
                                                                                value='<?php echo e($patiente->email); ?>'
                                                                                name='request_email'>
                                                                            <input type='submit'
                                                                                class='btn btn-success'
                                                                                value='Request for editing'>
                                                                        </div>
                                                                    </form>
                                                                    <p class='text-danger'>
                                                                        <?php echo e($patiente->fname); ?>

                                                                        Reject your request!</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            <?php endif; ?>


                                        </div>


                                        <!--<div class="col-md-6">-->
                                        <!--    <div class="form-group">-->
                                        <!--        <label-->
                                        <!--            class="control-label"><?php echo e(_lang('Current Dentist')); ?></label>-->
                                        <!--        <input type="text" readonly class="form-control "-->
                                        <!--            value="<?php echo e($teeth->current_dentist ?? 'N/A'); ?>">-->
                                        <!--    </div>-->
                                        <!--</div>-->


                                        <!--$dental_implant-->
                                        <?php
                                            $allow_doctor_for_edit = App\DoctorRegisterPortal::where('user_id', Auth::user()->id)
                                                ->where('user_edit_allow', 1)
                                                ->where('status', 'patient')
                                                ->first();
                                            $doctors_name = json_decode($teeth->doctor_name);
                                            $doctor_phone_number = json_decode($teeth->doctor_phone_number);
                                            $Implant_Restoration_date = json_decode($teeth->Implant_Restoration_date);
                                            $abutment_type = json_decode($teeth->abutment_type);
                                            $restoring_dentist_name = json_decode($teeth->restoring_dentist_name);
                                        ?>
                                        <?php if($dental_implant): ?>
                                            <?php for($i = 0; $i < $teeth_count; $i++): ?>
                                                <?php
                                                    $new_dental_word = str_replace('-', ' # ', $dental_implant[$i]);
                                                    $words = explode('-', $dental_implant[$i]);
                                                    $teeth_no = intval($words[1]);
                                                    
                                                    $json_images = App\ToothImage::where('doctor_register_portal_id', $patiente->id)
                                                        ->where('tooth_id', $teeth_no)
                                                        ->where('teeth_data_id', $teeth->id)
                                                        ->first();
                                                    if ($json_images) {
                                                        $array_images = json_decode($json_images->images);
                                                        $countImages = count($array_images);
                                                    } else {
                                                        $countImages = 0; // Set count to 0 if there are no images
                                                    }
                                                ?>
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h5 style="text-transform: capitalize">
                                            <?php echo e($new_dental_word); ?>:</h5>
                                    </div>
                                </div>

                                <div class="row">
                                    <?php for($j = 0; $j < $countImages; $j++): ?>
                                        <?php if(isset($array_images[$j])): ?>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <img src="<?php echo e(asset('public/image/xrays/' . $array_images[$j])); ?>"
                                                        alt="image" class="img-fluid"
                                                        style="width: 300px; height: 300px;">
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </div>
                                <div class="row d-flex">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label"><?php echo e(_lang('Doctor Name')); ?></label>
                                            <input type="text" readonly class="form-control "
                                                value="<?php echo e($doctors_name[$i] ?? 'N/A'); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label"><?php echo e(_lang('Doctor Phone No')); ?></label>
                                            <input type="text" readonly class="form-control "
                                                value="<?php echo e($doctor_phone_number[$i] ?? 'N/A'); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label
                                                class="control-label"><?php echo e(_lang('Practice Name Of Restoring Dentist')); ?></label>
                                            <input type="text" readonly class="form-control "
                                                value="<?php echo e($restoring_dentist_name[$i] ?? 'N/A'); ?> ">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label
                                                class="control-label"><?php echo e(_lang('Implant Restoration Date')); ?></label>
                                            <input type="text" readonly class="form-control "
                                                value="<?php echo e($Implant_Restoration_date[$i] ?? 'N/A'); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label"><?php echo e(_lang('Abutment Type')); ?></label>
                                            <input type="text" readonly class="form-control "
                                                value="<?php echo e($abutment_type[$i] ?? 'N/A'); ?>">
                                        </div>
                                    </div>

                                    <?php
                                        $m = App\Manufacturer::where('manufacturer_id', $manufactures[$i])->first();
                                        
                                        if ($m->manufacturer_id == '0') {
                                            $m->manufacturer_name = null;
                                        }
                                        
                                    ?>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label"><?php echo e(_lang('Manufactures')); ?></label>
                                            <input type="text" readonly class="form-control "
                                                value="<?php echo e($m->manufacturer_name ?? ($manufactures[$i] ?? 'N/A')); ?>">
                                        </div>
                                    </div>

                                    <?php if($brand): ?>
                                        <?php
                                            if (isset($brand[$i])) {
                                                $b = App\Brand::where('brand_id', $brand[$i])->first();
                                            }
                                        ?>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label"><?php echo e(_lang('Brand')); ?></label>
                                                <input type="text" readonly class="form-control"
                                                    data-real-value="<?php echo e(isset($brand[$i]) ? $brand[$i] : 'N/A'); ?>"
                                                    value="<?php echo e($b->brand_name ?? ($brand[$i] ?? 'N/A')); ?>">
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if($platform): ?>
                                        <?php
                                            $p = App\Diameter::where('delimeter_id', $platform[$i])->first();
                                        ?>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label"><?php echo e(_lang('Platform')); ?></label>
                                                <input type="text" readonly class="form-control "
                                                    value="<?php echo e($p ? $p->delimiter_name : $platform[$i] ?? 'N/A'); ?>">
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label"><?php echo e(_lang('Reference Part')); ?></label>
                                            <input type="text" readonly class="form-control "
                                                value="<?php echo e($reference_Part[$i] ? $reference_Part[$i] : 'N/A'); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label"><?php echo e(_lang('Lot')); ?></label>
                                            <input type="text" readonly class="form-control "
                                                value="<?php echo e($lot[$i] ? $lot[$i] : 'N/A'); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label"><?php echo e(_lang('Implant Surgery')); ?></label>
                                            <input type="text" readonly class="form-control "
                                                value="<?php echo e($implant_surgery[$i] ? $implant_surgery[$i] : 'N/A'); ?>">
                                        </div>
                                    </div>
                                </div>
                                <?php endfor; ?>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <div class="col-12 hidingWhilePrint">
                                <button class="btn btn-primary btn-sm add_promte" onclick="">Add Another
                                    Implant</button>
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

<?php endif; ?>

</div>
<!--End main content Inner-->
</div>
<!--End main content-->

</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Share Tooth Report</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method='post' action='<?php echo e(route('share')); ?>'>
                <?php echo csrf_field(); ?>
                <div class="modal-footer">
                    <input type='text' id='email' name='email' class='form-control'>
                    <input type='hidden' name='id' value='<?php echo e($id); ?>' class='form-control'>

                </div>
                <div class="modal-body">
                    <button type="button" class="btn btn-secondary copy_link" onclick='copyLinkToClipboard()'>Copy
                        Link</button>
                    <button type="submit" class="btn btn-primary copy_link">Email Tooth Report</button>
                </div>
            </form>


        </div>
    </div>
</div>

<script src="<?php echo e(asset('public/theme/myweb/js/main.js')); ?>"></script>

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script>
        const addPromteBtn = document.querySelector(".add_promte")
        addPromteBtn.addEventListener("click", () => {
        const DOCTOR_PORTAL_HTML = document.querySelector(".another_implant")
        DOCTOR_PORTAL_HTML.insertAdjacentHTML("beforeend", `
        <div class='container'>
                <div class="row">
                    <div class="col-12">
                        <div class="main_doctor_register_portal">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-12 text-center">
                                        <div class="doctor_register_portal_heading">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <form action="<?php echo e(route('implantStore')); ?>" method="post" id="form"
                                            enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                            <div class="row">
                                             <input type="hidden" name="patiente_id" value='<?php echo e($patiente->id); ?>'>
                                                <input type="hidden" value='patient' name='status'>
                                            
                                                <div class="row">
    <div class="col-12">
        <p class="text-danger my-5"><b><u>"Note: Please fill all fields above to proceed to implant registration portion below!"</u></b></p>
    </div>
</div>

                                             <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="teeth-image-p">
                                                        <div class="teeth-image">
                                                            <div class="top-teeth-images">
                                                                <img class="top-molar"
                                                                    src="<?php echo e(asset('public/theme/myweb/images/top-molar.png')); ?>"
                                                                    alt="">
                                                                <div class="teeths">
                                                                    <div class="teeth" id="tooth-1"><img
                                                                            class="img-fluid"
                                                                            src="<?php echo e(asset('public/theme/myweb/images/teeth-1.png')); ?>"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-2"><img
                                                                            class="img-fluid"
                                                                            src="<?php echo e(asset('public/theme/myweb/images/teeth-2.png')); ?>"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-3"><img
                                                                            class="img-fluid"
                                                                            src="<?php echo e(asset('public/theme/myweb/images/teeth-3.png')); ?>"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-4"><img
                                                                            class="img-fluid"
                                                                            src="<?php echo e(asset('public/theme/myweb/images/teeth-4.png')); ?>"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-5"><img
                                                                            class="img-fluid"
                                                                            src="<?php echo e(asset('public/theme/myweb/images/teeth-5.png')); ?>"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-6"><img
                                                                            class="img-fluid"
                                                                            src="<?php echo e(asset('public/theme/myweb/images/teeth-6.png')); ?>"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-7"><img
                                                                            class="img-fluid"
                                                                            src="<?php echo e(asset('public/theme/myweb/images/teeth-7.png')); ?>"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-8"><img
                                                                            class="img-fluid"
                                                                            src="<?php echo e(asset('public/theme/myweb/images/teeth-8.png')); ?>"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-9"><img
                                                                            class="img-fluid"
                                                                            src="<?php echo e(asset('public/theme/myweb/images/teeth-9.png')); ?>"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-10"><img
                                                                            class="img-fluid"
                                                                            src="<?php echo e(asset('public/theme/myweb/images/teeth-10.png')); ?>"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-11"><img
                                                                            class="img-fluid"
                                                                            src="<?php echo e(asset('public/theme/myweb/images/teeth-11.png')); ?>"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-12"><img
                                                                            class="img-fluid"
                                                                            src="<?php echo e(asset('public/theme/myweb/images/teeth-12.png')); ?>"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-13"><img
                                                                            class="img-fluid"
                                                                            src="<?php echo e(asset('public/theme/myweb/images/teeth-13.png')); ?>"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-14"><img
                                                                            class="img-fluid"
                                                                            src="<?php echo e(asset('public/theme/myweb/images/teeth-14.png')); ?>"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-15"><img
                                                                            class="img-fluid"
                                                                            src="<?php echo e(asset('public/theme/myweb/images/teeth-15.png')); ?>"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-16"><img
                                                                            class="img-fluid"
                                                                            src="<?php echo e(asset('public/theme/myweb/images/teeth-16.png')); ?>"
                                                                            alt="">
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="btm-teeth-images">
                                                                <img class="top-molar"
                                                                    src="<?php echo e(asset('public/theme/myweb/images/btm-molar.png')); ?>"
                                                                    alt="">
                                                                <div class="teeths">
                                                                    <div class="teeth" id="tooth-17"><img
                                                                            class="img-fluid"
                                                                            src="<?php echo e(asset('public/theme/myweb/images/teeth-17.png')); ?>"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-18"><img
                                                                            class="img-fluid"
                                                                            src="<?php echo e(asset('public/theme/myweb/images/teeth-18.png')); ?>"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-19"><img
                                                                            class="img-fluid"
                                                                            src="<?php echo e(asset('public/theme/myweb/images/teeth-19.png')); ?>"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-20"><img
                                                                            class="img-fluid"
                                                                            src="<?php echo e(asset('public/theme/myweb/images/teeth-20.png')); ?>"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-21"><img
                                                                            class="img-fluid"
                                                                            src="<?php echo e(asset('public/theme/myweb/images/teeth-21.png')); ?>"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-22"><img
                                                                            class="img-fluid"
                                                                            src="<?php echo e(asset('public/theme/myweb/images/teeth-22.png')); ?>"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-23"><img
                                                                            class="img-fluid"
                                                                            src="<?php echo e(asset('public/theme/myweb/images/teeth-23.png')); ?>"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-24"><img
                                                                            class="img-fluid"
                                                                            src="<?php echo e(asset('public/theme/myweb/images/teeth-24.png')); ?>"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-25"><img
                                                                            class="img-fluid"
                                                                            src="<?php echo e(asset('public/theme/myweb/images/teeth-25.png')); ?>"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-26"><img
                                                                            class="img-fluid"
                                                                            src="<?php echo e(asset('public/theme/myweb/images/teeth-26.png')); ?>"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-27"><img
                                                                            class="img-fluid"
                                                                            src="<?php echo e(asset('public/theme/myweb/images/teeth-27.png')); ?>"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-28"><img
                                                                            class="img-fluid"
                                                                            src="<?php echo e(asset('public/theme/myweb/images/teeth-28.png')); ?>"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-29"><img
                                                                            class="img-fluid"
                                                                            src="<?php echo e(asset('public/theme/myweb/images/teeth-29.png')); ?>"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-30"><img
                                                                            class="img-fluid"
                                                                            src="<?php echo e(asset('public/theme/myweb/images/teeth-30.png')); ?>"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-31"><img
                                                                            class="img-fluid"
                                                                            src="<?php echo e(asset('public/theme/myweb/images/teeth-31.png')); ?>"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-32"><img
                                                                            class="img-fluid"
                                                                            src="<?php echo e(asset('public/theme/myweb/images/teeth-32.png')); ?>"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                              
                                                <div class="col-lg-6">
                                                           <div class="content-info">
                                                           <h6>Information for Use:</h6>
                                                                <ul>
                                                                    <li>1. Click on the tooth an implant has been placed to start registering for that site.</li>
                                                                    <li>2.	If multiple implants placed, click all teeth that apply.</li>
                                                                    <li>3.	Fill in the information below and use drop down menus for ease of use.</li>
                                                                    <li>4.	Mandatory headings are displayed with a “*”.</li>
                                                                </ul>
                                                            </div>
                                                      
                                                </div>
                                            </div>
                                                <div class="col-12">
                                                    <div class="subForm">
                                                        <div class="row">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-12 mt-5 ">
                                                    <div class="doctor_portal_rejister">
                                                        <input class="btn-secondary" type="submit" id="submit"
                                                            value="Add Implant">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                `)
        var storedData = localStorage.getItem("manufactures");
        var manufacturing_data = JSON.parse(storedData);

        var teethId = 1;
        var teethBtns = document.querySelectorAll(".teeth");
        teethBtns.forEach((element) => {
            const str = element.id;
            const match = str.match(/\d+/);
            const result = match ? match[0] : null;
            element.addEventListener("click", () => {
                var subForm = document.querySelector(".subForm .row");
                subForm.insertAdjacentHTML(
                    "beforeend",
                    `<div class="form-child col-6">
            <div class="col-12 text-center">
              <button type="button" class="removeBtn"  onclick="decrementTeethId(this, ${teethId})">X</button>
            </div>
            <div class="col-12">
              <label for="text">Dental Implant Site/Tooth#:</label>
              <input type="text" name="dental_implant[]" value="${element.id}">
            </div>
            <div class="col-12">
              <label for="Manufactures">* Manufacturer: (choose one)</label>
              <div class="select-parent">
              <select name="manufactures[]" id="Manufactures${teethId}" onchange="get_brand_data('${teethId}')" class="form-select Manufactures">
              <option value="">Select Manufacturer</option>
              ${manufacturing_data
                .map(
                  (manufacturer) =>
                    `<option value="${manufacturer.manufacturer_id}">${manufacturer.manufacturer_name}</option>`
                )
                .join("")}
            </select>
            
             <input type='text' name="" class='form-control Manufactures' style='display:none;' id="hiddenManufactures${teethId}" placeholder='Enter Another Manufacture'>
              </div>
            </div>
            <div class="col-12">
              <label for="Brand">* Brand: (choose one)</label>
              <div class="select-parent">
                <select name="brand[]" id="Brand_${teethId}" onchange="get_diameter_data('${teethId}')"  class="form-select Brand">
                  <option value="">Select Brand</option>
                </select>
                  <input type='text' name="" class='form-control Manufactures' style='display:none;' id="hiddenBrand${teethId}" placeholder='Enter Another Brand'>
              </div>
            </div>
            <div class="col-12">
              <label for="Platform">* Platform size/Diameter (choose one):</label>
              <div class="select-parent">
                <select name="" id="platform_${teethId}"  class="form-select Platform">
                  <option value="">Select Platform</option>
                </select>
                       <input type='text' name="platform[]" class='form-control Manufactures' style='display:none;' id="hiddenPlatform${teethId}" placeholder='Enter Another Platform'>
              </div>
            </div>
            <div class="col-12">
              <label for="text">Reference/Part #:</label>
              <input type="text" name="reference_Part[]" placeholder="Enter here">
            </div>
            <div class="col-12">
              <label for="text">Lot #</label>
              <input type="text" name="lot[]" placeholder="Enter here">
            </div>
            <div class="col-12">
              <label for="date">Date of implant surgery</label>
              <input type="date" name="implant_surgery[]" placeholder="Enter here">
            </div>
            <div class="col-12">
         <label for="text">Implant Placing Doctor name</label>
         <input type="text" placeholder="Enter here" name="doctor_name[]">
         </div>
         <div class="col-12 ">
             <label for="text">Implant Placing Doctor Phone #</label>
            <input type="text" id='patient_phone_number${teethId}' onchange="formatNumber(${teethId})" placeholder="Enter here" name="doctor_phone_number[]"  class='patient_phone_number'>
        </div>
        <div class="col-12">
            <label for="text">Name of Restoring Dentist:</label>
            <input type="text" placeholder="Enter here" name='restoring_dentist_name[]'>
        </div>
        <div class="col-12">
          <label for="text">Practice Name of Restoring Dentist</label>
          <input type="text" placeholder="Enter here" name='practice_name_of_restoring_dentist[]'> 
        </div>
        <div class="col-12">
            <label for="date">Date of Implant Restoration/Abutment & Crown Placement:</label>
            <input type="date" placeholder="Enter here" name='Implant_Restoration_date[]'>
        </div>
        <div class="col-12">
            <label for="text">Type of Abutment</label>
            <input type="text" placeholder="Enter here" name='abutment_type[]'>
        </div>
           
           
            <div class="col-12 col-lg-12">
            <label>Attach X-Rays:Max 2</label>
              <input type="file" class="image-input-main"  name="images${teethId}[]" multiple  multiple accept="image/*">
                <input type="hidden" value='${result}'  name='tooth_ids[]'> 
              <div class="image-container-main"></div>
            </div>
        </div> 
          </div>`
                );

                teethId++;
            });
        });
        
        // showfileimages start//
        const imageInputs = document.querySelectorAll(".image-input-main");
        const imageContainers = document.querySelectorAll(".image-container-main");

        imageInputs.forEach((input, index) => {
        input.addEventListener("change", (event) => {
          const selectedImages = event.target.files;
            consol.log("show image work")
          // Clear previous content
          imageContainers[index].innerHTML = "";

          for (let i = 0; i < selectedImages.length; i++) {
            const reader = new FileReader();
            reader.onload = (e) => {
              const imageMiniContainer = document.createElement("div");
              imageMiniContainer.className = "span_image";

              const imageElement = document.createElement("img");
              imageElement.src = e.target.result;
              imageElement.className = "uploaded-image";
              imageMiniContainer.appendChild(imageElement);

              const deleteButton = document.createElement("span");
              deleteButton.className = "delete-button";
              deleteButton.textContent = "X";
              deleteButton.addEventListener("click", () => {
                imageMiniContainer.remove();
              });
              imageMiniContainer.appendChild(deleteButton);

              imageContainers[index].appendChild(imageMiniContainer);
            };
            reader.readAsDataURL(selectedImages[i]);
          }
        });
      });

        // showfileimages end
        
    });
</script>
<script>
    function decrementTeethId(buttonElement, teethId) {
        buttonElement.parentNode.parentNode.remove();
        teethId--;
    }


    function removeFields(e) {
        // const subForm = document.querySelector('.subForm .row .form-child')
        console.log(e.target.class);
    }
    $(document).ready(function() {
        $.ajax({
                url: "/manufacture_session",
                type: "GET",
                dataType: "json",
            })
            .done(function(data) {
                // Success: data contains the response from the server
                manufactures = data; // Assign the data to the global manufactures variable
                localStorage.setItem("manufactures", JSON.stringify(manufactures));
            })
            .fail(function(jqXHR, textStatus, errorThrown) {
                // Error: Handle the error here
                console.log("Error: " + textStatus, errorThrown);
            });

    });
    $(document).ready(function() {
        $("#search").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            console.log(value);
            $("#myTable li").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            });
        });
    });
</script>

<!--End Page Container-->
<?php echo $__env->make('theme.myweb.userDashboard.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
<?php /**PATH /home/betarwreality/public_html/resources/views/theme/myweb/userDashboard/patienteView.blade.php ENDPATH**/ ?>