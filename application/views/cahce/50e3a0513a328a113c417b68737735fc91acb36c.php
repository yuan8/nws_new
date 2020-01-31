<?php $__env->startSection('content'); ?>

<div class="row">
	<div class="col-md-12 mt-4 text-dark">
		<div class="card">
			<div class="card-body">
				<h5 class="text-center"><?php echo e($nama); ?></h5>
				<hr>
				<table>
					<thead>
						<tr>
							<th>Nama Program</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><?php echo e($program['uraian']); ?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

		<div class="card">
			<div class="card-body table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>

							<th>Daerah</th>
							<th>Urusan</th>
							<th>Sub Urusan</th>
							<th>Kegiatan</th>
							<th>Indikator</th>
							<th>Capaian</th>
							<th>Target</th>
							<th>Anggaran</th>

						</tr>
					</thead>

					<tbody>
						<?php foreach ($data as $key => $value): ?>
							<tr class="bg bg-success">
								

								<td><?php echo e($value['daerah']); ?></td>
								<td><?php echo e($value['urusan']); ?></td>
								<td><?php echo e($value['suburusan']); ?></td>
								<td><?php echo e($value['uraian']); ?></td>
								<td></td>
								<td></td>
								<td></td>
								<td>Rp. <?php echo e(($value['anggaran'])?number_format($value['anggaran'],0,',','.'):0); ?></td>


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
												<td colspan="4"></td>
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
<?php echo $__env->make('template.lay2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nws\application\views/helper/table_daerah_kegiatan.blade.php ENDPATH**/ ?>