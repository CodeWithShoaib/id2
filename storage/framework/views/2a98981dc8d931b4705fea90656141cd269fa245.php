

<div class="header-area" style="position: absolute;top: 0;width: 100%;z-index: 32; background:transparent; border:none;">
    <div class="row align-items-center">
  
        <!-- nav and search button -->
        <!-- profile info & task notification -->
        <div class="col-lg-6 col-12 offset-lg-6">
            <ul class="notification-area float-right">
                <li>
                    <div class="user-profile">
                        <h4 class="user-name dropdown-toggle" data-toggle="dropdown">
                            <img class="avatar user-thumb" id="my-profile-img"
                                src="<?php echo e(Auth::user()->profile_picture != '' ? asset('public/uploads/profile/' . Auth::user()->profile_picture) : asset('public/uploads/profile/default.png')); ?>"
                                alt="avatar"> <i class="fa fa-angle-down"></i>
                        </h4>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?php echo e(url('updateProfile')); ?>"><i
                                    class="ti-settings text-muted mr-2"></i> Profile Settings</a>
                            <a class="dropdown-item" href="<?php echo e(route('changePassword')); ?>"><i
                                    class="ti-pencil text-muted mr-2"></i> Change Password</a>
                            <div class="dropdown-divider mb-0"></div>
                            <a class="dropdown-item" href="<?php echo e(route('userLogout')); ?>"><i
                                    class="ti-power-off text-muted mr-2"></i>
                                Log Out</a>
                        </div>
                    </div>
                </li>

            </ul>

        </div>
    </div>
</div>
<?php /**PATH /home/betarwreality/public_html/resources/views/theme/myweb/userDashboard/headerAreaComponent.blade.php ENDPATH**/ ?>