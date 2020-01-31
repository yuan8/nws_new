<hr style="background: #fff" class="mt-4">
<h5 class="text-center text-uppercase"><b> DATA REKAP <?php echo e($title); ?></b></h5>
<div class="row">
	<div class="col-md-4 ">
		<div class="card bg-special same_height">
			<div class="card-body" id="<?php echo e($id_dom); ?>pie">
				
			</div>
		</div>
	</div>
	<div class="col-md-4 ">
		<div class="card bg-special same_height">
			<div class="card-body" id="<?php echo e($id_dom); ?>pie_pendukung">
				
			</div>
		</div>
		
	</div>
	<div class="col-md-4 ">
		<div class="card bg-special-2 same_height">
			<div class="card-body text-center" id="">
				<hr style=" border-bottom:2px solid #222;">
                <h6 class="text-center text-dark"><b><?php echo e($title); ?></b></h6>
				<h4 class="text-white"><b>SUMBER DATA</b> </h4>
				<h5 class="text-white"><b>RKPD 2020</b> </h5>
				<div class="btn-group">
					<button class="btn btn-warning"><b>Download PDF</b></button>
					<button class="btn btn-primary"><b> EXCEL</b></button>
				</div>
				<hr style=" border-bottom:2px solid #222;">



			</div>
		</div>
		
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="card bg-special">
			<div class="card-body" id="<?php echo e($id_dom); ?>container"></div>
		</div>
	</div>

</div>
<div class="" id="<?php echo e($id_dom); ?>_next_container">
	<div class="row">
		<div class="col-md-12">
		<div class="card bg-special-2">
			<div class="card-body  table-renponsive text-dark">
				<h5 class="text-center"><b>DETAIL <?php echo e($title); ?></b></h5>
				<hr>
				<table class="table table-striped " style="background: #f1f1f1" id="<?php echo e($id_dom); ?>table">
					<thead>
						<tr>
							<th>No</th>
							<th>Daetail</th>

							<th>Category</th>
							<th>Jumlah Program</th>
							<th>Jumlah Kegiatan</th>




						</tr>
					</thead>
					<tbody>
						<?php foreach ($data as $key => $value): ?>
							<tr>
								<td><?php echo e($key+1); ?></td>
								<td><a href="<?php echo e($value['link']); ?>" target="_blank" class="btn btn-sm btn-warning">Detail Proram</a></td>
								<td><?php echo e($value['nama']); ?></td>
								<td><?php echo e($value['jumlah_program']); ?></td>
								<td><?php echo e($value['jumlah_kegiatan']); ?></td>

							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
		
	</div>
	
</div>



<script type="text/javascript">



var <?php echo e($id_dom); ?>_data=<?php echo json_encode($data) ?> ;
var <?php echo e($id_dom); ?>_data_pie=<?php echo json_encode($rekap_program_kegiatan) ?> ;
var <?php echo e($id_dom); ?>_data_pie_pendukung=<?php echo json_encode($rekap_program_kegiatan_pendukung) ?> ;

<?php
$series=[
[
	'name'=>'JUMLAH KEGIATAN',
	'data'=>[]

],
[
	'name'=>'JUMLAH PROGRAM',
	'data'=>[]

],

];
$category=[]
?>

<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<?php
		$category[]=$d['nama'];
		$series[0]['data'][]=(int) $d['jumlah_kegiatan'];
		$series[1]['data'][]=(int) $d['jumlah_program'];

	?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


Highcharts.chart('<?php echo e($id_dom); ?>container', {
    chart: {
        type: 'column',
        events:{
              click:function(e){

                  var index=parseInt(Math.round(e.xAxis[0].value));
                  if(index<0){
                    index=0;
                  }

                  clickPoint(<?php echo e($id_dom); ?>_data,index,"#<?php echo e($id_dom); ?>_next_container");

                }
        },

    },
    title: {
        text: '<?php echo e($title); ?>'
    },
    subtitle: {
        text: 'Sumber Data RKPD'
    },
    accessibility: {
        announceNewData: {
            enabled: true
        }
    },
    xAxis: {
        categories: <?php  echo json_encode($category); ?>,
    },
    yAxis: {
        title: {
            text: 'PROGRAM KEGIATAN'
        }

    },
    legend: {
        enabled: true
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y}'
            },
            point:{
            events:{
              click:function(e){
                  clickPoint(<?php echo e($id_dom); ?>_data,this.index,"#<?php echo e($id_dom); ?>_next_container");
                }
             },

          }
        }
    },

    tooltip: {
      headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
      pointFormatter:function(){
        var val=(this.y).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        return '<tr><td style="color:{series.color};padding:0">'+this.series.name+' </td>' +
          '<td style="padding:0"><b>: '+val+'</b></td></tr>'

      },

      footerFormat: '</table>',
      shared: true,
      useHTML: true
  },

    series: <?php echo json_encode($series); ?>,
    
});



// Build the chart
Highcharts.chart('<?php echo e($id_dom); ?>pie', {
    chart: {
        plotBackgroundColor: null,
        backgroundColor:'transparent',
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie',
        height:200
    },
    title: {
        text: 'REKAP JUMLAH PROGRAM KEGIATAN',
         style:{
        	fontSize:10,
        	fontWeight:'bold'
        }
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.y}</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.y} ',
                connectorColor: 'silver'
            }
        }
    },
    series: [{
        name: 'JUMLAH',
        data: [
            { name: 'JUMLAH PROGRAM', y: <?php echo e($rekap_program_kegiatan['jumlah_program']); ?> },
            { name: 'JUMLAH KEGIATAN', y: <?php echo e($rekap_program_kegiatan['jumlah_kegiatan']); ?> },
          
        ]
    }]
});

Highcharts.chart('<?php echo e($id_dom); ?>pie_pendukung', {
    chart: {
        backgroundColor:'transparent',
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie',
        height:200
    },
    title: {
        text: 'REKAP JUMLAH  KEGIATAN PENDUKUNG PUSAT',
        style:{
        	fontSize:10,
        	fontWeight:'bold'
        }
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.y}</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.y} ',
                connectorColor: 'silver'
            }
        }
    },
    series: [{
        name: 'JUMLAH',
        data: [
            { name: 'SPM', y: <?php echo e((int) $rekap_program_kegiatan_pendukung['spm']); ?> },
            { name: 'NSPK', y: <?php echo e((int) $rekap_program_kegiatan_pendukung['nspk']); ?> },
            { name: 'SDGS', y: <?php echo e((int) $rekap_program_kegiatan_pendukung['sdgs']); ?> },
            { name: 'PN', y: <?php echo e((int) $rekap_program_kegiatan_pendukung['pn']); ?> },


          
        ]
    }]
});


setTimeout(function(){
	$('#<?php echo e($id_dom); ?>table').DataTable();
},400);



</script><?php /**PATH C:\xampp\htdocs\nws\application\views/helper/chart.blade.php ENDPATH**/ ?>