

<div class="col-md-6">
	<div class="card bg-special same_height">
		<div class="card-body table-responsive">
				<div class="card-header">
				<h4>Peningkatan Penilaian NUWAS</h4>
			</div>
			<table class="table table-stiped">
				<thead>
					<tr>
						<th>Nama PPDAM</th>
						<th>Daerah</th>
						<th>Penilaian NUWAS</th>
						<th>
							<b style="font-size:18px;"><i class="fas fa-chart-line"></i></b>
						</th>

					</tr>
				</thead>
				<tbody>
					<?php $__currentLoopData = $kenaikan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr class="list-hover"  onclick="window.location='<?php echo e(rt('h-pdam/data/detail/'.$d['kode_daerah'])); ?>'">
								<td><?php echo e($d['nama_pdam']); ?></td>
								<td data-kode-daerah="<?php echo e($d['kode_daerah']); ?>">
									<?php echo e($d['nama_daerah']); ?>

									<br>
									<small><?php echo e($d['nama_provinsi']); ?></small>
								</td>
								<td><b><?php echo e($d['penilaian_nuwas']); ?></b></td>
								<td>
									<?php if($d['traffic_penilaian_nuwas']==1): ?>
										<button class="btn btn-success btn-circle" data-trigger="hover" data-content="mengalami kenaikan dari periode sebelumnya" data-toggle="popover" >
											<i class="fas fa-arrow-up"></i>
										</button>

									<?php elseif($d['traffic_penilaian_nuwas']==0): ?>
										<button class="btn btn-primary btn-circle" data-trigger="hover" data-content="stabil dari periode sebelumnya" data-toggle="popover" >
											<i class="fas fa-minus"></i>
										</button>
									<?php else: ?>
										<button class="btn btn-warning btn-circle" data-trigger="hover"  data-content="mengalami penurunan dari periode sebelumnya" data-toggle="popover">
											<i class="fas fa-arrow-down"></i>
										</button>
									<?php endif; ?>

								</td>
						</tr>
					


					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<div class="col-md-6">
	<div class="card bg-special same_height">
		<div class="card-body table-responsive">
			<div class="card-header">
				<h4>Penurunan Penilaian NUWAS</h4>
			</div>
			<table class="table table-stiped">
				<thead>
					<tr>
						<th>Nama PPDAM</th>
						<th>Daerah</th>
						<th>Penilaian NUWAS</th>
						<th>
							<b style="font-size:18px;"><i class="fas fa-chart-line"></i></b>
						</th>

					</tr>
				</thead>
				<tbody>
					<?php $__currentLoopData = $penurunan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr class="list-hover" onclick="window.location='<?php echo e(rt('h-pdam/data/detail/'.$d['kode_daerah'])); ?>'">
								<td><?php echo e($d['nama_pdam']); ?></td>
									<td data-kode-daerah="<?php echo e($d['kode_daerah']); ?>">
									<?php echo e($d['nama_daerah']); ?>

									<br>
									<small><?php echo e($d['nama_provinsi']); ?></small>
								</td>
								<td><b><?php echo e($d['penilaian_nuwas']); ?></b></td>
								<td>
									<?php if($d['traffic_penilaian_nuwas']==1): ?>
										<button class="btn btn-success btn-circle" data-trigger="hover" data-content="mengalami kenaikan dari periode sebelumnya" data-toggle="popover" >
											<i class="fas fa-arrow-up"></i>
										</button>

									<?php elseif($d['traffic_penilaian_nuwas']==0): ?>
										<button class="btn btn-primary btn-circle" data-trigger="hover" data-content="stabil dari periode sebelumnya" data-toggle="popover" >
											<i class="fas fa-minus"></i>
										</button>
									<?php else: ?>
										<button class="btn btn-warning btn-circle" data-trigger="hover"  data-content="mengalami penurunan dari periode sebelumnya" data-toggle="popover">
											<i class="fas fa-arrow-down"></i>
										</button>
									<?php endif; ?>

								</td>
							</tr>
							

						</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php /**PATH C:\xampp\htdocs\nws\application\views/api/pdam/dashboard.blade.php ENDPATH**/ ?>