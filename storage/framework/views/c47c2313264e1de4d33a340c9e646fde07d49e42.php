<?php if(Auth::check()): ?>
    <?php
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
    ?>
<?php endif; ?>
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
        <a href="<?php echo e(url('/')); ?>">
            <span class="text-white ml-1 d-inline-block">
                <img src='<?php echo e(asset('public/theme/myweb/images/logo.png')); ?>'>
            </span>
        </a>
    </div>
    <div class="user-details">
        <img class="avatar"
            src="<?php echo e(Auth::user()->profile_picture != '' ? asset('public/uploads/profile/' . Auth::user()->profile_picture) : asset('public/uploads/profile/default.png')); ?>"
            alt="avatar">
        <span class="text-white d-inline-block"> </span><br>
        <div class="user-name_2">
            <a href="<?php echo e(url('doctor_register_portal')); ?>"><i class="ti-dashboard"></i>
                <span><?php echo e(Auth::user()->first_name); ?> <?php echo e(Auth::user()->last_name); ?></span>
            </a>
            <?php if(Auth::user()->practitioners_name): ?>
                <p><?php echo e(Auth::user()->practitioners_name); ?></p>
            <?php endif; ?>
        </div>
    </div>
    <div class="main-menu" style='overflow-y: scroll;margin-bottom: 90px;'>
        <div class="menu-inner">
            <nav class="active">
                <ul class="metismenu hidingWhilePrint" id="products_table">
                    <li class="active">
                    </li>
                    <?php if(Auth::check() && Auth::user()->user_status == 'Dental_Specialist'): ?>
                        <li><a href='<?php echo e(url('doctor_register_portal')); ?>'><i class="ti-ticket"></i> <span>Slots
                                    ( <?php if($count_patient > 0): ?>
                                        <?php echo e($count_patient); ?>

                                    <?php else: ?>
                                        0
                                    <?php endif; ?>/<?php echo e($columnCount); ?>)</span></a>
                        </li>
                    <?php else: ?>
                    <?php endif; ?>
                    <?php if(Auth::check() && Auth::user()->user_status == 'Dental_Specialist'): ?>
                        <?php if($count_patient > 0): ?>
                            <div>
                                <input type='text' placeholder='search' class='form-control' id='search'>
                            </div>
                            <div id='myTable'>
                                <?php $__currentLoopData = $patient_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             
                              
                                    <li><a href="<?php echo e(route('viewPatient', [$item->id ])); ?>"><i class="ti-ticket"></i>
                                            <span><?php echo e($loop->index + 1); ?> )<?php echo e($item->fname); ?>

                                                <?php echo e($item->lname); ?></span></a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>

                    <?php if(Auth::check() && Auth::user()->user_status == 'patient'): ?>
                        <?php if($single_patient): ?>
                            <li><a href="<?php echo e(route('viewPatient', [$single_patient->id])); ?>"><i class="ti-ticket"></i>
                                    <span>1 )<?php echo e($single_patient->fname); ?>  <?php echo e($single_patient->lname); ?> </span></a>
                            </li>
                        <?php endif; ?>


                    <?php endif; ?>

                    <?php if(Auth::check() && Auth::user()->user_status == 'Dental_Specialist'): ?>
                        <li classs='btn btn-danger btn-sm '><a href="<?php echo e(url('pricing')); ?>"
                                class='btn btn-danger btn-sm position_class'
                                style='margin-top:24rem; margin-left: 0rem;'>Upgrade</a>
                        </li>
                    <?php endif; ?>

                </ul>
            </nav>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp 7.4\htdocs\id2\resources\views/theme/myweb/userDashboard/sidebar.blade.php ENDPATH**/ ?>