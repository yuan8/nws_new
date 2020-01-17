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
          <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>

              <td><?php echo e($d['prioritas_nasional']); ?></td>
              <td><?php echo e($d['program_prioritas']); ?></td>
              <td><?php echo e($d['kegiatan_prioritas']); ?></td>
              <td></td>
              <td></td>
            </tr>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>

    </div>

  </div>

</div>
<?php /**PATH C:\xampp\htdocs\nws\application\views/pages/table/pn.blade.php ENDPATH**/ ?>