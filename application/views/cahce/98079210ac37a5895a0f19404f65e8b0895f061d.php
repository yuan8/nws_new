<?php $__env->startSection('content'); ?>

<form action="<?php echo e(rt('dash/file/rpjmd/store')); ?>" method="post" enctype="multipart/form-data">
	<div class="card card-primary">
	<div class="card-header">
		<h6 class="card-title">Upload File</h6>
	</div>
	<div class="card-body">

		<div class="row">
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Daerah</label>
							<select class="form-control">
								<?php $__currentLoopData = $daerahs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $daerah): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<option value="<?php echo e($daerah['id']); ?>"><?php echo e($daerah['nama']); ?></option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>
								File
							</label>
							<input type="file" name="file" class="form-control" required="" >
						</div>
					</div>

				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>
								Tahun Mulai Berlaku
							</label>
							<select class="form-control" name="tahun" required="">
								<?php
									for($i=(date('Y'));$i>=(date('Y')-5);$i--)
									{
								 ?>
								 <option value="<?php echo e($i); ?>" <?php echo e(old('tahun')==$i?'selected':''); ?>><?php echo e($i); ?></option>
								 <?php

									}
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>
								Tahun Selesai Berlaku
							</label>
							<select class="form-control" name="tahun_selesai" required="">
								<?php
									for($i=(date('Y')+5);$i>=(date('Y')-5);$i--)
									{
								 ?>
								 <option value="<?php echo e($i); ?>" <?php echo e(old('tahun_selesai')==$i?'selected':''); ?>><?php echo e($i); ?></option>
								 <?php

									}
								?>
							</select>
						</div>

					</div>

				</div>
			</div>
		</div>


	</div>
	<div class="card-footer modal-footer">
		<button type="submit" class="btn btn-primary">Upload</button>
	</div>
</div>

</form>

<div class="card ">
	<div class="card-body">
		<table class="table">
			<thead>
				<tr>
					<th>Daerah</th>
					<th>File</th>
					<th>Status</th>
					<th>Tahun Mulai</th>
					<th>Tahun Selesai</th>
				</tr>
			</thead>
			<tbody>
				<?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td>
						<?php echo e($file['nama_daerah']); ?>

					</td>
					<td class="">
						<div class="btn-group">
							<a href="<?php echo e(rt($file['path'])); ?>" download="" class="btn btn-primary btn-sm">Dwnload</a>
						<?php if(in_array($file['extension'],['jpg','jpeg','png','gif','pdf','xlsx','xls'])): ?>
							<?php if(in_array($file['extension'],['xlsx','xls'])): ?>
								<a href="http://view.officeapps.live.com/op/view.aspx?src=<?php echo e(rt($file['path'])); ?>"  class="btn btn-info btn-sm" target="_blank">
									Office 365 <i class="fa fa-eye"></i>
								</a>
							<?php else: ?>
								<a href="<?php echo e(rt($file['path'])); ?>"  class="btn btn-info btn-sm" target="_blank">
									<i class="fa fa-eye"></i>
								</a>
							<?php endif; ?>
						<?php endif; ?>
						</div>
					</td>
					<td>
						<?php if($file['status']==0): ?>
						<span class="badge badge-warning">Waiting</span>


						<?php elseif($file['status']==1): ?>
						<span class="badge badge-primary">Proccessed</span>

						<?php endif; ?>
					</td>
					<td>
						<?php echo e($file['tahun']); ?>

					</td>
					<td>
						<?php echo e($file['tahun_selesai']); ?>

					</td>
				</tr>

				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
	</div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nws\application\views/admin/file/rpjmd.blade.php ENDPATH**/ ?>