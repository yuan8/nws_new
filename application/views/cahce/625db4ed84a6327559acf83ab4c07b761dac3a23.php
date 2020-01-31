<?php $__env->startSection('content'); ?>

<div class="row">
		<div class="col-md-12 mt-4 text-dark">
		<div class="card">
			<div class="card-body">
				<h5 class="text-center">PROGRAM SELURUH DAERAH DI <?php echo e($provinsi['nama']); ?></h5>
			</div>
		</div>

	<div class="col-md-12 mt-4 text-dark">
		<div class="card">
			<div class="card-body table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Daetail</th>

							<th>Daerah</th>
							<th>Urusan</th>
							<th>Sub Urusan</th>
							<th>Program</th>
							<th>Indikator</th>
							<th>Capaian</th>
							<th>Target</th>
							<th>Anggaran</th>

						</tr>
					</thead>

					<tbody>
						<?php foreach ($data as $key => $value): ?>
							<tr class="bg bg-success">
								
								<td><a href="<?php echo e($value['link']); ?>" target="_blank" class="btn btn-warning btn-sm">Detail Kegiatan</a></td>

								<td><?php echo e($value['daerah']); ?></td>
								<td><?php echo e($value['urusan']); ?></td>
								<td><?php echo e($value['suburusan']); ?></td>
								<td><?php echo e($value['uraian']); ?></td>
								<td></td>
								<td></td>
								<td></td>
								<td>Rp. <?php echo e(($value['total_anggaran'])?number_format($value['total_anggaran'],0,',','.'):0); ?></td>


							</tr>
							<?php 
								$indikator=$value['indikator'];
								if($indikator!=''){
									$indikator=explode('|++|', $indikator);

									foreach ($indikator as $key => $value) {
										# code...
										$value=explode('||', $value);
										?>
											<tr>
												<td colspan="5"></td>
												<td class="text-info"><?php echo e($value[1]); ?></td>
												<td><?php echo e($value[2]); ?> <?php echo e($value[4]); ?></td>
												<td><?php echo e($value[3]); ?> <?php echo e($value[4]); ?></td>
												<td></td>
											</tr>

										<?php





									}

								}
							?>


						<?php endforeach ?>

					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.lay2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nws\application\views/helper/table.blade.php ENDPATH**/ ?>