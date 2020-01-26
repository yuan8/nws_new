
<?php


use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
class Document extends CI_Controller {
	 function __construct()
	    {
	        parent::__construct();
	    }


	    static function strposa($haystack, $needles=array(), $offset=0) {
		        $chr = array();
		        $haystack=substr($haystack, 0, 7);

		        foreach($needles as $needle) {
		                $res = strpos($haystack, $needle, $offset);
		                if ($res !== false) $chr[$needle] = $res;
		        }
		        if(empty($chr)) return false;
		        return min($chr);
		}



	function upload(){
		ini_set('memory_limit', '-1');

			$file_mimes = array('application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
 
			if(isset($_FILES['berkas_excel']['name']) && in_array($_FILES['berkas_excel']['type'], $file_mimes)) {
			 
			    $arr_file = explode('.', $_FILES['berkas_excel']['name']);
			    $extension = end($arr_file);
			 
			    if('csv' == $extension) {
			        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
			    } else {
			        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
			    }
			 
			    $spreadsheet = $reader->load($_FILES['berkas_excel']['tmp_name']);

			    $themplate=array(
			    	'id_pn'=>null,
			    	'id_pp'=>null,
			    	'id_kp'=>null,
			    	'id_propn'=>null,
			    	'id_psn'=>null,
			    	'pn'=>null,
			    	'pp'=>null,
			    	'kp'=>null,
			    	'propn'=>null,
			    	'psn'=>null,
			    	'type'=>null,
			    	'indikator'=>null,
			    	'target_1'=>null,
			    	'target_2'=>null,
			    	'target_3'=>null,
			    	'target_4'=>null,
			    	'target_5'=>null,
			    	'indikasi_pendanaan'=>null,
			    	'lokasi'=>null,
			    	'pelaksana'=>null,
			    	'page'=>0,


			    );
			     
			    $data_return=[];
			    $pp=[];
			    $kp=[];
			    $pn=[];
			    $propn=[];
			    $psn=[];

			    $keypn=0;
			    $keykp=0;
			    $keypp=0;
			    $keypsn=0;
			    $keyprop=0;



			    $sheetCount=$spreadsheet->getSheetCount();
			    for ($i=0;$i<$sheetCount;$i++) {
			    	# code...
			    	$sheetData=$spreadsheet->getSheet($i)->toArray();
			    	$sheetPage=$spreadsheet->getSheetNames()[$i];
					$sheetPage=preg_replace('/\s+/', '', $sheetPage);
					$sheetPage=str_replace('page', '', $sheetPage);
					$sheetPage=((int)$sheetPage);
			    	$themplate['page']=$sheetPage;

			    	
			    	 foreach($sheetData as $key=>$data)
					{


						$data1=$data[0];
						$data1=preg_replace('/\s+/', '', $data1);
						$data1con=explode(': ',$data[0]);
						if(isset($data1con[1])){
							array_shift($data1con);

							$data1con=implode(' ',$data1con);
						}else{
							$data1con=$data[0];
						}

						if(($data1!='')&& (!static::strposa($data[0],['N.A'])!==false) ){
							$rc=0;
							if(static::strposa($data[0],['PP ','KP ','ProP '])!==false){
								$rc=1;


								

							  	if(static::strposa($data[0],['PP '])!==false){
							  		$keypp+=1;
							  		$pp[]=array('id'=>$keypp,'data'=>$data1con,'id_pn'=>$keypn);
									$themplate['pp']=$data1con;
									$themplate['id_pp']=$keypp;
									$themplate['id_kp']=null;
									$themplate['id_propn']=null;
									$themplate['id_psn']=null;

									$themplate['kp']=null;
									$themplate['propn']=null;
									$themplate['psn']=null;
									$themplate['type']='pp';



							  	}else if(static::strposa($data[0],['KP '])!==false){
							  		$keykp+=1;
							  		$kp[]=array('id'=>$keykp,'data'=>$data1con,'id_pn'=>$keypn,'id_pp'=>$keypp);
									$themplate['kp']=$data1con;
									$themplate['id_kp']=$keykp;
									$themplate['id_propn']=null;
									$themplate['id_psn']=null;

									$themplate['propn']=null;
									$themplate['psn']=null;
									$themplate['type']='kp';


							  	}else if(static::strposa($data[0],['ProP '])!==false){
							  		$keyprop+=1;
							  		$propn[]=array('id'=>$keyprop,'data'=>$data1con,'id_pn'=>$keypn,'id_pp'=>$keypp,'id_kp'=>$keykp);
									$themplate['propn']=$data1con;
									$themplate['id_propn']=$keyprop;
									$themplate['psn']=null;

									$themplate['psn']=null;
									$themplate['type']='propn';


							  	}
							}else {
									if(!(static::strposa($data[0],['Program Prioritas/Kegiatan','Prioritas/Proyek Prioritas/Proyek'])!==false)){
										$rc=1;
								  		$keypsn+=1;
								  		$psn[]=array('id'=>$keypsn,'data'=>$data1con,'id_pn'=>$keypn,'id_pp'=>$keypp,'id_kp'=>$keykp,'id_propn'=>$keyprop);
										$themplate['psn']=$data1con;
										$themplate['id_psn']=$keypsn;
										$themplate['type']='psn';
									}


							}

							if((preg_replace('/\s+/', '', $data[1])!='')  && ($data[1]!='Indikator') ){
								$rc=true;
							}

							if($rc){
								$themplate['target_1']=($data[2]!='')?$data[2]:null;
								$themplate['indikator']=($data[1]!='')?$data[1]:null;
								$themplate['target_2']=($data[3]!='')?$data[3]:null;
								$themplate['target_3']=($data[4]!='')?$data[4]:null;
								$themplate['target_4']=($data[5]!='')?$data[5]:null;
								$themplate['target_5']=($data[6]!='')?$data[6]:null;
								$themplate['indikasi_pendanaan']=($data[7]!='')?$data[7]:null;
								$themplate['lokasi']=($data[8]!='')?$data[8]:null;
								$themplate['pelaksana']=($data[9]!='')?$data[9]:null;
								$data_return[]=$themplate;
								$rc=0;
							}



						}
				    }




			    }

			     	$fp = fopen('./DATARPJMN/DATA_RPJMN_2020.json', 'w');
        		fwrite($fp, json_encode($data_return,JSON_PRETTY_PRINT));
        		 	$fp = fopen('./DATARPJMN/PP.json', 'w');
        		fwrite($fp, json_encode($pp,JSON_PRETTY_PRINT));
        		 	$fp = fopen('./DATARPJMN/KP.json', 'w');
        		fwrite($fp, json_encode($kp,JSON_PRETTY_PRINT));
        		 	$fp = fopen('./DATARPJMN/PROPN.json', 'w');
        		fwrite($fp, json_encode($propn,JSON_PRETTY_PRINT));
        			$fp = fopen('./DATARPJMN/PSN.json', 'w');
        		fwrite($fp, json_encode($psn,JSON_PRETTY_PRINT));

        		dd('selesai');

			    // $sheetData = $spreadsheet->getActiveSheet()->toArray();

			    
			 //    $key_PN='';
			 //    $key_PP='';
			 //    $key_KP='';
			 //    $pp=0;
			 //    $pn=0;
			 //    $kp=0;
			 //    $num=0;
			 //    $data_return=[];

				// foreach($sheetData as $key=>$data)
				// {


						
			 //    }

			

			}
	}


	function index(){

		return view('document.index');
	}

}
