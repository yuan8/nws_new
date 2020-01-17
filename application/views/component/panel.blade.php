<script type="text/javascript">

var con_catatan="<tr class='row con_catatan mb-4'><td class='col-md-1 num_panel'>yyyyy</td><td class='col-md-5'><textarea name='catatan[]'  placeholder='Catatan' class='form-control local_var'></textarea></td><td class='col-md-5'><textarea placeholder='Rekomendasi' name='rekomendasi[]' class='form-control local_var'></textarea></td><td class='col-md-1'><button type='button' class='btn btn-danger btn-circle' onclick='hapus_panel_row(this)'>x</button></td></tr>";
if (localStorage.getItem("nuwas_panel_catatan") === null) {
  //...
  localStorage.setItem('nuwas_panel_catatan',"<table class='table'><thead><tr class='row'><th class='col-md-1'>No</th><th class='col-md-5'>Catatan</th><th class='col-md-5'>Rekomendasi</th><th class='col-md-1'>Hapus</th></thead><tbody id='con_panel'><tr class='row con_catatan mb-4'><td class='col-md-1 num_panel'>1</td><td class='col-md-5'><textarea name='catatan[]'  placeholder='Catatan' class='form-control local_var'></textarea></td><td class='col-md-5'><textarea placeholder='Rekomendasi' name='rekomendasi[]' class='form-control local_var'></textarea></td><td class='col-md-1'><button class='btn btn-danger btn-circle' onclick='hapus_panel_row(this)'>x</button></td></tr></tbody></table>");

}

if (localStorage.getItem("nuwas_panel_show") === null) {
  
  localStorage.setItem('nuwas_panel_show',0);
  localStorage.setItem('nuwas_panel_option',JSON.stringify({op:'open',top:0,right:0}));

}




function catatanPlus(dom){

	var num=($('.con_catatan')).length;
	var con_catatan_2=con_catatan.replace('yyyyy',(num+1));
	$('#con_panel').append(con_catatan_2);

	var ddm=$('#form_panel_catatan .con').html();
	localStorage.setItem('nuwas_panel_catatan',ddm);
}

function hapus_panel_row(dom){
	$(dom).parent().parent().remove();

	setTimeout(function(){
		$('.con_catatan').each(function(k,d){
			$(d).find('.num_panel').html(k+1);
		});

		var ddm=$('#form_panel_catatan .con').html();
		localStorage.setItem('nuwas_panel_catatan',ddm);
	},100);
	
}

if(localStorage.getItem("nuwas_panel_show")==1){

	showpanelCatatan();
}


function showpanelCatatan(suara=false){
	 localStorage.setItem('nuwas_panel_show',1);

	 if(suara){
	 	if (navigator.userAgent.indexOf("Chrome") !== -1){
	 		var text = new SpeechSynthesisUtterance('Anda Dapat Membuat Catatan untuk daerah, panel catatan berada pada kiri bawah');
	 	}else{
	 		var text = new SpeechSynthesisUtterance('position of panel note, on bottom left');
	 	}
		text.lang='id-ID';
		window.speechSynthesis.speak(text);
	 }

	jsPanel.create({
		animateIn: 'jsPanelFadeIn',
  		animateOut: 'jsPanelFadeOut',
		setStatus: 'minimized',
	    theme:       'primary',
	    headerTitle: 'Catatan',
	    position:    'right-top 0 0 down',
	    contentSize: '700 250',
	    content:     '<form id="form_panel_catatan" action="{{rt('catatan/store')}}" method="post"><div>'+"<button type='button' class='btn btn-primary' type='button' onclick='catatanPlus(this)'>+</button></div>"+'<div class="con">'+localStorage.getItem("nuwas_panel_catatan")+'</div><button type="submit" class="btn btn-primary mt-4 col-md-6">Kirim</button></form>',
	    callback: function () {
	        this.content.style.padding = '20px';
	    },
	    onbeforeclose: function () {
	 			if(confirm('Do you really want to close the panel?')){
	 				localStorage.setItem('nuwas_panel_show',0);
	        		return 1;

	 			}else{
	 				return 0;
	 			}

	    },
	     onsmallified: function(panel, status){
		    this.setHeaderTitle('catatan ' + this.status);
		  },
		  onstatuschange: function(){
		    this.setHeaderTitle('cat.. '+ this.status);
		  }
	});


	$('.local_var').on('keyup',function(){
			
			$(this).html($(this).val());
			var ddm=$('#form_panel_catatan .con').html();
			localStorage.setItem('nuwas_panel_catatan',ddm);
		});

}

function hidewpanelCatatan(){
	 localStorage.setItem('nuwas_panel_show',0);


}


</script>

<style type="text/css">
	.jsPanel {
		z-index: 99999999!Important;
	}
</style>