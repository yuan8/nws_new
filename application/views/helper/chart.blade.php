<div class="animated fadeInUp">
    <hr style="background: #fff" class="mt-4">
<h5 class="text-center text-uppercase"><b> DATA REKAP {{$title}}</b></h5>
<div class="row" class="animated fadeInUp">
    <div class="col-md-4 ">
        <div class="card bg-special same_height">
            <div class="card-body" id="{{$id_dom}}pie">
                
            </div>
        </div>
    </div>
    <div class="col-md-4 ">
        <div class="card bg-special same_height">
            <div class="card-body" id="{{$id_dom}}pie_pendukung">
                
            </div>
        </div>
        
    </div>
    <div class="col-md-4 ">
        <div class="card bg-special-2 same_height">
            <div class="card-body text-center" id="">
                <hr style=" border-bottom:2px solid #222;">
                <h6 class="text-center text-dark"><b>{{$title}}</b></h6>
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
            <div class="card-body" id="{{$id_dom}}container"></div>
        </div>
    </div>

</div>
<div class="" id="{{$id_dom}}_next_container">
    <div class="row">
        <div class="col-md-12">
        <div class="card bg-special-2">
            <div class="card-body  table-renponsive text-dark">
                <h5 class="text-center"><b>DETAIL {{$title}}</b></h5>
                <hr>
                <table class="table table-striped " style="background: #f1f1f1" id="{{$id_dom}}table">
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
                                <td>{{$key+1}}</td>
                                <td class="btn-group">
                                   <!--  <a href="{{$value['link']}}" target="_blank" class="btn btn-sm btn-warning">Detail Proram</a> -->
                                    <button class="btn btn-primary btn-sm" onclick="
                                     clickPoint({{$id_dom}}_data,{{$key}},'#{{$id_dom}}_next_container');">Detail</button>
                                    <?php
                                        if(isset($link_laporan)?$link_laporan:false){
                                    ?>
                                              <a href="{{$value['link_laporan']}}" target="_blank" class="btn btn-sm btn-info">View</a>

                                    <?php

                                        }

                                     ?>

                                </td>
                                <td>{{$value['nama']}}</td>
                                <td>{{$value['jumlah_program']}}</td>
                                <td>{{$value['jumlah_kegiatan']}}</td>

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



var {{$id_dom}}_data=<?php echo json_encode($data) ?> ;
var {{$id_dom}}_data_pie=<?php echo json_encode($rekap_program_kegiatan) ?> ;
var {{$id_dom}}_data_pie_pendukung=<?php echo json_encode($rekap_program_kegiatan_pendukung) ?> ;

@php
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
@endphp

@foreach($data as $d)
    @php
        $category[]=$d['nama'];
        $series[0]['data'][]=(int) $d['jumlah_kegiatan'];
        $series[1]['data'][]=(int) $d['jumlah_program'];

    @endphp

@endforeach


Highcharts.chart('{{$id_dom}}container', {
    chart: {
        type: 'column',
        events:{
              click:function(e){

                  var index=parseInt(Math.round(e.xAxis[0].value));
                  if(index<0){
                    index=0;
                  }

                  clickPoint({{$id_dom}}_data,index,"#{{$id_dom}}_next_container");

                }
        },

    },
    title: {
        text: '{{$title}}'
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
                  clickPoint({{$id_dom}}_data,this.index,"#{{$id_dom}}_next_container");
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
Highcharts.chart('{{$id_dom}}pie', {
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
            { name: 'JUMLAH PROGRAM', y: {{$rekap_program_kegiatan['jumlah_program']}} },
            { name: 'JUMLAH KEGIATAN', y: {{$rekap_program_kegiatan['jumlah_kegiatan']}} },
          
        ]
    }]
});

Highcharts.chart('{{$id_dom}}pie_pendukung', {
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
            { name: 'SPM', y: {{(int) $rekap_program_kegiatan_pendukung['spm']}} },
            { name: 'NSPK', y: {{(int) $rekap_program_kegiatan_pendukung['nspk']}} },
            { name: 'SDGS', y: {{(int) $rekap_program_kegiatan_pendukung['sdgs']}} },
            { name: 'PN', y: {{(int) $rekap_program_kegiatan_pendukung['pn']}} },


          
        ]
    }]
});


setTimeout(function(){
    $('#{{$id_dom}}table').DataTable({
        "ordering": false
    });
},400);



</script>

</div>