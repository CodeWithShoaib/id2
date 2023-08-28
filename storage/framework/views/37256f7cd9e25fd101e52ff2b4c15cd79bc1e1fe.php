
    <?php echo e(Session::forget('admin_id')); ?>

<!--<li>-->
<!--	<a href="<?php echo e(route('orders.index')); ?>"><i class="ti-timer"></i> <span><?php echo e(_lang('Orders')); ?></span></a>-->
<!--</li>-->

<!--<li>-->
<!--	<a href="javascript: void(0);"><i class="ti-package"></i><span><?php echo e(_lang('Products')); ?></span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>-->
<!--	<ul class="nav-second-level" aria-expanded="false">-->
<!--		<li class="nav-item"><a class="nav-link" href="<?php echo e(route('products.index')); ?>"><?php echo e(_lang('Products')); ?></a></li>	-->
<!--		<li class="nav-item"><a class="nav-link" href="<?php echo e(route('category.index')); ?>"><?php echo e(_lang('Category')); ?></a></li>	-->
<!--		<li class="nav-item"><a class="nav-link" href="<?php echo e(route('brands.index')); ?>"><?php echo e(_lang('Brands')); ?></a></li>	-->
<!--		<li class="nav-item"><a class="nav-link" href="<?php echo e(route('tags.index')); ?>"><?php echo e(_lang('Tags')); ?></a></li>	-->
<!--	</ul>-->
<!--</li>-->

<!--<li>-->
<!--	<a href="javascript: void(0);"><i class="ti-comments"></i><span><?php echo e(_lang('Product Discussions')); ?></span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>-->
<!--	<ul class="nav-second-level" aria-expanded="false">-->
<!--		<li class="nav-item"><a class="nav-link" href="<?php echo e(route('product_comments.index')); ?>"><?php echo e(_lang('Comments')); ?></a></li>-->
<!--		<li class="nav-item"><a class="nav-link" href="<?php echo e(route('product_reviews.index')); ?>"><?php echo e(_lang('Reviews')); ?></a></li>			-->
<!--	</ul>-->
<!--</li>-->

<li><a href="<?php echo e(route('brands.index')); ?>"><i class="ti-ticket"></i> <span><?php echo e(_lang('Testimonial')); ?></span></a></li>
<li><a href="<?php echo e(route('coupons.index')); ?>"><i class="ti-ticket"></i> <span><?php echo e(_lang('Packages')); ?></span></a></li>
<li><a href="<?php echo e(route('doctor.list')); ?>"><i class="ti-ticket"></i> <span><?php echo e(_lang('Doctor List')); ?></span></a></li>
<li><a href="<?php echo e(route('patient.list')); ?>"><i class="ti-ticket"></i> <span><?php echo e(_lang('Patient List')); ?></span></a></li>
<li><a href="<?php echo e(url('admin/slotList')); ?>"><i class="ti-ticket"></i> <span><?php echo e(_lang('Payment List')); ?></span></a></li>

<!--<li><a href="<?php echo e(route('customers.index')); ?>"><i class="ti-id-badge"></i> <span><?php echo e(_lang('Customers')); ?></span></a></li>-->

<!--<li><a href="<?php echo e(route('transactions.index')); ?>"><i class="ti-credit-card"></i> <span><?php echo e(_lang('Transactions')); ?></span></a></li>-->

<li><a href="<?php echo e(route('media.index')); ?>"><i class="ti-camera"></i> <span><?php echo e(_lang('Media')); ?></span></a></li>

<!--<li><a href="<?php echo e(route('pages.index')); ?>"><i class="ti-agenda"></i> <span><?php echo e(_lang('Pages')); ?></span></a></li>-->




<!--<li>-->
<!--	<a href="javascript: void(0);"><i class="ti-world"></i><span><?php echo e(_lang('Languages')); ?></span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>-->
<!--	<ul class="nav-second-level" aria-expanded="false">-->
<!--		<li class="nav-item"><a class="nav-link" href="<?php echo e(route('languages.index')); ?>"><?php echo e(_lang('All Language')); ?></a></li>-->
<!--		<li class="nav-item"><a class="nav-link" href="<?php echo e(route('languages.create')); ?>"><?php echo e(_lang('Add New')); ?></a></li>		-->
<!--	</ul>-->
<!--</li>-->

<li>
    <a href="javascript: void(0);"><i class="ti-desktop"></i><span><?php echo e(_lang('Website Settings')); ?></span><span
            class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
    <ul class="nav-second-level" aria-expanded="false">
        <li class="nav-item"><a class="nav-link"
                href="<?php echo e(route('theme_option.update', 'theme_settings')); ?>"><?php echo e(_lang('Theme Settings')); ?></a></li>
        <!--<li class="nav-item"><a class="nav-link" href="<?php echo e(route('theme_option.update', 'home_page_settings')); ?>"><?php echo e(_lang('Page Settings')); ?></a></li>-->
    </ul>
</li>


<!--<li>-->
<!--	<a href="javascript: void(0);"><i class="ti-bar-chart"></i><span><?php echo e(_lang('Reports')); ?></span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>-->
<!--	<ul class="nav-second-level" aria-expanded="false">-->
<!--		<li class="nav-item"><a class="nav-link" href="<?php echo e(route('reports.order_report')); ?>"><?php echo e(_lang('Order Report')); ?></a></li>-->
<!--		<li class="nav-item"><a class="nav-link" href="<?php echo e(route('reports.sales_report')); ?>"><?php echo e(_lang('Sales Report')); ?></a></li>-->
<!--		<li class="nav-item"><a class="nav-link" href="<?php echo e(route('reports.product_sales_report')); ?>"><?php echo e(_lang('Product Wise Sales')); ?></a></li>-->
<!--		<li class="nav-item"><a class="nav-link" href="<?php echo e(route('reports.product_stock_report')); ?>"><?php echo e(_lang('Product Stock Report')); ?></a></li>-->
<!--		<li class="nav-item"><a class="nav-link" href="<?php echo e(route('reports.coupons_report')); ?>"><?php echo e(_lang('Coupons Report')); ?></a></li>	-->
<!--		<li class="nav-item"><a class="nav-link" href="<?php echo e(route('reports.tax_report')); ?>"><?php echo e(_lang('Tax Report')); ?></a></li>	-->
<!--		<li class="nav-item"><a class="nav-link" href="<?php echo e(route('reports.shipping_report')); ?>"><?php echo e(_lang('Shipping Report')); ?></a></li>-->
<!--		<li class="nav-item"><a class="nav-link" href="<?php echo e(route('reports.product_views_report')); ?>"><?php echo e(_lang('Product Views Report')); ?></a></li>	-->
<!--	</ul>-->
<!--</li>-->

<li>
    <a href="javascript: void(0);"><i class="ti-settings"></i><span><?php echo e(_lang('System Settings')); ?></span><span
            class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
    <ul class="nav-second-level" aria-expanded="false">
        <li class="nav-item"><a class="nav-link"
                href="<?php echo e(route('settings.update_settings')); ?>"><?php echo e(_lang('General Settings')); ?></a></li>
        <!--<li class="nav-item"><a class="nav-link" href="<?php echo e(route('currency.index')); ?>"><?php echo e(_lang('Currency Manager')); ?></a></li>-->
        <!--<li class="nav-item"><a class="nav-link" href="<?php echo e(route('settings.shipping_methods')); ?>"><?php echo e(_lang('Shipping Methods')); ?></a></li>-->
        <!--<li class="nav-item"><a class="nav-link" href="<?php echo e(route('taxes.index')); ?>"><?php echo e(_lang('Tax Settings')); ?></a></li>-->
        <!--<li class="nav-item"><a class="nav-link" href="<?php echo e(route('email_templates.index')); ?>"><?php echo e(_lang('Email Templates')); ?></a></li>-->
        <li class="nav-item"><a class="nav-link"
                href="<?php echo e(route('database_backups.list')); ?>"><?php echo e(_lang('Database Backup')); ?></a></li>
    </ul>
</li>
<?php /**PATH /home/betarwreality/public_html/resources/views/layouts/menus/admin.blade.php ENDPATH**/ ?>