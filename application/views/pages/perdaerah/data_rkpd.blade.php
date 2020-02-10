@extends('template.lay1')

@section('content')
<script type="text/javascript" src="{{rt('L_MAP/idn_'.$id.'.js')}}"></script>
<hr>

<div class="row mt-4 text-dark no-gutters " id="cc" >
	<div class="col-lg-12">
        <h5 class="text-white text-center mb-4 mt-4"><b>{{$data_provinsi['nama']}}</b></h5>
 </div>
 <div class="col-md-12" style="background-image: url('{{rt('dist/images/back_map.jpg')}}')">
 	<div class="row">
 		

	<div class="col-md-5">
		<div class="col-md-12 text-center"><b>{{$data_provinsi['nama']}}</b> </div>
		<div class="row" style="border-bottom: 2px solid #222;border-top: 2px solid #222">
			
			<a  target="_blank" href="{{rt('program-kegiatan/laporan/data/'.$data_provinsi['id'])}}" class="btn btn-warning col-md-2 align-middle" style="vertical-align: middle!important"> 
				<p>Detail</p>
				<i class="fa fa-eye align-middle"></i> </a>
			<button class="btn btn-default col-md-3">
			<p>Program</p>
			<p><b> {{number_format($data_provinsi['jumlah_program'],0,' ',' ')}}</b></p> </button>
			<button class="btn btn-default col-md-3"> 
				<p>Kegiatan</p>
				<p><b>{{number_format($data_provinsi['jumlah_kegiatan'],0,' ',' ')}}</b></p> </button>
			<button class="btn btn-default bg-special col-md-4">
				<p>Anggaran</p>
				<p><b>Rp. {{number_format($data_provinsi['value'],0,' ',' ')}}</b> </p>

			</button>





		</div>
		<div id="map-container" class=" mt-4"></div>
	</div>
	<div class="col-md-7 card bg-special-2">
		<div class="card card-warning  animated fadeInRight mt-4">
			<div class="card-body">
				<table class="table table-striped" id="table">
					<thead>
						<tr>
							<th>
								Detail
							</th>
							<th>
								Daerah
							</th>

							<th>
								Jumlah Program
							</th>
							<th>
								Jumlah Kegaitan
							</th>
							<th>
								Jumlah Anggaran
							</th>
						</tr>
					</thead>
					<tbody>
						@foreach($data as $d)
							<tr>
								<td>
									<a href="{{rt('program-kegiatan/laporan/data/'.$d['id'])}}" target="_blank" class="btn btn-warning btn-sm"><i class="fa fa-eye"></i> </a>
								</td>
								<td>{{$d['nama']}}</td>
								<td>{{number_format($d['jumlah_program'],0,' ',' ')}}</td>
								<td>{{number_format($d['jumlah_kegiatan'],0,' ',' ')}}</td>
								<td>Rp. {{number_format($d['value'],0,' ',' ')}}</td>

							</tr>


						@endforeach	
					</tbody>
				</table>
			</div>
		</div>
	</div>
 	</div>
 </div>

</div>
<div class="row">
	<div class="col-md-12 text-dark">
		<div class="card card-warning  animated fadeInRight mt-4">
			<div class="card-body">
				<table class="table table-striped" id="table">
					<thead>
						<tr>
							<th>
								Detail
							</th>
							<th>
								Daerah
							</th>

							<th>
								Jumlah Program
							</th>
							<th>
								Jumlah Kegaitan
							</th>
							<th>
								Jumlah Anggaran
							</th>
						</tr>
					</thead>
				</table>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
	$('#table').DataTable({
        "ordering": false,
        "pageLength": 6,

    });
    $('.dataTables_length').remove();
	Highcharts.mapChart('map-container', {
	  chart: {
	      map: '{{'idn_'.$id}}',
	      borderWidth: 0,
	      backgroundColor:'transparent',
	      borderColor:'transparent',
	      events:{
	        
	      }

	  },
	    title: {
      text: 'KOTA KABUPATEN ',
      style:{
        // color:'#fff'
      }

  	},
	  colorAxis: {
              min:{{(float)$min_anggaran}},
              max:{{(float)$max_anggaran}},
              type: 'logarithmic',
              minColor: '#CA4626',
              maxColor: '#3ACA26',    
      },
      legend: {
            layout: 'horizontal',
            borderWidth: 0,
            backgroundColor: 'rgba(255,255,255,0.85)',
            floating: true,
            verticalAlign: 'bottom',
            y: 25,
       },
	   mapNavigation: {
            enabled: true,
            buttonOptions: {
                verticalAlign: 'bottom'
            }
        },
     
	   series: [{
            animation: {
                duration: 1000
            },
            data: <?php echo json_encode($data); ?>,
            joinBy: 'id',
            key: ['id','name','jumlah_program','jumlah_kegiatan','value'],

           
            name: 'Anggaran',
             dataLabels: {
           	 enabled: true,
              format: '({point.index}) {point.properties.name}',
               color: '#fff',
             style: {
                        fontSize: 8,
                    },
		    },
		    states: {
		        hover:{
		            color: '#BADA55'
		        }
		    },
		     tooltip: {
			        headerFormat: '{point.properties.name}',
			        pointFormat: '<b>{point.properties.name}</b><hr><br> Rp. {point.value}  '
			    },
					    point:{
		        color:'#fff',
		        events:{
		          click:function(e){
		          	console.log(this);
		            $('path').each(function(key,value){
		              if($(value).attr('fill')=='rgb(NaN,NaN,NaN)'){
		                $(value).attr('fill','#fff');
		              }
		            });
			            
			            var url='{{rt('program-kegiatan/laporan/data/')}}'+this.options.id;
			            $('#cc').removeClass('animated rubberBand');
			            $('#cc').addClass('animated rubberBand');
			              setTimeout(function(){
			                window.open(url);
			              },1000);
			            }
			        },
		   }
            
        }]

// 
	    
	});
</script>
@stop