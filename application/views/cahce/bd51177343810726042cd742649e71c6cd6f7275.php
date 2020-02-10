<?php $__env->startSection('content'); ?>


<style type="text/css">
	


</style>
<button class="btn btn-sm btn-warning" onclick="init();"><i class="fa fa-refresh"></i> <b>Refresh Data</b> </button>
<div id="cnt" class="animated fadeInUp">
	<hr style="border-bottom: 2px solid #fff">
	<h1 class="text-center">Loading..</h1>
</div>

<script type="text/javascript">

	console.log('anu');
	$('#cnt').on('change',function() {
		console.log('berubah');
  		setTimeout(function(){
  			$( ".dataTables_filter input" ).addClass('form-control');
  		},500);
	});
	
	function clickPoint(data,index,placement){

		var data=data[index];

		if(undefined!=(data['next'])){

			$.post(data['next'],function(res){
				$(placement).html(res);
				$('#cnt').trigger('change');
				
				$('html, body').animate({
			        scrollTop: ($(placement).offset().top - 50) 
			    }, 500);

			});

		}


	}


	function init(){
		clickPoint([{'next':'<?php echo e(rt('/program-kegiatan/data/daerah')); ?>'}],0,'#cnt');
	}

	init();


	


</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.lay1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nws\application\views/pages/program_kegiatan_nuwas.blade.php ENDPATH**/ ?>