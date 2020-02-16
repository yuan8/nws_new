<?php $__env->startSection('content'); ?>

<?php 
	$filter=old('filter')?old('filter'):[];
	$trafik=old('trafik')?old('trafik'):[];
?>

<div class="row">
	<div class="col-md-12 mt-4 text-dark">
		<div class="car">
			<div class="card-">
				<form class="" action="" method="get">
					<div class="float-right">
						<div class="input-group mb-3">
					 <div class="input-group-prepend">
					 	 <div class="input-group-text bg bg-info">
					 	 	Trafik
					    </div>
					    <div class="input-group-text">
					      <input type="checkbox" <?php echo e(in_array(1,$trafik)?'checked':''); ?> name="trafik[]"   value="1"> Naik
					    </div>
					    <div class="input-group-text">
					      <input type="checkbox" <?php echo e(in_array(0,$trafik)?'checked':''); ?> name="trafik[]" value="0"> Stabil
					    </div>
					     <div class="input-group-text">
					      <input type="checkbox" <?php echo e(in_array(-1,$trafik)?'checked':''); ?> name="trafik[]" value="-1"> Turun
					    </div>
					     
					  </div>
				 
				  
				</div>
					</div>


					<div class="input-group mb-3">
					 <div class="input-group-prepend">
					 	 <div class="input-group-text bg bg-info">
					 	 	Hasil Penilaian
					    </div>
					    <div class="input-group-text">
					      <input type="checkbox" name="filter[]" <?php echo e(in_array('SAKIT',$filter)?'checked':''); ?>  value="SAKIT"> Sakit
					    </div>
					    <div class="input-group-text">
					      <input type="checkbox" name="filter[]" <?php echo e(in_array('KURANG SEHAT',$filter)?'checked':''); ?> value="KURANG SEHAT"> Kurang Sehat
					    </div>
					     <div class="input-group-text">
					      <input type="checkbox" name="filter[]" <?php echo e(in_array('POTENSIAL UNTUK SEHAT',$filter)?'checked':''); ?>  value="POTENSIAL UNTUK SEHAT"> Potensial Sehat
					    </div>
					     <div class="input-group-text">
					      <input type="checkbox" name="filter[]" <?php echo e(in_array('SEHAT',$filter)?'checked':''); ?> value="SEHAT" > Sehat
					    </div>
					      <div class="input-group-text">
					      <input type="checkbox" name="filter[]"  <?php echo e(in_array('SEHAT BERKELANJUTAN',$filter)?'checked':''); ?>  value="SEHAT BERKELANJUTAN"  > Sehat Berkelanjutan
					    </div>

					  </div>
				  <input type="text" class="form-control"  name="q"  placeholder="..." value="<?php echo e(old('q')); ?>">
				  <div class="input-group-append">
				    <button class="btn btn-warning" type="submit"><i class="fa fa-search"></i> </button>
				  </div>
				</div>

			
				</form>
			</div>
		</div>

		<div class="card bg-special float-left">
			<div class="card-body table-responsive">
				<table class="table table-stiped">
					<thead>
						<tr>
						<th>Nama PDAM</th>
						<th>Nama Daerah</th>
						<th>Periode</th>
						<th>Kinerja Total</th>
						<th>Keuangan</th>
						<th>Pelayanan</th>
						<th>Oprasional</th>
						<th>SDM</th>
						<th>Penilaian Nuwas</th>
						<th>
							<b style="font-size:18px;"><i class="fas fa-chart-line"></i></b>
							
						</th>
					</tr>
					</thead>
					<tbody>
						<?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr class="list-hover"  onclick="window.location='<?php echo e(rt('h-pdam/data/detail/'.$d['kode_daerah'])); ?>'">
								<td><?php echo e($d['nama_pdam']); ?></td>
								<td data-kode-daerah="<?php echo e($d['kode_daerah']); ?>">
									<?php echo e($d['nama_daerah']); ?>

									<br>
									<small><?php echo e($d['nama_provinsi']); ?></small>
								</td>
								<td></td>
								<td><?php echo e($d['kinerja']); ?></td>
								<td><?php echo e($d['keuangan']); ?></td>
								<td><?php echo e($d['pelayanan']); ?></td>
								<td><?php echo e($d['oprasional']); ?></td>
								<td><?php echo e($d['sdm']); ?></td>


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
</div>
<div class="pagination-ci">
	<?php echo $pagination; ?>


</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.lay1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nws\application\views/pages/pdam/index.blade.php ENDPATH**/ ?>