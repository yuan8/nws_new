@extends('template.admin')

@section('content')

<div class="col-md-12">
	<div class="card mb-4">
		<div class="card-body">
			<form action="{{rt('catatan/store')}}" method="post" id="form_simpan_catatan">
				<div class="row">
				<div class="col-md-12 mb-4">
					<input required="" type="text" class="form-control" placeholder="Judul" name="judul">
				</div>
				<div class="col-md-6">
					 <div id="catatan_rich_text" >{!!old('catatan')!!}</div>
						 <textarea required="" style="display: none" name="catatan" id="catatan_rich_text_textarea">{!!!old('catatan')!!}</textarea>
						 <hr>

					</div>
					<div class="col-md-6">
						 <div id="rekomendasi_rich_text" >{!!old('rekomendasi')!!}</div>
							 <textarea required="" style="display: none" name="rekomendasi" id="rekomendasi_rich_text_textarea">{!!!old('rekomendasi')!!}</textarea>
							 <hr>
						
					</div>
			</div>

			</form>
		</div>
		<div class="card-footer modal-footer">
			<button class="btn btn-primary" onclick="simpan()">Simpan</button>
		</div>
	</div>
</div>


    <script>

    	function getCatatan(){
    		$('#catatan_rich_text_textarea').html($('#catatan_rich_text').summernote('code'));
    		$('#rekomendasi_rich_text_textarea').html($('#rekomendasi_rich_text').summernote('code'));

    	}
    	function simpan(){
    		getCatatan();
    		$('#form_simpan_catatan').submit();
    	}

      $('#catatan_rich_text').summernote({
        placeholder: 'Catatan',
        // airMode: true,

        tabsize: 3,
        height: 300,
	       hint: {
			    words: ['NUWSP', 'NUWAS', 'Air Minum','nuwas','nuwsp','air minum'],
			    match: /\b(\w{1,})$/,
			    search: function (keyword, callback) {
			      callback($.grep(this.words, function (item) {
			        return item.indexOf(keyword) === 0;
			      }));
			    }
		},
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });

       $('#rekomendasi_rich_text').summernote({
        placeholder: 'Rekomendasi',
        // airMode: true,

        tabsize: 3,
        height: 300,
	       hint: {
			    words: ['NUWSP', 'NUWAS', 'Air Minum','nuwas','nuwsp','air minum'],
			    match: /\b(\w{1,})$/,
			    search: function (keyword, callback) {
			      callback($.grep(this.words, function (item) {
			        return item.indexOf(keyword) === 0;
			      }));
			    }
		},
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
    </script>
@stop