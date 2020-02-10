<?php $__env->startSection('content'); ?>

<div id="container_data" class="animated fadeInUp">
	<div class="row text-dark ">
		<div class="col-md-12 text-center ">
			
			<hr style="border-bottom:2px solid #fff">
			<div class="spinner-border text-light" role="status">
			  <span class="sr-only">Loading...</span>
			</div>
			<p class="text-center text-white" id="progressBar">0 %</p>
			<hr>
			<h5 class="text-white text-center"><b><?php echo e($nama); ?></b> <?php echo e($tahun); ?> Loading ..</h5>

		</div>
	</div>

</div>

<script type="text/javascript">



function uploadFile() {


	$.ajax({
    xhr: function() {
        var xhr = new window.XMLHttpRequest();

        // Upload progress
        xhr.upload.addEventListener("progress", function(evt){
            if (evt.lengthComputable) {
                var percentComplete = evt.loaded / evt.total;
    			$("#progressBar").html( Math.round(percentComplete) + ' %');


                //Do something with upload progress
                console.log(percentComplete);
            }
       }, false);

       // Download progress
       xhr.addEventListener("progress", function(evt){
           if (evt.lengthComputable) {
               var percentComplete = evt.loaded / evt.total;
    		$("#progressBar").html( Math.round(percentComplete) + ' %');

               // Do something with download progress

               console.log(percentComplete);
           }
       }, false);

       return xhr;
    },
    type: 'POST',
    url: "<?php echo e(rt('program-kegiatan/laporan/index/').$kode_daerah); ?>",
    data: {},
    success: function(data){
        // Do something success-ish
        $('#container_data').html(data);
    }
});
    // membaca data file yg akan diupload, dari komponen 'fileku'

    setTimeout(function(){
    		var percentComplete=20;
    		$("#progressBar").html( Math.round(percentComplete) + ' %');

    },1000);
     setTimeout(function(){
    		var percentComplete=30;
    		$("#progressBar").html( Math.round(percentComplete) + ' %');

    },2000);
     setTimeout(function(){
    		var percentComplete=30;
    		$("#progressBar").html( Math.round(percentComplete) + ' %');

    },2000);
   
}
uploadFile();
 

		


</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.lay1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nws\application\views/helper/data/program_kegiatan.blade.php ENDPATH**/ ?>