@extends('template.lay2')

@section('content')

<div class="row">
	<div class="col-md-12 mt-4 text-dark">
		<div class="card">
			<div class="card-body">
				<h5 class="text-center">{{$nama}}</h5>
				<hr>
				<table>
					<thead>
						<tr>
							<th>Nama Program</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>{{$program['uraian']}}</td>
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
								

								<td>{{$value['daerah']}}</td>
								<td>{{$value['urusan']}}</td>
								<td>{{$value['suburusan']}}</td>
								<td>{{$value['uraian']}}</td>
								<td></td>
								<td></td>
								<td></td>
								<td>Rp. {{($value['anggaran'])?number_format($value['anggaran'],0,',','.'):0}}</td>


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
												<td class="text-info">{{$value[1]}}</td>
												<td>{{$value[2]}} {{$value[4]}}</td>
												<td>{{$value[3]}} {{$value[4]}}</td>
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

@stop