
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<fieldset>
<legend>Form Upload Excel</legend>
<form method="post" enctype="multipart/form-data" action="<?php echo e(rt('document/upload')); ?>">
    <div class="form-group">
        <label for="exampleInputFile">File Upload</label>
        <input type="file" name="berkas_excel" class="form-control" id="exampleInputFile">
    </div>
    <button type="submit" class="btn btn-primary">Import</button>
</form>
</fieldset>
</body>
</html><?php /**PATH C:\xampp\htdocs\nws\application\views/document/index.blade.php ENDPATH**/ ?>