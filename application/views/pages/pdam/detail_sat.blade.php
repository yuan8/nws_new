@extends('template.lay1')

@section('content')

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
						@foreach($data as $d)
							@if($cat!=$d['id_kategori'])
								<tr class="bg bg-primary">
									<td colspan="4"><b>{{$d['kategori']}}</b></td>
								</tr>
								<?php 
									$cat=$d['id_kategori'];
								?>

							@endif

							<tr>
								<td>{{$d['pertanyaan']}}</td>
								<td>
									@if(strpos($d['satuan'],'YA / TIDAK')!==false)
										@if($d['nilai']==1)
											YA
										@elseif($d['nilai']==0.5)
											SEBAGIAN
										@elseif($d['nilai']==0)
											TIDAK
										@else
											{{$d['nilai']}}
										@endif

									@elseif(strpos($d['satuan'],'SEBAGIAN / TIDAK')!==false)
										@if($d['nilai']==1)
												YA
										@elseif((float)$d['nilai']==0.5)
											SEBAGIAN
										@elseif($d['nilai']==0)
											TIDAK
										@else
											{{$d['nilai']}}
										@endif
									@else
											{{number_format($d['nilai'],0,',','.')}}
									@endif


								</td>
								<td>{{$d['satuan']}}</td>
								<td>{{$d['keterangan']}}</td>

							</tr>


						@endforeach

					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

		

@stop