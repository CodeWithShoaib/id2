<?php $__env->startSection('content'); ?>

<div class="row">
	<div class="col-lg-12">
		<div class="card no-export">
		    <div class="card-header d-flex align-items-center">
				<span class="panel-title"><?php echo e(_lang('Testimonials List')); ?></span>
				<a class="btn btn-primary btn-xs ml-auto" href="<?php echo e(route('brands.create')); ?>"><?php echo e(_lang('Add New')); ?></a>
			</div>
			<div class="card-body">
				<table id="brands_table" class="table table-bordered data-table">
					<thead>
					    <tr>
						    <th><?php echo e(_lang('ID')); ?></th>
						    <th><?php echo e(_lang('Name')); ?></th>
						    <th><?php echo e(_lang('Title')); ?></th>
						    <th><?php echo e(_lang('Content')); ?></th>
						    <th><?php echo e(_lang('Image')); ?></th>
							<th class="text-center"><?php echo e(_lang('Action')); ?></th>
					    </tr>
					</thead>
					<tbody>
					    <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					    <tr data-id="row_<?php echo e($brand->id); ?>">
					        
							<td class='name'><?php echo e($loop->index+1); ?></td>
							<td class='name'><?php echo e($brand->title); ?></td>
							<td class='name'><?php echo e($brand->name); ?></td>
							<td class='name'><?php echo substr($brand->content,0,190); ?></td>
							<td class='logo'>
								<div class="thumbnail-holder">
									<img src="<?php echo e(asset('upload/image/'. $brand->image)); ?>" style='width:200px; height:200px;'>
								</div>
							</td>
							<td class="text-center">
								<div class="dropdown">
								  <button class="btn btn-light dropdown-toggle btn-xs" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								  <?php echo e(_lang('Action')); ?>

								  <i class="fas fa-angle-down"></i>
								  </button>
								  <form action="<?php echo e(action('BrandController@destroy', $brand['id'])); ?>" method="post">
									<?php echo e(csrf_field()); ?>

									<input name="_method" type="hidden" value="DELETE">
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										<a href="<?php echo e(action('BrandController@edit', $brand['id'])); ?>" class="dropdown-item dropdown-edit dropdown-edit"><i class="mdi mdi-pencil"></i> <?php echo e(_lang('Edit')); ?></a>
										<button class="btn-remove dropdown-item" type="submit"><i class="mdi mdi-delete"></i> <?php echo e(_lang('Delete')); ?></button>
									</div>
								  </form>
								</div>
							</td>
					    </tr>
					    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/betarwreality/public_html/resources/views/backend/product/brand/list.blade.php ENDPATH**/ ?>