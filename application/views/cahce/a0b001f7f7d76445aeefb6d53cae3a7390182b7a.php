<?php
	
	if($anggaran_total!=0){
		$proporsi_approve=1;
	}else{
		$proporsi_approve=0;
	}


	



?>
<div class="row text-dark ">
	<div class="col-md-12 ">
		<button class="btn btn-warning" onclick="exportTableToExcel('table_data','<?php echo e($nama); ?>_<?php echo e($tahun); ?>')"><b>Download Excel</b></button>
		<hr style="border-bottom:2px solid #fff">
		<h5 class="text-white text-center"><b><?php echo e($nama); ?></b> <?php echo e($tahun); ?></h5>
		<h6 class="text-white text-center">Rp. <?php echo e(number_format($anggaran_total,0,',','.')); ?> <?php echo e(($anggaran_total==0?'/ Tidak Tersedia ':'')); ?></h6>
		<div class="card mt-4">
			<div class="card-body table-responsive">
				<table class="table table-bordered" id="table_data">
					<thead>
						<tr>
							<th class="bg bg-primary">Urusan</th>
							<th class="bg bg-warning">Sub Urusan</th>
							<th class="bg bg-success">Program</th>
							<th>Kegiatan</th>
							<th>Anggaran</th>
							<th>Proporsi Angaaran</th>
							<th>Indikator</th>
							<th>Capaian</th>
							<th>Target</th>

						</tr>
					</thead>
					<tbody>
						<?php 
							$urusan=0;
							$sub_urusan=0;
							$program=0;

						?>

						<?php foreach ($data as $key => $d): ?>
							<?php if($urusan!=$d['id_urusan']): ?>
								<?php
									$urusan=$d['id_urusan'];
									$proporsi_sub_urusan=$d['total_anggaran_urusan'];
									$proporsi_program=0;
									$proporsi_urusan=$d['total_anggaran_urusan'];

								?>
								<tr class="bg bg-primary">
									<td colspan="4"><span class="badge badge-danger" onclick="minimize(this,'.u-<?php echo e($urusan); ?>')">-</span> <b>(Urusan)</b> <?php echo e($d['urusan']); ?></td>
									<td colspan="1">Rp. <?php echo e(($d['total_anggaran_urusan'])?number_format($d['total_anggaran_urusan'],0,',','.'):0); ?></td>
									<td colspan="4">
										<?php if($proporsi_approve): ?>
											<?php echo e(number_format(($d['total_anggaran_urusan']/ $anggaran_total)* 100,2,',','.')); ?> %
										<?php else: ?>
											0 %
										<?php endif; ?>

									</td>
								</tr>
							
							<?php endif; ?>

							<?php if($sub_urusan!=$d['id_sub_urusan']): ?>
								<?php
									$sub_urusan=$d['id_sub_urusan'];
									$proporsi_sub_urusan=$d['total_anggaran_sub_urusan'];
									$proporsi_program=0;

									
								?>

								<tr class="bg bg-warning u-<?php echo e($urusan); ?> ">
									<td></td>
									<td colspan="3"><span class="badge badge-danger" onclick="minimize(this,'.su-<?php echo e($sub_urusan); ?>')">-</span> <b>(Sub Urusan)</b> <?php echo e($d['sub_urusan']); ?></td>
									<td colspan="1">Rp. <?php echo e(($d['total_anggaran_sub_urusan'])?number_format($d['total_anggaran_sub_urusan'],0,',','.'):0); ?></td>
									<td colspan="4" class="text-primary">
										<?php if($proporsi_approve and ($proporsi_urusan!=0)): ?>

											<?php echo e(number_format(($d['total_anggaran_sub_urusan']/ $proporsi_urusan)* 100,2,',','.')); ?> %
										<?php else: ?>
											0 %
										<?php endif; ?>
									</td>
									

								</tr>
								
							<?php endif; ?>

							<?php if($program!=$d['id_program']): ?>
								<?php
									$program=$d['id_program'];
									$proporsi_program=$d['total_anggaran_program'];

								?>

								<tr class="bg bg-success u-<?php echo e($urusan); ?> su-<?php echo e($sub_urusan); ?> ">
									<td colspan="2"></td>
									<td colspan="2"><span class="badge badge-danger" onclick="minimize(this,'.p-<?php echo e($program); ?>')">-</span> <b>(Program)</b> <?php echo e($d['program']); ?></td>
									<td colspan="1">Rp. <?php echo e(($d['total_anggaran_program'])?number_format($d['total_anggaran_program'],0,',','.'):0); ?></td>
									<td colspan="4" class="text-warning">
										<?php if($proporsi_approve and ($proporsi_sub_urusan!=0)): ?>
											<?php echo e(number_format(($d['total_anggaran_program'] / $proporsi_sub_urusan)* 100,2,',','.')); ?> %
										<?php else: ?>
											0 %
										<?php endif; ?>

									</td>
								</tr>
								<?php 
									$indikator=$d['indikator_program'];
									if($indikator!=''){
										$indikator=explode('|++|', $indikator);

										foreach ($indikator as $key => $value) {
											# code...
											$value=explode('||', $value);
											?>
												<tr class="u-<?php echo e($urusan); ?> su-<?php echo e($sub_urusan); ?> p-<?php echo e($program); ?>">
													<td colspan="6"></td>
													<td class="text-success"><b>(IP)</b> <?php echo e($value[1]); ?></td>
													<td><?php echo e($value[2]); ?> <?php echo e($value[4]); ?></td>
													<td><?php echo e($value[3]); ?> <?php echo e($value[4]); ?></td>
												</tr>

											<?php

										}

									}
								?>

								
							<?php endif; ?>

							<tr class="u-<?php echo e($urusan); ?> su-<?php echo e($sub_urusan); ?> p-<?php echo e($program); ?>">
								<td colspan="3"></td>
								<td>(Keg.) <b><?php echo e($d['uraian']); ?></b></td>
								<td>Rp. <?php echo e(($d['anggaran'])?number_format($d['anggaran'],0,',','.'):0); ?></td>
								<td class="text-success">
									<?php if($proporsi_approve and ($proporsi_program!=0)): ?>
											<?php echo e(number_format(($d['anggaran'] / $proporsi_program)* 100,2,',','.')); ?> %
										<?php else: ?>
											0 %
										<?php endif; ?>

								</td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<?php 
									$indikator=$d['indikator_kegiatan'];
									if($indikator!=''){
										$indikator=explode('|++|', $indikator);

										foreach ($indikator as $key => $value) {
											# code...
											$value=explode('||', $value);
											?>
												<tr class="u-<?php echo e($urusan); ?> su-<?php echo e($sub_urusan); ?> p-<?php echo e($program); ?>">
													<td colspan="6"></td>
													<td class="text-dark"><b>(IK)</b> <?php echo e($value[1]); ?></td>
													<td><?php echo e($value[2]); ?> <?php echo e($value[4]); ?></td>
													<td><?php echo e($value[3]); ?> <?php echo e($value[4]); ?></td>
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


<script type="text/javascript">

function minimize(e,$tag){
	if($($tag).css('visibility')=='collapse'){
		$($tag).css('visibility','visible');
		$(e).html('-');


	}else{
		$(e).html('+');

		$($tag).css('visibility','collapse');
	}
}


function exportTableToExcel(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xlsx':'excel_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}


</script><?php /**PATH C:\xampp\htdocs\nws\application\views/helper/data/program_kegiatan_table.blade.php ENDPATH**/ ?>