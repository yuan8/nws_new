@if(CIV()->session->flashdata('message_system')!=null)
	
	<script type="text/javascript">
		<?php $rtx='alr_'.((int)rand(0,100)); ?>
		var message_{{$rtx}} ='{{CIV()->session->flashdata('message_system')['message']}}';
		var type_{{$rtx}} ='{{CIV()->session->flashdata('message_system')['type']}}';
		switch (type_{{$rtx}}){
		  case 'info':
		    // code block
			toastr.info( message_{{$rtx}} ) ;
		    break;
		  case 'error':
		    // code block
			toastr.error( message_{{$rtx}} ) ;
		    break;
		      // code block
		  case 'success':

			toastr.success( message_{{$rtx}} ) ;
		    break;
		  default:
		    // code block
		}

	</script>

@endif