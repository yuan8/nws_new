<style type="text/css">
	td{
		border:1px solid #222;
	}
</style>

<table>
	<thead>
		<tr>
			<th>No.</th>
			<th>Kode</th>
			<!-- <th>Uraian Urusan</th> -->
			<th>Uraian </th>
			<th>Tahun </th>

			<!-- <th>Uraian Nomenklatur</th> -->

		</tr>

	</thead>
	@php
		$urusan='';
	@endphp
	<tbody>
		@foreach($data as $key=>$d)
			<tr>
				<td>{{$key+1}}</td>
				<td>{{$d['id']}}</td>

				@php
					$d['nama']=explode('.',$d['nama'])[1];
					$d['nama']=str_replace(';','',$d['nama']);
				@endphp
				<td>{{ucwords($d['nama'],' ')}}</td>
				<td>{{$d['tahun']}}</td>

				@php
				@endphp
			<!-- @foreach($d as $ds)
				@php
				$ds=str_replace(';','',$ds);
				@endphp
				<td>
					{{ucwords($ds,' ')}}
				</td>
			@endforeach	 -->

			</tr>

		@endforeach
	</tbody>

</table>