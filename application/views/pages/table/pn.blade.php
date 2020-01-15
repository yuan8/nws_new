<div class="col-md-12">
  <div class="card ">
    <div class="card-body">

      <table class="table table-bordered ">
        <thead>
          <tr>
              <th>PN</th>
              <th>PP</th>
              <th>KP</th>
              <th>Jumlah Program</th>
              <th>Jumlah Kegiatan</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $d)
            <tr>

              <td>{{$d['prioritas_nasional']}}</td>
              <td>{{$d['program_prioritas']}}</td>
              <td>{{$d['kegiatan_prioritas']}}</td>
              <td></td>
              <td></td>
            </tr>

          @endforeach
        </tbody>
      </table>

    </div>

  </div>

</div>
