<?php

$id='pdam_trafik_chart_'.date('h-i');

?>

<div class="" id="<?php echo e($id); ?>"></div>

<script type="text/javascript">
	Highcharts.chart('<?php echo e($id); ?>', {
    chart: {
        type: 'line',
        	backgroundColor:'rgba(255,255,255,0.7)'

        
    },
    title: {
        text: 'Trafik Nilai NUWSP'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: <?php echo json_encode($data['chart']['category']); ?>,
         title: {
            text: 'Hasil Penilain periode terahir di sebelah kiri',
            enabled: true

        },
       
    },
    yAxis: {
        title: {
            text: 'Hasil Penilain'
        },
        labels: {
            formatter: function () {
                // return this.value / 1000;
            }
        }
    },
    tooltip: {
        split: true,
        formatter:function(){
             return this.points.reduce(function (s, point) {
                var val=point.y;
                if(point.series.name=='Penilaian NUWSP'){
                    switch(val){
                        case 1:
                        val='Sakit';
                        break;
                        case 2:
                        val='Kuarang Sehat';
                        break;
                        case 3:
                        val='Potensial Untuk Sehat';
                        break;
                        case 4:
                        val='Sehat';
                        break;
                        case 5:
                        val='Sehat Berkelanjutan';
                        break;
                        default:
                          val=point.y;
                          break;

                    }

                }

                return s + '<br/>' + point.series.name + ': <b>' +val
                     + '</b>'
            }, '<b>' + this.x + '</b>');
        },  
        valueSuffix: ' Nilai'
    },
    plotOptions: {
        area: {
            stacking: 'normal',
            lineColor: '#666666',
            lineWidth: 1,
            marker: {
                lineWidth: 1,
                lineColor: '#666666'
            }
        }
    },
    series: <?php echo json_encode($data['chart']['data']); ?>
});
</script><?php /**PATH C:\xampp\htdocs\nws\application\views/api/pdam/trafik_chart.blade.php ENDPATH**/ ?>