
<?php



// if(!function_exists('dd')){
//   function dd($data){

//     echo '<div style="background:#222; padding:10px;"><h5 style="color:#fff">Semangat BosQ :)</h5><hr><pre style="color:#fff">' . var_export($data, true) . '</pre></div>';
//     die;

//   }

// }



    function getNilai($nilai){

        

        $nilai=''.$nilai;

        $nilai=trim($nilai);
        $nilai=strtolower($nilai);

        switch ($nilai) {
            case 'sakit':
                # code...
                return 1;
                break;
            case 'kurang sehat':
                # code...
                return 2;
                break;
            case 'potensi untuk sehat':
                # code...
                return 3;
                break;
            case 'sehat':
                # code...
                return 4;
                break;
            case 'sehat berkelanjutan':
                # code...
                return 5;
                break;
            case 'ya':
                # code...
                return 1;
                break;
            case 'tidak':
                # code...
                return 0;
                break;
            case 'sebagian':
                # code...
                return 0.5;
                break;
            case 'sangat rendah':
                # code...
                return 1;
                break;
                break;
            case 'rendah':
                # code...
                return 2;
                break;
            case 'sendah':
                # code...
                return 3;
                break;
            case 'tinggi':
                # code...
                return 4;
                break;
            case 'sangat tinggi':
                # code...
                return 5;
                break;
            default:
                break;
        }

        $nilai=str_replace(',', '', $nilai);
        $nilai=(float)$nilai;
        return $nilai;


        

    }



if(!function_exists('hari_ini')){
 function hari_ini($data=''){
    $hari = date("D");
    $hari_ini='xxx';
    $hari_ini2='xxx';

    switch($hari){
        case 'Sun':
            $hari_ini = "Minggu";
            $hari_ini2 = "Sunday";

        break;
 
        case 'Mon':         
            $hari_ini = "Senin";
            $hari_ini2 = "Monday";

        break;
 
        case 'Tue':
            $hari_ini = "Selasa";
            $hari_ini2 = "Tuesday";

        break;
 
        case 'Wed':
            $hari_ini = "Rabu";
            $hari_ini2 = "Wednesday";

        break;
 
        case 'Thu':
            $hari_ini = "Kamis";
            $hari_ini2 = "Thursday";

        break;
 
        case 'Fri':
            $hari_ini = "Jumat";
            $hari_ini2 = "Friday";

        break;
 
        case 'Sat':
            $hari_ini = "Sabtu";
            $hari_ini2 = "Saturday";

        break;
        
        default:
            $hari_ini = "Tidak di ketahui";  
            $hari_ini2 = "No Day";

        break;
    }

    if($data!=''){
        $data=strtolower($data);
        $hari_ini=strtolower($hari_ini);
        $hari_ini2=strtolower($hari_ini2);

        if($data==$hari_ini){
        return 1;

        }else if($data==$hari_ini2){
            return 1;

        }else{
            return 0;
        }
    }
 
    return $hari_ini;

    }
}



function importCTRL($path) {
    
     static $controllers = array();

    
    if(!isset($controllers[$path])) {
    
        $parts = preg_split("~/~", $path, -1, PREG_SPLIT_NO_EMPTY);
        $c = ucfirst(array_pop($parts));
        $file = APPPATH .'/controllers/'. implode('/', $parts) .'/'. ($c) . EXT;
        $error = "Could not load controller ";
    
        if(file_exists($file)) {
            require_once $file;
        
            if(!class_exists($c, FALSE)) {
                throw new Exception($error);
            }        

            $controllers[$path] = new $c;
        
        } else {
            throw new Exception($error);
        }
    }
    
    return $controllers[$path];
}