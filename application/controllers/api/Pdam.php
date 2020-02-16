<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdam extends CI_Controller {

	public function dashboard($tahun=2020){
		$query='select p.*,(select d.nama from master_daerah as d where d.id=p.kode_daerah limit 1) as nama_daerah,
		(select d.nama from master_daerah as d where d.id=left(p.kode_daerah,2) limit 1) as nama_provinsi
		 from pdam_profile as p order by traffic_penilaian_nuwas ASC   limit 3';
		$data_penurunan=query($this,$query);
		$ids=[0];
		foreach ($data_penurunan as $key => $value) {
			$ids[]=$value['id'];
		}
		$query='select p.*,(select d.nama from master_daerah as d where d.id=p.kode_daerah limit 1) as nama_daerah,
		(select d.nama from master_daerah as d where d.id=left(p.kode_daerah,2) limit 1) as nama_provinsi
		
		 from pdam_profile as p where id not in ('.implode(',', $ids).') order by traffic_penilaian_nuwas DESC  limit 3';
		$data_kenaikan=query($this,$query);

		return view('api.pdam.dashboard',['penurunan'=>$data_penurunan,'kenaikan'=>$data_kenaikan]);

	}


	public function trafik($kode_daerah){

		$query="select s.*,(select nilai from sat_detail where id_sat=s.id and id_q='1.1')::numeric as nilai_kinerja_total,(select nilai from sat_detail where id_sat=s.id and id_q='1.2')::numeric as nilai_keuangan,
		(select nilai from sat_detail where id_sat=s.id and id_q='1.4')::numeric as nilai_operasioanal,
		(select nilai from sat_detail where id_sat=s.id and id_q='1.3')::numeric as nilai_pelayanan,
		(select nilai from sat_detail where id_sat=s.id and id_q='1.5')::numeric as nilai_sdm


		 from sat as s where s.kode_daerah='".$kode_daerah."'::text order by CONCAT(s.period_tahun ,s.period_bulan)::numeric DESC,s.tanggal_masukan desc limit ".request('period');
		$data=query($this,$query);


		$data_return=['data'=>[],
		'chart'=>[
			'category'=>[],
			'data'=>[
				0=>[
					'name'=>'Penilaian NUWSP',
					'data'=>[]
				],
				1=>[
					'name'=>'Kinerja Total',
					'data'=>[]
				],
				2=>[
					'name'=>'Aspek Keuangan',
					'data'=>[]
				],
				3=>[
					'name'=>'Aspek Operasional',
					'data'=>[]
				],
			
				4=>[
					'name'=>'Aspek Pelayanan',
					'data'=>[]
				],
				5=>[
					'name'=>'Aspek SDM',
					'data'=>[]
				],
				
			]
		]

		];
		$period_tahun=0;
		$period_bulan=0;

		for($i=0; $i<request('period');$i++){
			if(isset($data[$i])){
				$data_return['data'][]=array(
					'kode_daerah'=>$data[$i]['kode_daerah'],
					'periode'=>$data[$i]['period_tahun'].'-'.$data[$i]['period_bulan'],
					'penilaian_nuwas'=>(float)getNilai($data[$i]['penilaian_nuwas']),
					'kinerja_total'=>(float)$data[$i]['nilai_kinerja_total'],
					'keuangan'=>0,
					'oprasional'=>0,
					'SDM'=>0,
					'pelayanan'=>0,
				);

				$period_tahun=$data[$i]['period_tahun'];
				$period_bulan=$data[$i]['period_bulan'];

				$data_return['chart']['category'][]=DateTime::createFromFormat('Y-m-d',$period_tahun.'-'.(strlen($period_bulan.'')>1?$period_bulan:'0'.$period_bulan).'-01')->format('Y-F');
				$data_return['chart']['data'][0]['data'][]=(int)getNilai($data[$i]['penilaian_nuwas']);
				
				$data_return['chart']['data'][1]['data'][]=(float)number_format((float)$data[$i]['nilai_kinerja_total'],1,',','.');
				$data_return['chart']['data'][2]['data'][]=(float)number_format((float)$data[$i]['nilai_keuangan'],1,',','.');
				$data_return['chart']['data'][3]['data'][]=(float)number_format((float)$data[$i]['nilai_operasioanal'],1,',','.');

				$data_return['chart']['data'][4]['data'][]=(float)number_format((float)$data[$i]['nilai_pelayanan'],1,',','.');
;
				$data_return['chart']['data'][5]['data'][]=(float)number_format((float)$data[$i]['nilai_sdm'],1,',','.');

				

			}else{
				if(($period_bulan-1)==0 ){
					$period_bulan=12;
					$period_tahu-=1;
				}else{
					$period_bulan-=1;
				}

				$data_return['data'][]=array(
					'kode_daerah'=>$kode_daerah,
					'periode'=>$period_tahun.'-'.$period_bulan,
					'penilaian_nuwas'=>0,
					'kinerja_total'=>0,
					'keuangan'=>0,
					'oprasional'=>0,
					'sdm'=>0,
					'pelayanan'=>0,
				);


				$data_return['chart']['category'][]=DateTime::createFromFormat('Y-m-d',$period_tahun.'-'.(strlen($period_bulan.'')>1?$period_bulan:'0'.$period_bulan).'-01')->format('Y-F');
				
				$data_return['chart']['data'][0]['data'][]=(int)getNilai(0);
				
				$data_return['chart']['data'][1]['data'][]=0;
				$data_return['chart']['data'][2]['data'][]=0;
				$data_return['chart']['data'][3]['data'][]=0;

				$data_return['chart']['data'][4]['data'][]=0;
				$data_return['chart']['data'][5]['data'][]=0;


			}
		}

		return view('api.pdam.trafik_chart',['data'=>$data_return]);


	}

}