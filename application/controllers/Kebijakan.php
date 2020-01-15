<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kebijakan extends CI_Controller {


  public function index(){

  	return view('pages.kebijakan');
  }



  public static function buildquery($where_def,$where,$query){
   
    foreach ($where as $key => $value) {
      $where_def[]=$value;
    }


    ($where_def);

    $where_text='';
    foreach ($where_def as $key => $value) {
      if($key==0){
      $where_text.=' where ';
      }else{
        $where_text.=' and ';
      }

      $where_text.=' '.$value[0].' '.$value[1];
      if($value[3]=='string'){
        $where_text.="'".((string) $value[2] )."'";
      }else if($value[3]=='boolean'){
        $where_text.=((boolean) $value[2] )?'true':'false';

      }else if($value[3]=='numberic'){
        $where_text.=((int) $value[2] );

      }else{
        $where_text.=( $value[2] );

      }
    }


    $query=str_replace('{{where}}', $where_text, $query);

    
    return array('query'=>$query,'where'=>$where_def);
    
  }



  public static function per_provinsi(){

    $where_def=[
    // ['a.kode_kegiatan',' is not  ','null',''],
    ['a.tag_air_minum',' =  ',true,'boolean']


    ];
    $where=''!=(request('where'))?request('where'):[];


    $query="select p.id_provinsi as key,p.nama as key_name,
      CONCAT('[[',
        '`a.kode_daerah`',
        ',',
        '` ilike `',
        ',','`',
        p.id_provinsi,
        '%`',
        ',',
        '`string`]]'
        ) as where_add,
      count(DISTINCT(a.kode_program)) as data_jumlah_program,count(a.kode_kegiatan) as data_jumlah_kegiatan from provinsi as p
       join program_kegiatan_sipd2 as a on a.kode_daerah ILIKE p.id_provinsi || '%' {{where}}
      group by p.id_provinsi order by count(a.kode_kegiatan) desc
    ";

    $builder=static::buildquery($where_def,$where,$query);

    $query=$builder['query'];
    $where_def=$builder['where'];


    return (array('query'=>$query,'where_def'=>$where_def,'title'=>'Program Kegiatan Per-Provinsi dan Kota kabupaten','subtitle'=>'Bangda Kemendagri','next_link'=>'per_kota'));
  }

  public function per_kota($id_provinsi=''){

    $where_def=[
    // ['a.kode_kegiatan',' is not  ','null',''],
    ['a.tag_air_minum',' =  ',true,'boolean']

  ];

    $where=''!=(request('where'))?request('where'):[];


    $query="select p.id as key, p.nama as key_name , 
      count(DISTINCT(a.kode_program)) as data_jumlah_program,count(a.kode_kegiatan) as data_jumlah_kegiatan,
       CONCAT('[[',
        '`a.kode_daerah`',
        ',',
        '` =`',
        ',','`',
        p.id,
        '`',
        ',',
        '`string`]]'
        ) as where_add

      from view_daerah as p
       join program_kegiatan_sipd2 as a on a.kode_daerah = p.id {{where}}
      group by p.id,p.nama order by count(a.kode_kegiatan) desc
    ";


    $builder=static::buildquery($where_def,$where,$query);
    $query=$builder['query'];
    $where_def=$builder['where'];


    return (array('query'=>$query,'where_def'=>$where_def,'title'=>'Program Kegiatan ','subtitle'=>'Bangda Kemendagri','next_link'=>'per_urusan'));
  
  }

   public function per_urusan(){

     $where_def=[
   	 	['a.kode_kegiatan',' is not  ','null',''],
    	['a.tag_air_minum',' =  ',true,'boolean']
    ];

    $where=''!=(request('where'))?request('where'):[];


    $query="
      select p.id as key, p.nama as key_name,
       CONCAT('[[',
        '`a.id_urusan`',
        ',',
        '` =`',
        ',','`',
        p.id,
        '`',
        ',',
        '`numberic`]]'
        ) as where_add,
      count(DISTINCT(a.kode_program)) as data_jumlah_program,count(a.kode_kegiatan) as data_jumlah_kegiatan
      from master_urusan as p
      join program_kegiatan_sipd2 as  a on a.id_urusan = p.id 
      {{where}} 
      group by p.id  order by count(a.kode_kegiatan) desc

    ";

   
    $builder=static::buildquery($where_def,$where,$query);
    $query=$builder['query'];
    $where_def=$builder['where'];


    return (array('query'=>$query,'where_def'=>$where_def,'title'=>'Program Kegiatan Per-Provinsi dan Kota kabupaten','subtitle'=>'Bangda Kemendagri','next_link'=>'per_kota'));

  }

   public function per_sub_urusan(){

     $where_def=[
    	['a.kode_kegiatan',' is not  ','null',''],
    	['a.tag_air_minum',' =  ',true,'boolean']
    ];

    $where=''!=(request('where'))?request('where'):[];


    $query="
      select p.id as key, p.nama as key_name,
       CONCAT('[[',
        '`a.id_sub_urusan`',
        ',',
        '` =`',
        ',','`',
        p.id,
        '`',
        ',',
        '`numberic`]]'
        ) as where_add,
      count(DISTINCT(a.kode_program)) as data_jumlah_program,count(a.kode_kegiatan) as data_jumlah_kegiatan
      from master_sub_urusan as p
       join program_kegiatan_sipd2 as  a on a.id_sub_urusan = p.id 
      {{where}} 
      group by p.id  order by count(a.kode_kegiatan) desc

    ";

   
    $builder=static::buildquery($where_def,$where,$query);
    $query=$builder['query'];
    $where_def=$builder['where'];


    return (array('query'=>$query,'where_def'=>$where_def,'title'=>'Program Kegiatan Per-Provinsi dan Kota kabupaten','subtitle'=>'Bangda Kemendagri','next_link'=>'per_kota'));

  }

   public function per_program(){

     $where_def=[
    	['a.kode_kegiatan',' is not  ','null',''],
    	['a.tag_air_minum',' =  ',true,'boolean']
    ];


    $where=''!=(request('where'))?request('where'):[];


    $query="
      select DISTINCT(a.kode_program) as key, a.uraian_kode_program_daerah as key_name,
       CONCAT('[[',
        '`a.kode_program`',
        ',',
        '` =`',
        ',','`',
        a.kode_program,
        '`',
        ',',
        '`string`]]'
        ) as where_add,
      count(a.kode_kegiatan) as data_jumlah_kegiatan
      from program_kegiatan_sipd2 as a
      
      {{where}} 
      group by (a.kode_program),a.uraian_kode_program_daerah  order by count(a.kode_kegiatan) desc

    ";

   
    $builder=static::buildquery($where_def,$where,$query);
    $query=$builder['query'];
    
    $where_def=$builder['where'];

    return (array('query'=>$query,'where_def'=>$where_def,'title'=>'Program Kegiatan Per-Provinsi dan Kota kabupaten','subtitle'=>'Bangda Kemendagri','next_link'=>'per_kota'));

  }

  public function per_nspk(){

     $where_def=[
    	['a.kode_kegiatan',' is not  ','null',''],
    	['a.tag_air_minum',' =  ',true,'boolean']
    ];

    
    $where=''!=(request('where'))?request('where'):[];


    $query="
      select DISTINCT(a.id_nspk) as key, nspk.nspk as key_name,
       CONCAT('[[',
        '`a.id_nspk`',
        ',',
        '` =`',
        ',','`',
        a.id_nspk,
        '`',
        ',',
        '`string`]]'
        ) as where_add,

      count(a.kode_kegiatan) as data_jumlah_kegiatan,
      count(DISTINCT(a.kode_program)) as data_jumlah_program

      from program_kegiatan_sipd2 as a
      join master_nspk as nspk on a.id_nspk = nspk.id
      
      {{where}} 

      group by (a.id_nspk,nspk.nspk) order by count(a.kode_kegiatan) desc

    ";

   
    $builder=static::buildquery($where_def,$where,$query);
    $query=$builder['query'];
    
    $where_def=$builder['where'];

    return (array('query'=>$query,'where_def'=>$where_def,'title'=>'Program Kegiatan Per-Provinsi dan Kota kabupaten','subtitle'=>'Bangda Kemendagri','next_link'=>'per_kota'));

  }

   public function per_pn(){

     $where_def=[
    	['a.kode_kegiatan',' is not  ','null',''],
    	['a.tag_air_minum',' =  ',true,'boolean']
    ];

    
    $where=''!=(request('where'))?request('where'):[];


    $query="
      select DISTINCT(a.id_pn3) as key, Concat('(KP) ',pn.kegiatan_prioritas) as key_name,
       CONCAT('[[',
        '`a.id_pn3`',
        ',',
        '` =`',
        ',','`',
        a.id_pn3,
        '`',
        ',',
        '`numberic`]]'
        ) as where_add,

      count(a.kode_kegiatan) as data_jumlah_kegiatan,
      count(DISTINCT(a.kode_program)) as data_jumlah_program

      from program_kegiatan_sipd2 as a
      join master_pn as pn on a.id_pn3 = pn.id
      
      {{where}} 

      group by (a.id_pn3,pn.kegiatan_prioritas) order by count(a.kode_kegiatan) desc

    ";


   
    $builder=static::buildquery($where_def,$where,$query);
    $query=$builder['query'];
    
    $where_def=$builder['where'];

    return (array('query'=>$query,'where_def'=>$where_def,'title'=>'Program Kegiatan Per-Provinsi dan Kota kabupaten','subtitle'=>'Bangda Kemendagri','next_link'=>'per_kota'));

  }


   public function per_spm(){

     $where_def=[
    	['a.kode_kegiatan',' is not  ','null',''],
    	['a.tag_air_minum',' =  ',true,'boolean']
    ];

    
    $where=''!=(request('where'))?request('where'):[];


    $query="
      select DISTINCT(a.id_spm) as key, Concat('',spm.spm) as key_name,
       CONCAT('[[',
        '`a.id_spm`',
        ',',
        '` =`',
        ',','`',
        a.id_spm,
        '`',
        ',',
        '`numberic`]]'
        ) as where_add,

      count(a.kode_kegiatan) as data_jumlah_kegiatan,
      count(DISTINCT(a.kode_program)) as data_jumlah_program

      from program_kegiatan_sipd2 as a
      join master_spm as spm on a.id_spm = spm.id
      
      {{where}} 

      group by (a.id_spm,spm.spm) order by count(a.kode_kegiatan) desc

    ";


   
    $builder=static::buildquery($where_def,$where,$query);
    $query=$builder['query'];
    
    $where_def=$builder['where'];

    return (array('query'=>$query,'where_def'=>$where_def,'title'=>'Program Kegiatan Per-Provinsi dan Kota kabupaten','subtitle'=>'Bangda Kemendagri','next_link'=>'per_kota'));

  }

   public function per_sdgs(){

     $where_def=[
    	['a.kode_kegiatan',' is not  ','null',''],
    	['a.tag_air_minum',' =  ',true,'boolean']
    ];

    
    $where=''!=(request('where'))?request('where'):[];


    $query="
      select DISTINCT(a.id_sdgs) as key, Concat('',sdgs.sdgs) as key_name,
       CONCAT('[[',
        '`a.id_sdgs`',
        ',',
        '` =`',
        ',','`',
        a.id_sdgs,
        '`',
        ',',
        '`numberic`]]'
        ) as where_add,

      count(a.kode_kegiatan) as data_jumlah_kegiatan,
      count(DISTINCT(a.kode_program)) as data_jumlah_program

      from program_kegiatan_sipd2 as a
      join master_sdgs as sdgs on a.id_sdgs = sdgs.id
      
      {{where}} 

      group by (a.id_sdgs,sdgs.sdgs) order by count(a.kode_kegiatan) desc

    ";


   
    $builder=static::buildquery($where_def,$where,$query);
    $query=$builder['query'];
    
    $where_def=$builder['where'];

    return (array('query'=>$query,'where_def'=>$where_def,'title'=>'Program Kegiatan Per-Provinsi dan Kota kabupaten','subtitle'=>'Bangda Kemendagri','next_link'=>'per_kota'));

  }





  public function program_kegiatan_get_data_chart($link=''){
    $data=[];
    $dom=request('id_dom');
    $map=''!=request('map')?request('map'):[];
    $title=request('title');

    $next_link='';
    if($link==''){
      $link=$map[0];
    }


    $exits_key=(int) array_search($link,$map);

    if(isset($map[$exits_key+1])){

      $next_link=$map[$exits_key+1];
    }else{
      $next_link='';
    }
    

    switch ($link) {
    case 'per_provinsi':
        $data=static::per_provinsi();
        $title ='Program Kegiatan Per-Provinsi dan Kota kabupaten '.$title;
        break;
    case 'per_kota':
        $data=static::per_kota();
        $title ='Program Kegiatan Per-Daerah '.$title;

        break;


    case 'per_urusan':
        $data=static::per_urusan();
        $title ='Program Kegiatan Per-Urusan '.$title;


        break;
    case 'per_sub_urusan':
        $data=static::per_sub_urusan();
        $title ='Program Kegiatan Tingkat Sub Urusan '.$title;


        break;
     case 'per_program':
        $data=static::per_program();
        $title ='Program Kegiatan Tingkat Program '.$title ;
        break;

     case 'per_nspk':
        $data=static::per_nspk();
        $title ='Program Kegiatan  NSPK '.$title ;

        break;

      case 'per_pn':
        $data=static::per_pn();
        $title ='Program Kegiatan  PN  '.$title ;


        break;
      
     case 'per_spm':
        $data=static::per_spm();
        $title ='Program Kegiatan  SPM  '.$title ;


        break;
     
      case 'per_sdgs':
        $data=static::per_spm();
        $title ='Program Kegiatan  SDGS  '.$title ;
        break;
      
      default:
        # code...
        break;
    }

    $data_d=query($this,$data['query']);

    
    $title=''!=$title?$title:$data['title'];

    $data_view=array('id_chart'=>('id_chart_'.date('h_i_s').((int)rand(0,100))),'dom'=>($dom.'_'.date('h_i_s')),'data'=>['data'=>$data_d,'where_def'=>$data['where_def']],'title'=>$title,'subtitle'=>$data['subtitle'],'next_link'=>$next_link,'map'=>$map); 
    return  view('component.themchart',($data_view));

  }

}