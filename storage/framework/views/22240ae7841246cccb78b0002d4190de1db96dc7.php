<?php $__env->startSection('content'); ?>
<?php $permissions = permission_list(); ?>
<?php $user_type = Auth::user()->user_type; ?>

<link rel="stylesheet" href="<?php echo e(asset('public/backend/plugins/chartjs/Chart.min.css')); ?>">

<div class="row">
	<?php if(in_array('dashboard.total_sales_widget',$permissions) || $user_type == 'admin'): ?>
	<div class="col-md-12 mb-12">
		<div class="card">
			<div class="seo-fact sbg1">
				<div class="p-4">
					<div class="seofct-icon">
						<span><?php echo e(_lang('Welcome to Dashboard')); ?></span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>




	

</div>

<!--<div class="row d-flex align-items-stretch">-->
<!--	<?php if(in_array('dashboard.weekly_sales_widget',$permissions) || $user_type == 'admin'): ?>-->
	<!-- Weekly Sales start -->
<!--	<div class="col-lg-7 mt-2">-->
<!--		<div class="card h-100">-->
<!--			<div class="card-body pb-0">-->
<!--				<h4 class="header-title"><?php echo e(_lang('Weekly Sales')); ?></h4>-->
<!--				<canvas id="weekly_sales"></canvas>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
	<!-- Weekly Sales end -->
<!--	<?php endif; ?>-->


<!--	<?php if(in_array('dashboard.top_view_items_widget',$permissions) || $user_type == 'admin'): ?>-->
	<!-- Top Viewed Products start -->
<!--	<div class="col-lg-5 mt-2">-->
<!--		<div class="card h-100">-->
<!--			<div class="card-body">-->
<!--				<h4 class="header-title"><?php echo e(_lang('Top Viewed Products')); ?></h4>-->
<!--				<div class="table-responsive">-->
<!--					<table class="table">-->
<!--						<thead>-->
<!--							<th><?php echo e(_lang('Product')); ?></th>-->
<!--							<th class="text-center"><?php echo e(_lang('Views')); ?></th>-->
<!--						</thead>-->
<!--						<tbody>-->
<!--							<?php $__currentLoopData = $top_view_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $top_view_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>-->
<!--								<tr>-->
<!--									<td><?php echo e($top_view_product->translation->name); ?></td>-->
<!--									<td class="text-center"><?php echo e($top_view_product->viewed); ?></td>-->
<!--								</tr>-->
<!--							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->
<!--						</tbody>-->
<!--					</table>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
	<!-- Top Viewed Products end -->
<!--	<?php endif; ?>-->
<!--</div>-->

<!--<?php if(in_array('dashboard.recent_order_widget',$permissions) || $user_type == 'admin'): ?>-->
<!--<div class="row">-->
	<!-- Recent Orders start -->
<!--	<div class="col-lg-12 mt-5">-->
<!--		<div class="card">-->
<!--			<div class="card-body">-->
<!--				<h4 class="header-title"><?php echo e(_lang('Recent Orders')); ?></h4>-->
<!--				<div class="table-responsive">-->
<!--					<table class="table">-->
<!--						<thead>-->
<!--							<th><?php echo e(_lang('Customer Name')); ?></th>-->
<!--							<th><?php echo e(_lang('Email')); ?></th>-->
<!--							<th><?php echo e(_lang('Total')); ?></th>-->
<!--							<th><?php echo e(_lang('Status')); ?></th>-->
<!--							<th><?php echo e(_lang('Payment')); ?></th>-->
<!--							<th class="text-center"><?php echo e(_lang('Action')); ?></th>-->
<!--						</thead>-->
<!--						<tbody>-->
<!--							<?php $__currentLoopData = $recent_orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recent_order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>-->
<!--								<tr>-->
<!--									<td><?php echo e($recent_order->customer_name); ?></td>-->
<!--									<td><?php echo e($recent_order->customer_email); ?></td>-->
<!--									<td><?php echo xss_clean(decimalPlace(convert_currency_2(1, $recent_order->currency_rate, $recent_order->total), $recent_order->currency)); ?></td>-->
<!--									<td><?php echo xss_clean($recent_order->getStatus()); ?></td>-->
<!--									<td><?php echo xss_clean($recent_order->getPaymentStatus()); ?></td>-->
<!--									<td class="text-center">-->
<!--										<div class="dropdown">-->
<!--											<button class="btn btn-light btn-xs dropdown-toggle" type="button" data-toggle="dropdown"><?php echo e(_lang('Action')); ?> <i class="fas fa-angle-down"></i></button>-->
<!--											<div class="dropdown-menu">-->
<!--												<a class="dropdown-item" href="<?php echo e(action('OrderController@show', $recent_order->id)); ?>"><i class="fas fa-eye"></i> <?php echo e(_lang('View')); ?></a>-->
<!--												<form action="<?php echo e(action('OrderController@destroy', $recent_order['id'])); ?>" method="post">-->
<!--													<?php echo csrf_field(); ?>-->
<!--													<input name="_method" type="hidden" value="DELETE">-->
<!--													<button class="button-link btn-remove" type="submit"><i class="fas fa-trash"></i> <?php echo e(_lang('Delete')); ?></button>'-->
<!--												</form>	-->
<!--											</div>-->
<!--										</div>-->
<!--									</td>-->
<!--								</tr>-->
<!--							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->
<!--						</tbody>-->
<!--					</table>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
	<!-- Recent Orders end -->
<!--</div>-->
<!--<?php endif; ?>-->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js-script'); ?>
<script src="<?php echo e(asset('public/backend/plugins/chartjs/Chart.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/backend/assets/js/dashboard.js')); ?>"></script>
<?php $__env->stopSection(); ?>
        
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/betarwreality/public_html/resources/views/backend/dashboard.blade.php ENDPATH**/ ?>