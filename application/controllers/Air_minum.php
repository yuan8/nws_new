<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Air_minum extends CI_Controller {

  public function index(){


    $query="select p.nama as nama_daerah, min(p.id_provinsi) as id, sum(a.anggaran) as anggaran from provinsi as p
    join program_kegiatan_sipd2 as a  on a.kode_daerah ilike (p.id_provinsi||'%')
    GROUP BY p.id_provinsi  ORDER BY sum(a.anggaran) DESC
    ";

    $query="select min(p.nama) as nama_daerah,(a.kode_daerah) as id,CASE WHEN (length(a.kode_daerah)=2) then 1 else 0  end as tag_provinsi, sum(a.anggaran) as anggaran 
            from program_kegiatan_sipd2 as a
            join  view_daerah as p on a.kode_daerah = p.id
            where a.kode_daerah ilike (32||'%')
            GROUP BY a.kode_daerah  ORDER BY sum(a.anggaran) DESC
    ";

    $PROVINSI='32';
    
    $query="select
      min(p.nama) as nama_daerah,
      min(p.id) as kode_daerah,
      (CASE WHEN (sum(a.anggaran) IS NOT NULL) THEN sum(a.anggaran) ELSE 0 END)  as anggaran 
      from view_daerah as p
      left join program_kegiatan_sipd2 as a on a.kode_daerah=p.id
      where p.id ilike (".$PROVINSI."||'%')
      group by p.id  
      ORDER BY (CASE WHEN (sum(a.anggaran) IS NOT NULL) THEN sum(a.anggaran) ELSE 0 END) DESC
    ";

    $query="select min(a.kode_daerah) as kode_daerah ,min(u.nama) as nama_urusan, min(u.id) as id_urusan, sum(a.anggaran) as anggaran from master_urusan as u
    left join program_kegiatan_sipd2 as a on a.id_urusan=u.id
    where a.kode_daerah=".$PROVINSI."::text  
    GROUP BY u.id
    ORDER BY (CASE WHEN (sum(a.anggaran) IS NOT NULL) THEN sum(a.anggaran) ELSE 0 END)  DESC

    ";


    $KODEURUSAN=3;

    $query="select min(a.kode_daerah) as kode_daerah ,min(su.nama) as nama_urusan, min(su.id) as id_sub_urusan,(CASE WHEN (sum(a.anggaran) IS NOT NULL) THEN sum(a.anggaran) ELSE 0 END)  as anggaran from master_sub_urusan as su
    left join program_kegiatan_sipd2 as a on a.id_sub_urusan=su.id
    where a.kode_daerah=".$PROVINSI."::text  and a.id_urusan=".$KODEURUSAN."
    GROUP BY su.id
    ORDER BY (CASE WHEN (sum(a.anggaran) IS NOT NULL) THEN sum(a.anggaran) ELSE 0 END)  DESC
    ";


    $KODEURUSAN=3;

    $query="select min(a.kode_daerah) as kode_daerah ,min(su.nama) as nama_urusan, min(su.id) as id_sub_urusan,(CASE WHEN (sum(a.anggaran) IS NOT NULL) THEN sum(a.anggaran) ELSE 0 END)  as anggaran from master_sub_urusan as su
    left join program_kegiatan_sipd2 as a on a.id_sub_urusan=su.id
    where a.kode_daerah=".$PROVINSI."::text  and a.id_urusan=".$KODEURUSAN."
    GROUP BY su.id
    ORDER BY (CASE WHEN (sum(a.anggaran) IS NOT NULL) THEN sum(a.anggaran) ELSE 0 END)  DESC
    ";

    $query2='select 
    min(kode_daerah) as kode_daerah,
    sum(anggaran) as anggaran,
    (select nama from provinsi where id_provinsi=a.kode_daerah) as nama_daerah
    from program_kegiatan_sipd2 as a where
    length(kode_daerah)=(4|2) group by kode_daerah order by sum(anggaran) desc';

    // dd(query($this,$query));



    return view('pages.air_minum');
  

  }



  public static function build($data){

    $data_return=[];
    foreach ($data as $key => $d) {
      $data_return[$d['key_id']]['jumlah_program']=isset($data_return[$d['key_id']]['jumlah_program'])?$data_return[$d['key_id']]['jumlah_program']+=((float) $d['jumlah_program']):((float) $d['jumlah_program']);
      $data_return[$d['key_id']]['jumlah_kegiatan']=isset($data_return[$d['key_id']]['jumlah_kegiatan'])?$data_return[$d['key_id']]['jumlah_kegiatan']+=((float) $d['jumlah_kegiatan']):((float) $d['jumlah_kegiatan']);
      $data_return[$d['key_id']]['nama']=isset($data_return[$d['key_id']]['nama'])?$data_return[$d['key_id']]['nama']:((string) $d['key_name']);
    }

    $data_return2=[];
    foreach ($data_return as $x => $value) {
      if(isset($value['nama'])){
        $data_return2['categories'][]=$value['nama'];
      }else{
        if(isset($value['name'])){
          $data_return2['categories'][]='Unknow';
        }
      }
      foreach ($value as $key => $v) {
        if(in_array($key,['jumlah_program','jumlah_kegiatan'])){
          $data_return2['series'][$key]['name']=$key;
          $data_return2['series'][$key]['data'][]=$v;
        }
      }

      if(count($data_return2['series'])>0){
        $key=0;
        foreach ($data_return2['series'] as $i => $value) {
          $data_return2['series'][$key]=$value;
          unshift($data_return2['series'][$i]);
          $key++;
        }
      }


    }

    return $data_return2;
  }

  public function from_urusan($where=[]){
    $query="select
      a.uraian_kode_program_daerah,
      u.nama as key_name,
      a.id_urusan as key_id,
      a.kode_program,
      count(DISTINCT(a.kode_program)) as jumlah_program,
      count(DISTINCT(a.kode_kegiatan)) as jumlah_kegiatan
      from program_kegiatan_sipd2 as a
      left join master_urusan as u on u.id = a.id_urusan
      where  a.kode_program is not null {{where}}  group by u.nama, a.kode_daerah, a.id_urusan , a.kode_program,a.uraian_kode_program_daerah  ";
      if($where!=[]){
      }else{
        $query=str_replace('{{where}}','',$query);
      }

      $data=query($this,$query);

      return_json(static::build($data));


  }
  public function form_sub_urusan($where=[]){
    $query="select
      a.uraian_kode_program_daerah,
      u.nama as key_name,
      a.id_sub_urusan as key_id,
      a.kode_program,
      count(DISTINCT(a.kode_program)) as jumlah_program,
      count(DISTINCT(a.kode_kegiatan)) as jumlah_kegiatan
      from program_kegiatan_sipd2 as a
      left join master_sub_urusan as u on u.id = a.id_sub_urusan
      where  a.kode_program is not null {{where}}   group by u.nama,a.kode_daerah, a.id_sub_urusan, a.kode_program,a.uraian_kode_program_daerah  ";
      if($where!=[]){
      }else{
        $query=str_replace('{{where}}','',$query);
      }

      $data=query($this,$query);
      return_json(static::build($data));
  }

  public function from_daerah($where=[]){
    $query="select
      d.nama,
      a.kode_daerah as kode_daerah,
      a.kode_program,
      count(DISTINCT(a.kode_program)) as jumlah_program,
      count(DISTINCT(a.kode_kegiatan)) as jumlah_kegiatan
      from program_kegiatan_sipd2 as a
      left join provinsi as d on d.id_provinsi = a.kode_daerah
      where  a.kode_program is not null {{where}}  group by d.nama, a.kode_daerah order by count(DISTINCT(a.kode_kegiatan)) desc ";

      if($where!=[]){
      }else{
        $query=str_replace('{{where}}','',$query);
      }

      $data=query($this,$query);
      return_json(static::build($data));


  }


}
