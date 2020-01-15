<div class="col-md-12">
  <div class="card ">
    <div class="card-body">

      <table class="table table-bordered ">
        <thead>
          <tr>
              <th>SDGS</th>
              <th>Jumlah Program</th>
              <th>Jumlah Kegiatan</th>


              <!-- <th>URUSAN</th> -->
          </tr>
        </thead>
        <tbody>
          @foreach($data as $d)
            <tr>

              <td>{{$d['sdgs']}}</td>
              <td></td>
              <td></td>
              <!-- <td>{{$d['urusan']}}</td> -->
              <!-- <td>{{$d['kegiatan_prioritas']}}</td> -->
            </tr>

          @endforeach
        </tbody>
      </table>

    </div>

  </div>

</div>
