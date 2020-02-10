@extends('template.admin')

@section('content')

<form action="{{rt('dash/file/rpjmd/store')}}" method="post" enctype="multipart/form-data">
	<div class="card card-primary">
	<div class="card-header">
		<h6 class="card-title">Upload File</h6>
	</div>
	<div class="card-body">

		<div class="row">
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Daerah</label>
							<select class="form-control">
								@foreach($daerahs as $daerah)
									<option value="{{$daerah['id']}}">{{$daerah['nama']}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>
								File
							</label>
							<input type="file" name="file" class="form-control" required="" >
						</div>
					</div>

				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>
								Tahun Mulai Berlaku
							</label>
							<select class="form-control" name="tahun" required="">
								<?php
									for($i=(date('Y'));$i>=(date('Y')-5);$i--)
									{
								 ?>
								 <option value="{{$i}}" {{old('tahun')==$i?'selected':''}}>{{$i}}</option>
								 <?php

									}
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>
								Tahun Selesai Berlaku
							</label>
							<select class="form-control" name="tahun_selesai" required="">
								<?php
									for($i=(date('Y')+5);$i>=(date('Y')-5);$i--)
									{
								 ?>
								 <option value="{{$i}}" {{old('tahun_selesai')==$i?'selected':''}}>{{$i}}</option>
								 <?php

									}
								?>
							</select>
						</div>

					</div>

				</div>
			</div>
		</div>


	</div>
	<div class="card-footer modal-footer">
		<button type="submit" class="btn btn-primary">Upload</button>
	</div>
</div>

</form>

<div class="card ">
	<div class="card-body">
		<table class="table">
			<thead>
				<tr>
					<th>Daerah</th>
					<th>File</th>
					<th>Status</th>
					<th>Tahun Mulai</th>
					<th>Tahun Selesai</th>
				</tr>
			</thead>
			<tbody>
				@foreach($files as $file)
				<tr>
					<td>
						{{$file['nama_daerah']}}
					</td>
					<td class="">
						<div class="btn-group">
							<a href="{{rt($file['path'])}}" download="" class="btn btn-primary btn-sm">Dwnload</a>
						@if(in_array($file['extension'],['jpg','jpeg','png','gif','pdf','xlsx','xls']))
							@if(in_array($file['extension'],['xlsx','xls']))
								<a href="http://view.officeapps.live.com/op/view.aspx?src={{rt($file['path'])}}"  class="btn btn-info btn-sm" target="_blank">
									Office 365 <i class="fa fa-eye"></i>
								</a>
							@else
								<a href="{{rt($file['path'])}}"  class="btn btn-info btn-sm" target="_blank">
									<i class="fa fa-eye"></i>
								</a>
							@endif
						@endif
						</div>
					</td>
					<td>
						@if($file['status']==0)
						<span class="badge badge-warning">Waiting</span>


						@elseif($file['status']==1)
						<span class="badge badge-primary">Proccessed</span>

						@endif
					</td>
					<td>
						{{$file['tahun']}}
					</td>
					<td>
						{{$file['tahun_selesai']}}
					</td>
				</tr>

				@endforeach
			</tbody>
		</table>
	</div>
</div>


@stop