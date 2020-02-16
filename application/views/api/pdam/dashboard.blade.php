

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
					@foreach($kenaikan as $d)
						<tr class="list-hover"  onclick="window.location='{{rt('h-pdam/data/detail/'.$d['kode_daerah'])}}'">
								<td>{{$d['nama_pdam']}}</td>
								<td data-kode-daerah="{{$d['kode_daerah']}}">
									{{$d['nama_daerah']}}
									<br>
									<small>{{$d['nama_provinsi']}}</small>
								</td>
								<td><b>{{$d['penilaian_nuwas']}}</b></td>
								<td>
									@if($d['traffic_penilaian_nuwas']==1)
										<button class="btn btn-success btn-circle" data-trigger="hover" data-content="mengalami kenaikan dari periode sebelumnya" data-toggle="popover" >
											<i class="fas fa-arrow-up"></i>
										</button>

									@elseif($d['traffic_penilaian_nuwas']==0)
										<button class="btn btn-primary btn-circle" data-trigger="hover" data-content="stabil dari periode sebelumnya" data-toggle="popover" >
											<i class="fas fa-minus"></i>
										</button>
									@else
										<button class="btn btn-warning btn-circle" data-trigger="hover"  data-content="mengalami penurunan dari periode sebelumnya" data-toggle="popover">
											<i class="fas fa-arrow-down"></i>
										</button>
									@endif

								</td>
						</tr>
					


					@endforeach
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
					@foreach($penurunan as $d)
							<tr class="list-hover" onclick="window.location='{{rt('h-pdam/data/detail/'.$d['kode_daerah'])}}'">
								<td>{{$d['nama_pdam']}}</td>
									<td data-kode-daerah="{{$d['kode_daerah']}}">
									{{$d['nama_daerah']}}
									<br>
									<small>{{$d['nama_provinsi']}}</small>
								</td>
								<td><b>{{$d['penilaian_nuwas']}}</b></td>
								<td>
									@if($d['traffic_penilaian_nuwas']==1)
										<button class="btn btn-success btn-circle" data-trigger="hover" data-content="mengalami kenaikan dari periode sebelumnya" data-toggle="popover" >
											<i class="fas fa-arrow-up"></i>
										</button>

									@elseif($d['traffic_penilaian_nuwas']==0)
										<button class="btn btn-primary btn-circle" data-trigger="hover" data-content="stabil dari periode sebelumnya" data-toggle="popover" >
											<i class="fas fa-minus"></i>
										</button>
									@else
										<button class="btn btn-warning btn-circle" data-trigger="hover"  data-content="mengalami penurunan dari periode sebelumnya" data-toggle="popover">
											<i class="fas fa-arrow-down"></i>
										</button>
									@endif

								</td>
							</tr>
							

						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>

