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
          <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>

              <td><?php echo e($d['spm']); ?></td>
              <td><?php echo e($d['urusan']); ?></td>
              <td></td>
              <td></td>
              <!-- <td><?php echo e($d['kegiatan_prioritas']); ?></td> -->
            </tr>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>

    </div>

  </div>

</div>
<?php /**PATH /var/NUWAS/nuwas/application/views/pages/table/spm.blade.php ENDPATH**/ ?>