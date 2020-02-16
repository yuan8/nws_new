<?php $__env->startSection('content'); ?>

<div class="row  mt-4">
	<div class="col-md-12 mt-4 text-dark">
		<div class="card">
			<div class="card-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Pertanyaan</th>
							<th>Nilai</th>
							<th>Satuan</th>
							<th>Keteranagan</th>

							</tr>
						</thead>
						<tbody>
						<?php 
							$cat=0;
						?>
						<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php if($cat!=$d['id_kategori']): ?>
								<tr class="bg bg-primary">
									<td colspan="4"><b><?php echo e($d['kategori']); ?></b></td>
								</tr>
								<?php 
									$cat=$d['id_kategori'];
								?>

							<?php endif; ?>

							<tr>
								<td><?php echo e($d['pertanyaan']); ?></td>
								<td>
									<?php if(strpos($d['satuan'],'YA / TIDAK')!==false): ?>
										<?php if($d['nilai']==1): ?>
											YA
										<?php elseif($d['nilai']==0.5): ?>
											SEBAGIAN
										<?php elseif($d['nilai']==0): ?>
											TIDAK
										<?php else: ?>
											<?php echo e($d['nilai']); ?>

										<?php endif; ?>

									<?php elseif(strpos($d['satuan'],'SEBAGIAN / TIDAK')!==false): ?>
										<?php if($d['nilai']==1): ?>
												YA
										<?php elseif((float)$d['nilai']==0.5): ?>
											SEBAGIAN
										<?php elseif($d['nilai']==0): ?>
											TIDAK
										<?php else: ?>
											<?php echo e($d['nilai']); ?>

										<?php endif; ?>
									<?php else: ?>
											<?php echo e(number_format($d['nilai'],0,',','.')); ?>

									<?php endif; ?>


								</td>
								<td><?php echo e($d['satuan']); ?></td>
								<td><?php echo e($d['keterangan']); ?></td>

							</tr>


						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

		

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.lay1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nws\application\views/pages/pdam/detail_sat.blade.php ENDPATH**/ ?>