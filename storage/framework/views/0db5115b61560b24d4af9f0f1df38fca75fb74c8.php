<?php $__env->startSection('content'); ?>
<?php
$countPatient=count($patient);
?>
<div class="row">
	<div class="col-lg-12">
		<div class="card no-export">
		    <div class="card-header">
				<span class="panel-title"><?php echo e(_lang('Patient List')); ?></span>
			</div>
			<div class="card-body">
				<table id="orders_table" class="table table-bordered">
					<thead>
					    <tr>
							<th><?php echo e(_lang('ID')); ?></th>
							<th><?php echo e(_lang('First Name')); ?></th>
							<th><?php echo e(_lang('Last Name')); ?></th>
							<th><?php echo e(_lang('Email')); ?></th>
							<th><?php echo e(_lang('Gender')); ?></th>
							<th><?php echo e(_lang('Doctor')); ?></th>
							<th><?php echo e(_lang('Profile Picture')); ?></th>
							<th class="text-center"><?php echo e(_lang('Action')); ?></th>
					    </tr>
					</thead>
					    <?php if($countPatient>0): ?>
					<tbody>
					      <?php $__currentLoopData = $patient; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					      <?php
					      $User=App\User::where('id',$brand->user_matching_id)->first();
					      $doctor=App\User::where('id',$brand->user_id)->first();
					      ?>
					    <tr data-id="row_<?php echo e($brand->id); ?>">
							<td class='name'><?php echo e($loop->index+1); ?></td>
							<td class='name'><?php echo e($brand->fname ?? 'N/A'); ?></td>
							<td class='name'><?php echo e($brand->lname ?? 'N/A'); ?></td>
							<td class='name'><?php echo e($brand->email ?? 'N/A'); ?></td>
							<td class='name'><?php echo e($brand->gender ?? 'N/A'); ?></td>
							<td class='name'><?php echo e($doctor->first_name ?? 'N/A'); ?></td>
						
							<td class='logo'>
								<div class="thumbnail-holder">
									<img src="<?php echo e(asset('public/uploads/profile/' . ($User->profile_picture ?? 'default.png'))); ?>" style="width:200px; height:200px;">
								</div>
							</td>
							<td class="text-center">
								<div class="dropdown">
								  <button class="btn btn-light dropdown-toggle btn-xs" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								  <?php echo e(_lang('Action')); ?>

								  <i class="fas fa-angle-down"></i>
								  </button>
								  <form action="<?php echo e(action('PatientController@destroy', $brand['id'])); ?>" method="post">
									<?php echo e(csrf_field()); ?>

									<input name="_method" type="hidden" value="DELETE">
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										<a href="<?php echo e(action('PatientController@view', $brand['id'])); ?>" class="dropdown-item dropdown-edit dropdown-edit" target="_blank"><i class="mdi mdi-pencil"></i> <?php echo e(_lang('Login')); ?></a>
									
									</div>
								  </form>
								</div>
							</td>
					    </tr>
					    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
					    <?php endif; ?>
				    </table>
	             <?php echo e($patient->links()); ?>

	           	<?php if($countPatient<=0): ?>
				 <p>No Patient is registered!</p>
				 <?php endif; ?>
			</div>

			
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/betarwreality/public_html/resources/views/backend/patient/list.blade.php ENDPATH**/ ?>