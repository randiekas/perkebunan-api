<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {
	public function __construct(){
		header( 'Access-Control-Allow-Origin: *' );
		if ( $_SERVER[ 'REQUEST_METHOD' ] == "OPTIONS" )
		{
			log_message( 'debug', 'Configure webserver to handle OPTIONS-request without invoking this script' );
			header( 'Access-Control-Allow-Credentials: true' );
			header( 'Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS' );
			header( 'Access-Control-Allow-Headers: ACCEPT, ORIGIN, X-REQUESTED-WITH, CONTENT-TYPE, AUTHORIZATION' );
			header( 'Access-Control-Max-Age: 86400' );
			header( 'Content-Length: 0' );
			header( 'Content-Type: text/plain' );
			exit ;
		}
		parent::__construct();
	}
	public function json($response){
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($response));
	}
	public function index(){
		$response["status"]		= true;
		$response["message"]	= "1.0.1";
		$this->json($response);
	}
	public function perusahaanTriwulanUpdate($id_perusahaan){
		$post 					= json_decode($this->security->xss_clean($this->input->raw_input_stream));
		$tahun					= $post->tahun;
		$triwulan				= $post->triwulan;
		$status					= $post->status;
		$jwt					= jwt::decode($this->input->get_request_header("Authorization"), $this->config->item("jwt_key", false));
		if($jwt->tipe=="admin"){

			$data[$triwulan]	= $status;
			$this->db->select("id");
			$this->db->where("id_perusahaan", $id_perusahaan);
			$this->db->where("tahun", $tahun);
			$cek 				= $this->db->get("perusahaan_triwulan");
			if($cek->num_rows()==0){
				$data["id_perusahaan"]	= $id_perusahaan;
				$data["tahun"]			= $tahun;
				$data["dibuat"]			= date("Y-m-d H:i:s");
				$this->db->insert("perusahaan_triwulan", $data);
			}else{
				$id						= $cek->last_row()->id;
				$data["diubah"]			= date("Y-m-d H:i:s");
				$this->db->update("perusahaan_triwulan", $data);
			}

		}else if($jwt->tipe=="perusahaan"){
			$id_perusahaan		= $jwt->id_perusahaan;
			$data[$triwulan]	= $status;
			$this->db->select("id");
			$this->db->where("id_perusahaan", $id_perusahaan);
			$this->db->where("tahun", $tahun);
			$cek 				= $this->db->get("perusahaan_triwulan");
			if($cek->num_rows()==0){
				$data["id_perusahaan"]	= $id_perusahaan;
				$data["tahun"]			= $tahun;
				$data["dibuat"]			= date("Y-m-d H:i:s");
				$this->db->insert("perusahaan_triwulan", $data);
			}else{
				$id						= $cek->last_row()->id;
				$data["diubah"]			= date("Y-m-d H:i:s");
				$this->db->update("perusahaan_triwulan", $data);
			}
		}
		$response["status"]		= true;
		$response["message"]	= "Data berhasil diubah";	
		$this->json($response);
	}
	public function perusahaanTriwulan($tahun){

		$jwt					= jwt::decode($this->input->get_request_header("Authorization"), $this->config->item("jwt_key", false));
		$response["status"]		= false;
		$response["message"]	= "Unauthorized";	
		if($jwt->tipe=="admin"){
			$response["data"]	= $this->db->query("
									select 
										perusahaan.id,
										perusahaan.nama,
										perusahaan.alamat_kantor_pusat,
										perusahaan.lokasi_kebun_lat,
										perusahaan.lokasi_kebun_lng,
										perusahaan.dibuat,
										perusahaan.diubah,
										perusahaan_triwulan.triwulan1,
										perusahaan_triwulan.triwulan2,
										perusahaan_triwulan.triwulan3,
										perusahaan_triwulan.triwulan4
									from 
										perusahaan
									left join
										perusahaan_triwulan
											on perusahaan_triwulan.id_perusahaan = perusahaan.id
											and perusahaan_triwulan.tahun = ".$tahun."
									")->result();
			$response["status"]		= true;
			$response["message"]	= "";	

		}
		
		$this->json($response);
	}
	public function tambah($table){
		$data			= [];
		$post 			= json_decode($this->security->xss_clean($this->input->raw_input_stream));
		foreach($post as $key => $val){  
			$data[$key]	= $val;
		} 
		if(isset($_GET['id_perusahaan'])){
			
			$jwt					= jwt::decode($this->input->get_request_header("Authorization"), $this->config->item("jwt_key", false));
			if($jwt->tipe=="perusahaan"){
				$data['id_perusahaan']	=	$jwt->id_perusahaan;
			}else{
				$data['id_perusahaan']	= $_GET['id_perusahaan'];
			}
		}
		$data["dibuat"]	= date("Y-m-d H:i:s");
		$execute				= $this->db->insert($table, $data);
		$response["status"]		= $execute;
		$response["message"]	= "Data berhasil ditambahkan";	
		$this->json($response);
	}
	public function ubah($table, $id){
		$data			= [];
		$post 			= json_decode($this->security->xss_clean($this->input->raw_input_stream));
		foreach($post as $key => $val){  
			$data[$key]	= $val;
		} 
		$data["diubah"]	= date("Y-m-d H:i:s");
		if($table=='perusahaan'){
			$jwt				= jwt::decode($this->input->get_request_header("Authorization"), $this->config->item("jwt_key", false));
			if($jwt->tipe=='perusahaan'){
				$id					= $jwt->id_perusahaan;
			}
		}
		$this->db->where("id", $id);
		$execute				= $this->db->update($table, $data);
		$response["status"]		= $execute;
		$response["message"]	= "Data berhasil diubah";	
		$this->json($response);
	}
	public function hapus($table, $id){
		$this->db->where("id", $id);
		$execute				= $this->db->delete($table);
		$response["status"]		= $execute;
		$response["message"]	= "Data berhasil dihapus";	
		$this->json($response);
	}
	public function data($table, $field=null, $value=null){
		if($field!=null){
			if($field=='id_perusahaan'){
				$jwt					= jwt::decode($this->input->get_request_header("Authorization"), $this->config->item("jwt_key", false));
				if($jwt->tipe=="perusahaan"){
					$value		=	$jwt->id_perusahaan;
				}
			}
			$this->db->where($field, $value);
		}

		if($this->input->get("field1")){
			$this->db->where($this->input->get("field1"), $this->input->get("value1"));
		}
		
		$execute				= $this->db->get($table);
		$response["status"]		= true;
		$response["message"]	= "";	
		$response["data"]		= $execute->result();	
		$this->json($response);
	}
	public function detil($table, $id, $field="id"){
		$jwt					= jwt::decode($this->input->get_request_header("Authorization"), $this->config->item("jwt_key", false));
		
		if($jwt->tipe=="perusahaan" && $table!="pengumuman"){
			$id	=	$jwt->id_perusahaan;
		}

		if($this->input->get("field1")){
			$this->db->where($this->input->get("field1"), $this->input->get("value1"));
		}

		$this->db->where($field, $id);
		
		$execute				= $this->db->get($table);
		$response["status"]		= true;
		$response["message"]	= "";	
		$response["data"]		= $execute->last_row();	
		$this->json($response);
	}
	public function query($tahun, $tabel, $field=1){
		$query = $this->db->query("
		select 
				sum(if(triwulan='20211', ".$field.", 0)) as triwulan1,
				sum(if(triwulan='20212', ".$field.", 0)) as triwulan2,
				sum(if(triwulan='20213', ".$field.", 0)) as triwulan3,
				sum(if(triwulan='20214', ".$field.", 0)) as triwulan4
			from
				".$tabel."
			where 
				triwulan like '".$tahun."%'
		");
		return $query->last_row();
	}
	public function dasborPerusahaan($tahun){
		$data["total_perusahaan"]	= $this->db->query("select count(id) as total from perusahaan")->last_row()->total ;
		$data["lokasi"]				= $this->query($tahun, 'perusahaan_legalitas', 'lokasi_luas');
		$data["ppub"]				= $this->query($tahun, 'perusahaan_legalitas', 'ppub_luas');
		$data["ipl"]				= $this->query($tahun, 'perusahaan_legalitas', 'ipl_luas');
		$data["koperasi"]			= $this->query($tahun, 'perusahaan_kerjasama_kemitraan', 1);
		$data["koperasi_tm"]		= $this->query($tahun, 'perusahaan_kerjasama_kemitraan', 'realisasi_luas_tm');
		$data["koperasi_tbm"]		= $this->query($tahun, 'perusahaan_kerjasama_kemitraan', 'realisasi_luas_tbm');
		$data["pabrik"]				= $this->query($tahun, 'perusahaan_pembangunan_pabrik', 'realisasi');
		$data["inti_tbs"]			= $this->query($tahun, 'perusahaan_produksi', 'inti_tbs');
		$data["plasma_tbs"]			= $this->query($tahun, 'perusahaan_produksi', 'plasma_tbs');

		$response["status"]			= true;
		$response["message"]		= "";	
		$response["data"]			= $data;	
		$this->json($response);
	}
	public function upload(){
		$config = array(
            'upload_path'   => './uploads/',
            'allowed_types' => '*',
        );

        $this->load->library('upload', $config);
		$file				= "";
		if ($this->upload->do_upload('files')) {
			$response["status"]			= true;
			$response["message"]		= "";	
			$file = "/uploads/".$this->upload->data()["file_name"];
		}else{
			$response["status"]			= false;
			$file = $this->upload->display_errors();
		}
		
		$response["message"]		= "";	
		$response["data"]			= $file;	
		$this->json($response);
	}
}
