<?php
	
	if($anggaran_total!=0){
		$proporsi_approve=1;
	}else{
		$proporsi_approve=0;
	}


	



?>
<div class="row text-dark ">
	<div class="col-md-12 ">
		<button class="btn btn-warning" onclick="exportTableToExcel('table_data','{{$nama}}_{{$tahun}}')"><b>Download Excel</b></button>
		<hr style="border-bottom:2px solid #fff">
		<h5 class="text-white text-center"><b>{{$nama}}</b> {{$tahun}}</h5>
		<h6 class="text-white text-center">Rp. {{number_format($anggaran_total,0,',','.')}} {{($anggaran_total==0?'/ Tidak Tersedia ':'')}}</h6>
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
							@if($urusan!=$d['id_urusan'])
								@php
									$urusan=$d['id_urusan'];
									$proporsi_sub_urusan=$d['total_anggaran_urusan'];
									$proporsi_program=0;
									$proporsi_urusan=$d['total_anggaran_urusan'];

								@endphp
								<tr class="bg bg-primary">
									<td colspan="4"><span class="badge badge-danger" onclick="minimize(this,'.u-{{$urusan}}')">-</span> <b>(Urusan)</b> {{$d['urusan']}}</td>
									<td colspan="1">Rp. {{($d['total_anggaran_urusan'])?number_format($d['total_anggaran_urusan'],0,',','.'):0}}</td>
									<td colspan="4">
										@if($proporsi_approve)
											{{number_format(($d['total_anggaran_urusan']/ $anggaran_total)* 100,2,',','.') }} %
										@else
											0 %
										@endif

									</td>
								</tr>
							
							@endif

							@if($sub_urusan!=$d['id_sub_urusan'])
								@php
									$sub_urusan=$d['id_sub_urusan'];
									$proporsi_sub_urusan=$d['total_anggaran_sub_urusan'];
									$proporsi_program=0;

									
								@endphp

								<tr class="bg bg-warning u-{{$urusan}} ">
									<td></td>
									<td colspan="3"><span class="badge badge-danger" onclick="minimize(this,'.su-{{$sub_urusan}}')">-</span> <b>(Sub Urusan)</b> {{$d['sub_urusan']}}</td>
									<td colspan="1">Rp. {{($d['total_anggaran_sub_urusan'])?number_format($d['total_anggaran_sub_urusan'],0,',','.'):0}}</td>
									<td colspan="4" class="text-primary">
										@if($proporsi_approve and ($proporsi_urusan!=0))

											{{number_format(($d['total_anggaran_sub_urusan']/ $proporsi_urusan)* 100,2,',','.') }} %
										@else
											0 %
										@endif
									</td>
									

								</tr>
								
							@endif

							@if($program!=$d['id_program'])
								@php
									$program=$d['id_program'];
									$proporsi_program=$d['total_anggaran_program'];

								@endphp

								<tr class="bg bg-success u-{{$urusan}} su-{{$sub_urusan}} ">
									<td colspan="2"></td>
									<td colspan="2"><span class="badge badge-danger" onclick="minimize(this,'.p-{{$program}}')">-</span> <b>(Program)</b> {{$d['program']}}</td>
									<td colspan="1">Rp. {{($d['total_anggaran_program'])?number_format($d['total_anggaran_program'],0,',','.'):0}}</td>
									<td colspan="4" class="text-warning">
										@if($proporsi_approve and ($proporsi_sub_urusan!=0))
											{{number_format(($d['total_anggaran_program'] / $proporsi_sub_urusan)* 100,2,',','.') }} %
										@else
											0 %
										@endif

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
												<tr class="u-{{$urusan}} su-{{$sub_urusan}} p-{{$program}}">
													<td colspan="6"></td>
													<td class="text-success"><b>(IP)</b> {{$value[1]}}</td>
													<td>{{$value[2]}} {{$value[4]}}</td>
													<td>{{$value[3]}} {{$value[4]}}</td>
												</tr>

											<?php

										}

									}
								?>

								
							@endif

							<tr class="u-{{$urusan}} su-{{$sub_urusan}} p-{{$program}}">
								<td colspan="3"></td>
								<td>(Keg.) <b>{{$d['uraian']}}</b></td>
								<td>Rp. {{($d['anggaran'])?number_format($d['anggaran'],0,',','.'):0}}</td>
								<td class="text-success">
									@if($proporsi_approve and ($proporsi_program!=0))
											{{number_format(($d['anggaran'] / $proporsi_program)* 100,2,',','.') }} %
										@else
											0 %
										@endif

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
												<tr class="u-{{$urusan}} su-{{$sub_urusan}} p-{{$program}}">
													<td colspan="6"></td>
													<td class="text-dark"><b>(IK)</b> {{$value[1]}}</td>
													<td>{{$value[2]}} {{$value[4]}}</td>
													<td>{{$value[3]}} {{$value[4]}}</td>
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


</script>