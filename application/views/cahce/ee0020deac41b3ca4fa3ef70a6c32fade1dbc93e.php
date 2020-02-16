<?php $__env->startSection('content'); ?>

<style type="text/css">
	
	.card.bg-special{
		background-color: #08AEEA;
		background-image: linear-gradient(80deg, #f1f1f1 80%, #007bff 10%);
		-webkit-backdrop-filter: blur(10px);

	}

	.card.bg-special-2{
		background-color: #08AEEA;

		background-image: linear-gradient(60deg, #08AEEA 30%, #2AF598 80%, #007bff 70%);
		-webkit-backdrop-filter: blur(10px);

	}


	.card.same_height{
		min-height: calc(100% - 15px);

	}

</style>
<button class="btn btn-sm btn-warning" onclick="init();"><i class="fa fa-refresh"></i> <b>Refresh Data</b> </button>
<div id="cnt">
	<hr style="border-bottom: 2px solid #fff">
	<h1 class="text-center">Loading..</h1>
</div>

<script type="text/javascript">
	
	function clickPoint(data,index,placement){

		var data=data[index];

		if(undefined!=(data['next'])){

			$.post(data['next'],function(res){
				$(placement).html(res);

				$('html, body').animate({
			        scrollTop: ($(placement).offset().top - 50) 
			    }, 500);
			});

		}


	}


	function init(){
		clickPoint([{'next':'<?php echo e(rt('/anggaran/urusan/perurusan')); ?>'}],0,'#cnt');
	}

	init();


	


</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.lay1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nws\application\views/pages/anggaran/urusan.blade.php ENDPATH**/ ?>