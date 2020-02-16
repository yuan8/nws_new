<?php $__env->startSection('content'); ?>
<script src="<?php echo e(rt('L_MAP/idn.js?v=2'.date('s'))); ?>" charset="utf-8"></script>

<div class="bg-def">

  <div class="row no-gutters ">
    <div class="col-lg-12">
      <h5 class="text-white text-center mb-4 mt-4">Data Suport System (<?php echo e($tahun); ?>)</h5>
    </div>
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h5>Perencanaan Kegiatan</h5>
          <p><?php echo e(number_format($data['jumlah_kegiatan'],0,',','.')); ?> Kegiatan</p>
        </div>
        <div class="icon">
          <i class="icon ion-android-locate"></i>
        </div>
        <a href="<?php echo e(rt('program_kegiatan_nuwas')); ?>" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          <h5>Anggaran</h5>

          <p>Rp. <?php echo e(number_format($data['jumlah_anggaran'],0,',','.')); ?></p>
        </div>
        <div class="icon">
          <i class="icon ion-cash"></i>
        </div>
        <a href="<?php echo e(rt('program_kegiatan_nuwas')); ?>" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          <h5>Profile PDAM</h5>

          <p><?php echo e(number_format($data2['jumlah_pdam'],0,',','.')); ?></p>
        </div>
        <div class="icon">
          <i class="icon ion-waterdrop"></i>
        </div>
        <a href="<?php echo e(rt('h-pdam/data')); ?>" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->

    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-danger">
        <div class="inner">
          <h5>Profile Kebijakan</h5>
          <p style="min-height: 25px;"></p>
        </div>
        <div class="icon">
          <i class="icon ion-home"></i>
        </div>
        <a href="<?php echo e(rt('kebijakan')); ?>" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>

  <div class="row">
    <div class="col-md-12 animated fadeInUp" id="content-map-canvas" style="background-image: url('<?php echo e(rt('dist/images/back_map.jpg')); ?>'); ">
      <div class="chart" id="map-container" style="max-width:calc(100vw - 20px);">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 text-center mt-4">
      <h5 class="">PENILAIAN NUWAS (<?php echo e($tahun); ?>)</h5>
    </div>
  </div>
  <div class="row no-gutters mt-4 text-dark" id="dashboard_pdam">

  </div>

  <script type="text/javascript">
    $.post('<?php echo e(rt('api/pdam/dashboard')); ?>',
      function(res) {
        $('#dashboard_pdam').html(res);

        $('[data-toggle="popover"]').popover();
        setTimeout(function() {

        }, 200);
      });
  </script>

</div>

<style media="screen">
  div#content-map-canvas {
    margin-top: 40px;
  }

  div#content-map-canvas:before

  /*  div#content-map-canvas:after*/
    {
    content: "Jumlah Anggaran Total Per Provisi";
    margin-top: 10px;
    text-align: center;
    position: absolute;
    left: 0;
    right: 0;
    bottom: 100%;
    font-weight: bold;
    border-bottom: 25px solid #f1f1f1;
    border-left: 25px solid transparent;
    border-right: 25px solid transparent;
  }

  /*
  div#content-map-canvas:after {
   bottom: auto;
   top: 100%;
   border-bottom: none;
   border-top: 20px solid #f1f1f1;
  }*/

  #map-container {
    /* min-height: 35vw; */
  }

  .highcharts-null-point {
    fill: #fff6db !important;
  }
</style>

<script type="text/javascript">
  Highcharts.setOptions({
    defs: {
      hatchLeft: {
        tagName: 'pattern',
        id: 'hatch-left',
        patternUnits: 'userSpaceOnUse',
        width: 4,
        height: 4,
        children: [{
          tagName: 'path',

        }]
      }
    }
  });;


  Highcharts.mapChart('map-container', {
    chart: {
      map: 'idn',
      borderWidth: 0,
      backgroundColor: 'transparent',
      borderColor: 'transparent',
      

    },
     colorAxis: [{
        floor:1,
        min: <?php echo e($min_anggran); ?>,
        max: <?php echo e($max_anggran); ?>,
        type: 'logarithmic',
        minColor: '#CA4626',
        maxColor: '#3ACA26'
      }
    ],
    title: {
      text: '',
      style: {
        // color:'#fff'
      }

    },
    colors: ['#fdd',],
    subtitle: {
      text: 'BANGDA KEMENDAGRI (2020)',
      style: {
        // color:'#fff'
      }
    },

    legend: {
      layout: 'horizontal',
      borderWidth: 1,
      backgroundColor: 'rgba(255,255,255,1)',
      floating: false,
      verticalAlign: 'bottom',
      y: 25
    },
    mapNavigation: {
      enabled: true,
      buttonOptions: {
        verticalAlign: 'bottom'
      },

    },

    plotOptions: {
          map: {
              accessibility:{
                enabled:true,
              },
              colorAxis:{
                nullColor:'#fff'
              },
              marker:{
                lineColor:'#222',
                lineWidth:1
              },
            cursor: 'pointer',
        
        },
        mappoint:{
          colorAxis:{
                enabled:false
          },
         
        }
      

    },
    series: [{
        type: 'map',
        animation: {
          duration: 500
        },
        colorAxis:0,
        data: <?php echo json_encode($anggaran); ?> ,
        keys : ['id', 'value'],
        name: 'Jumlah Anggaran',
        borderWidth: 1,
       
       
        opacity: 1,
        joinBy: 'id',

        tooltip: {
          headerFormat: '{point.properties.name}',
          pointFormat: '<b>{point.properties.name}</b><hr><br> Rp. {point.value} ',

        },
          point:{
             events:{
              click:function(){

                 var url='<?php echo e(rt('program-kegiatan/per-daerah/data_rkpd/index/')); ?>'+this.options.id;
                  setTimeout(function(){
                      window.open(url);
                  },100);
                
                console.log(this);
                console.log('aaa');

              }
            },
          },


        dataLabels: {
          enabled: true,
          format: '{point.properties.name}',
          color: '#fff',
          style: {
            fontSize: 8,
          },
        },
        states: {
          hover: {
            color: '#BADA55'
          }
        }
      },
      {

        type: 'mappoint',
        name: 'PDAM',
        color:'blue',
        dataLabels: {
          enabled: false,
          format: '({point.index}) {point.properties.name}',
          color: '#fff',
          style: {
            fontSize: 8,
          },
        },
         
          point:{
             events:{
              click:function(){

                 var url='<?php echo e(rt('h-pdam/data/detail/')); ?>'+this.options.id;
                  setTimeout(function(){
                      window.open(url);
                  },100);
                
                console.log(this);
                console.log('aaa');

              }
            },
          },
        tooltip: {
          headerFormat: '{this.name}',
          pointFormat: '<b>{point.name}</b><hr><br> {point.options.penilaian} '
        },
        plotOptions:{
          marker:{
            borderWidth:3,
            borderColor:'#FFF'
          }
        },
         borderWidth:3,
         borderColor:'#fff',
        legend: {
          enabled: false
        },
        


        data: <?php echo json_encode($pdam); ?>

      }


    ]

  });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.lay1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nws\application\views/pages/index.blade.php ENDPATH**/ ?>