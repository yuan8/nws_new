<?php $__env->startSection('content'); ?>

<?php 
	if($data_detail['open_hours']!=null){
		$data_detail['open_hours']=json_decode($data_detail['open_hours'],true);
	}

 ?>

<div class="row justify-content-md-center">
		<div class="col-md-auto" style="border-right: 1px solid #fff; padding-right: 10px; margin-right: 10px;">
				<b><h4 class=" mt-4"><?php echo e($data_detail['nama_pdam']); ?></h4></b>
				<small><?php echo e($data_detail['nama_daerah']); ?> / <?php echo e($data_detail['nama_provinsi']); ?></small>
		</div>
		<div class="col-md-auto">
				<div style="margin-top: 10px; margin-bottom: 10px;">
					<?php if($data_detail['traffic_penilaian_nuwas']==1): ?>
					<button style="margin-bottom: 10px;" class="btn btn-success btn-circle" data-trigger="hover" data-content="mengalami kenaikan dari periode sebelumnya" data-toggle="popover" >
						<i class="fas fa-arrow-up"></i>
					</button>
					<h5><b>Kenaikan Hasil Penilaian</b></h5>

					<?php elseif($data_detail['traffic_penilaian_nuwas']==0): ?>
						<button style="margin-bottom: 10px;" class="btn btn-primary btn-circle" data-trigger="hover" data-content="stabil dari periode sebelumnya" data-toggle="popover" >
							<i class="fas fa-minus"></i>
						</button>
					<h5><b> Hasil Penilaian Stabil</b></h5>

					<?php else: ?>
						<button style="margin-bottom: 10px;" class="btn btn-warning btn-circle" data-trigger="hover"  data-content="mengalami penurunan dari periode sebelumnya" data-toggle="popover">
							<i class="fas fa-arrow-down"></i>

						</button>
					<h5><b>Penurunan Hasil Penilaian</b></h5>

					<?php endif; ?>
				</div>
		</div>

</div>

<hr>

<div class="row text-dark">
	<?php $__currentLoopData = $data_detail['open_hours']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<div class="col <?php echo e(hari_ini($d['key'])?'bg-warning':'bg-default'); ?>" style="border-right:1px solid #222">
		<b><?php echo e($d['key']); ?> : <?php echo e($d['value']); ?></b>
	</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>


<div class="row no-gutters " >
	<div class="col-md-3 text-dark">
		<div class="card bg-special same_height" >
		  <img class="card-img-top" src='<?php echo e($data_detail['url_img']); ?>' alt="Card image cap" style="max-height: 150px;">
		  <div class="card-body" style="padding: 0px;">
		   <table class="table">
		   	<tbody>
		   		<?php if(isset($data_detail['alamat'])): ?>

		   		<tr>
		   			<td>
		   				<i class="fas fa-map-marker-alt"></i>
		   			</td>
		   			<td>
		   				 <p><?php echo e($data_detail['alamat']); ?></p>
		   			</td>
		   			<td>
		   				<a href="<?php echo e($data_detail['url_direct']); ?>" target="_blank" class=" btn btn-warning btn-circle">
		   					<i class="fa fa-arrow-right" aria-hidden="true"></i>
		   				</a>
		   			</td>
		   		</tr>
		   		<?php endif; ?>
		   		<?php if(isset($data_detail['no_telp'])): ?>
		   		<tr>
		   			<td>
		   				<i class="fa fa-phone"></i>
		   			</td>

		   			<td colspan="2">
		   				 <p><?php echo e($data_detail['no_telp']); ?></p>
		   			</td>
		   		</tr>
		   		<?php endif; ?>
		   		<?php if(isset($data_detail['website'])): ?>
		   		<tr>
		   			<td>
		   				<i class="fas fa-globe"></i>
		   			</td>
		   			<td colspan="2">
		   				 <a href="http://<?php echo e($data_detail['website']); ?>" target="_blank"><?php echo e($data_detail['website']); ?></a>
		   			</td>
		   		</tr>
		   		<?php endif; ?>
		   	</tbody>
		   </table>
		  </div>
		</div>

		<!-- <div class="card ">
			<div class="card-body">
				<div style="width:100%; height:300px; background-image: url('<?php echo e($data_detail['url_img']); ?>')" ></div>
				
				
			</div>
		</div> -->
		
	</div>
	<div class="col-md-9 text-dark">
		<div class="card same_height bg-special-2">
			<div class="card-body" id="con_trafik">
				
			</div>
		</div>
		
	</div>
	
</div>
<div class="row">
	<div class="col-md-12 text-dark">
		<div class="card">
			<div class="card-body">
				<table class="table">
					<thead>
						<tr>
							<th>Nama PDAM</th>
							<th>Periode</th>
							<th>Nilai Kinerja Total</th>
							<th>Nilai Aspek Keuangan</th>
							<th>Nilai Aspek Oprasional</th>
							<th>Nilai Aspek Pelayanan</th>
							<th>Nilai Aspek SDM</th>
							<th>Penilaian NUWASP</th>



						</tr>
					</thead>
					<tbody>
						<?php $__currentLoopData = $sats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr class="list-hover" onclick="window.location='<?php echo e(rt('h-pdam/sat/data/'.$sat['id'])); ?>'">
							<td>
								<?php echo e($sat['nama_pdam']); ?>

							</td>
							<td>
								<?php
									$tgl=($sat['period_tahun'].'-'.(strlen($sat['period_bulan'])>1?$sat['period_bulan']:'0'.$sats['period_bulan']).'-01');
									$tgl=DateTime::createFromFormat('Y-m-d',$tgl);

									// ->format('d F Y');

								?>
								<?php echo e($tgl->format('Y-F')); ?>

								<p><small><?php echo e(DateTime::createFromFormat('Y-m-d h:i:s',($sat['tanggal_masukan']))->format('d F Y')); ?></small></p>
							</td>
							<td><?php echo e($sat['nilai_kinerja_total']); ?></td>
							<td><?php echo e($sat['nilai_keuangan']); ?></td>
							<td><?php echo e($sat['nilai_operasioanal']); ?></td>
							<td><?php echo e($sat['nilai_pelayanan']); ?></td>
							<td><?php echo e($sat['nilai_sdm']); ?></td>
							<td><?php echo e($sat['penilaian_nuwas']); ?></td>





						</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
	
	$.post('<?php echo e(rt('api/pdam/trafik/'.$data_detail['kode_daerah'],['period'=>6])); ?>',function(res){
		$('#con_trafik').html(res);
	});
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.lay1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nws\application\views/pages/pdam/detail.blade.php ENDPATH**/ ?>