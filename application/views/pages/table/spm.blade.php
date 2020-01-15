<div class="col-md-12">
  <div class="card ">
    <div class="card-body">

      <table class="table table-bordered ">
        <thead>
          <tr>
              <th>SPM</th>
              <th>URUSAN</th>
              <th>Jumlah Program</th>
              <th>Jumlah Kegiatan</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $d)
            <tr>

              <td>{{$d['spm']}}</td>
              <td>{{$d['urusan']}}</td>
              <td></td>
              <td></td>
              <!-- <td>{{$d['kegiatan_prioritas']}}</td> -->
            </tr>

          @endforeach
        </tbody>
      </table>

    </div>

  </div>

</div>
