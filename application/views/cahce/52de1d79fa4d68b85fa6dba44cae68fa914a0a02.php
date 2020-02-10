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
	<?php
		$urusan='';
	?>
	<tbody>
		<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($key+1); ?></td>
				<td><?php echo e($d['id']); ?></td>

				<?php
					$d['nama']=explode('.',$d['nama'])[1];
					$d['nama']=str_replace(';','',$d['nama']);
				?>
				<td><?php echo e(ucwords($d['nama'],' ')); ?></td>
				<td><?php echo e($d['tahun']); ?></td>

				<?php
				?>
			<!-- <?php $__currentLoopData = $d; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ds): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php
				$ds=str_replace(';','',$ds);
				?>
				<td>
					<?php echo e(ucwords($ds,' ')); ?>

				</td>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	 -->

			</tr>

		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</tbody>

</table><?php /**PATH C:\xampp\htdocs\nws\application\views/helper/data/text.blade.php ENDPATH**/ ?>