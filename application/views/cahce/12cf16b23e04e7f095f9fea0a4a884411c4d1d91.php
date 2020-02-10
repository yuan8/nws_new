<?php $__env->startSection('content'); ?>
<script src="<?php echo e(rt('L_MAP/idn.js')); ?>" charset="utf-8"></script>

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
                <a href="<?php echo e(rt('air_minum')); ?>" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
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
                <a href="<?php echo e(rt('Keuangan')); ?>" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
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
                <a href="<?php echo e(rt('pdam')); ?>" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
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

  <div class="row" >
    <div class="col-md-12 animated fadeInUp" id="content-map-canvas" style="background-image: url('<?php echo e(rt('dist/images/back_map.jpg')); ?>'); ">
      <div class="chart" id="map-container" style="max-width:calc(100vw - 20px);">
      </div>
    </div>
  </div>

</div>

  <style media="screen">
      div#content-map-canvas{
        margin-top: 40px;
      }

  div#content-map-canvas:before
/*  div#content-map-canvas:after*/ {
   content: "Jumlah Anggaran Total Per Provisi";
   margin-top: 10px;
   text-align: center;
   position: absolute;
   left: 0; right: 0;
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

  #map-container{
    /* min-height: 35vw; */
  }

  .highcharts-null-point {
    fill:#fff6db!important;
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
      backgroundColor:'transparent',
      borderColor:'transparent',
      events:{
        render:function(){
          $('path').each(function(key,value){
            if($(value).attr('fill')=='rgb(NaN,NaN,NaN)'){
              $(value).attr('fill','#fff');
            }
          });
          return true;
        }
      }

  },
  title: {
      text: '',
      style:{
        // color:'#fff'
      }

  },
  colors:['#fff'],
  subtitle: {
      text: 'BANGDA KEMENDAGRI (2020)',
      style:{
        // color:'#fff'
      }
  },
  legend: {
      enabled: false
  },
  mapNavigation: {
       enabled: true
     },
    colorAxis: {
              min: <?php echo e($min_anggran); ?>,
              max:<?php echo e($max_anggran); ?>,
              type: 'logarithmic',
              minColor: '#CA4626',
              maxColor: '#3ACA26'
              
            
            
      },
      legend: {
            layout: 'horizontal',
            borderWidth: 0,
            backgroundColor: 'rgba(255,255,255,0.85)',
            floating: true,
            verticalAlign: 'top',
            y: 25
        },
      mapNavigation: {
            enabled: true,
            buttonOptions: {
                verticalAlign: 'bottom'
            }
        },

  plotOptions: {
    map: {
      color:'green',
      states:{
        hover:function(){
           $('path').each(function(key,value){
            if($(value).attr('fill')=='rgb(NaN,NaN,NaN)'){
              $(value).attr('fill','#fff');
            }
          });
          return true;

        }
      }
    },
    series:{
      point:{
        color:'#fff',
        events:{
          click:function(e){
            $('path').each(function(key,value){
              if($(value).attr('fill')=='rgb(NaN,NaN,NaN)'){
                $(value).attr('fill','#fff');
              }
            });
            
            var url='<?php echo e(rt('program-kegiatan/per-daerah/data_rkpd/index/')); ?>'+this.options.id;
            $('#content-map-canvas').addClass('animated fadeOutLeft');
              setTimeout(function(){
                window.location=(url);
              },1000);
            }
         },

      },
      states:{
        hover:function(){
           $('path').each(function(key,value){
            if($(value).attr('fill')=='rgb(NaN,NaN,NaN)'){
              $(value).attr('fill','#fff');
            }
          });
          return true;

        }
      }
    }
  },
  series: [{
    type:'map',
    animation: {
       duration: 500
     },
    data:  <?php echo json_encode($anggaran);  ?>,
    keys: ['id', 'value'],
    name: 'aa',
    color:'red',
    borderWidth:1,
    color:'#fff',
    opacity:1,
    joinBy: 'id',

    tooltip: {
        headerFormat: '{point.properties.name}',
        pointFormat: '<b>{point.properties.name}</b><hr><br> Rp. {point.value}  '
    },
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
    }
  }
]

});





</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.lay1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nws\application\views/pages/index.blade.php ENDPATH**/ ?>