<?php if(CIV()->session->flashdata('message_system')!=null): ?>
	
	<script type="text/javascript">
		<?php $rtx='alr_'.((int)rand(0,100)); ?>
		var message_<?php echo e($rtx); ?> ='<?php echo e(CIV()->session->flashdata('message_system')['message']); ?>';
		var type_<?php echo e($rtx); ?> ='<?php echo e(CIV()->session->flashdata('message_system')['type']); ?>';
		switch (type_<?php echo e($rtx); ?>){
		  case 'info':
		    // code block
			toastr.info( message_<?php echo e($rtx); ?> ) ;
		    break;
		  case 'error':
		    // code block
			toastr.error( message_<?php echo e($rtx); ?> ) ;
		    break;
		      // code block
		  case 'success':

			toastr.success( message_<?php echo e($rtx); ?> ) ;
		    break;
		  default:
		    // code block
		}

	</script>

<?php endif; ?><?php /**PATH C:\xampp\htdocs\nws\application\views/component/alert.blade.php ENDPATH**/ ?>