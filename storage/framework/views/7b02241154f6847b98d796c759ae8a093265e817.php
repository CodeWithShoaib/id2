<?php $__env->startSection('content'); ?>
<?php
$count=count($doctors);
?>
<div class="row">
	<div class="col-lg-12">
		<div class="card no-export">
		    <div class="card-header">
				<span class="panel-title"><?php echo e(_lang('doctor List')); ?></span>
			</div>

			<div class="card-body">
				<table id="orders_table" class="table table-bordered">
					<thead>
					    <tr>
							<th><?php echo e(_lang('ID')); ?></th>
							<th><?php echo e(_lang('Name')); ?></th>
							<th><?php echo e(_lang('Email')); ?></th>
							<th><?php echo e(_lang('Phone no')); ?></th>
							<th><?php echo e(_lang('Profile Picture')); ?></th>
							<th class="text-center"><?php echo e(_lang('Action')); ?></th>
					    </tr>
					</thead>
					   <?php if($count>0): ?>
					<tbody>
					   
					      <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					    <tr data-id="row_<?php echo e($brand->id); ?>">
							<td class='name'><?php echo e($loop->index+1); ?></td>
							<td class='name'><?php echo e($brand->first_name); ?></td>
							<td class='name'><?php echo e($brand->email); ?></td>
							<td class='name'><?php echo e($brand->phone); ?></td>
							<td class='logo'>
								<div class="thumbnail-holder">
									<img src="<?php echo e(asset('public/uploads/profile/'. $brand->profile_picture)); ?>" style='width:200px; height:200px;'>
								</div>
							</td>
							<td class="text-center">
								<div class="dropdown">
								  <button class="btn btn-light dropdown-toggle btn-xs" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								  <?php echo e(_lang('Action')); ?>

								  <i class="fas fa-angle-down"></i>
								  </button>
								  <form action="<?php echo e(action('DoctorController@destroy', $brand['id'])); ?>" method="post">
									<?php echo e(csrf_field()); ?>

									<input name="_method" type="hidden" value="DELETE">
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										<a href="<?php echo e(action('DoctorController@view', $brand['id'])); ?>"  class="dropdown-item dropdown-edit dropdown-edit"><i class="mdi mdi-pencil"></i> <?php echo e(_lang('Login')); ?></a>
									
									</div>
								  </form>
								</div>
							</td>
					    </tr>
					    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
					<?php endif; ?>
				</table>
				 <?php if($count<=0): ?>
				 <p>No doctors registered</p>
				 <?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/betarwreality/public_html/resources/views/backend/doctor/list.blade.php ENDPATH**/ ?>