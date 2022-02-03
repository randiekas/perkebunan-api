<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aplikasi extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if($this->session->userdata("isLogin")){
			$this->load->view('aplikasi/index');
		}else{
			$this->load->view('masuk');
		}
		
	}
	public function form(){
		if($this->session->userdata("isLogin")){
			if($this->uri->segment(3)){
				$this->db->where("id", $this->uri->segment(3));
				$data["detail"]	= $this->db->get("uploads")->last_row();
			}else{
				$data["detail"]	= [];
			}
			$this->load->view('aplikasi/form', $data);
		}else{
			$this->load->view('masuk');
		}
	}
	public function hapus($id){
		if($this->session->userdata("isLogin")){
			$this->db->where("id", $id);
			$this->db->delete("uploads");
			?>
			<script>
				alert("Data berhasil dihapus")
				window.location.href="<?=base_url("index.php/aplikasi")?>"
			</script>
			<?php
		}else{
			$this->load->view('masuk');
		}
	}
	public function simpan(){
		if($this->session->userdata("isLogin")){
			$insert["nama"]		= $this->input->post("nama");
			$insert["nip"]		= $this->input->post("nip");
			$insert["dibuat"]	= date("Y-m-d H:i:s");

			// upload file
			$config['upload_path']          = './uploads/';
			$config['allowed_types']		= '*';
			if($_FILES["file"]["name"]!=""){
				
				$this->load->library('upload', $config);
			
				if ( ! $this->upload->do_upload('file'))
				{
						
						echo $this->upload->display_errors();
						exit();
				}
				else
				
				$file = $this->upload->data();
				
				$insert["file"]		= $file["file_name"];
			}else{
				$insert["file"]		= $this->input->post("file_sebelumnya");
			}
			

			// jika ada id nya maka di update, jika tidak maka di insert
			if($this->input->post("id")!=""){
				$this->db->where("id", $this->input->post("id"));
				$this->db->update("uploads", $insert);
			}else{
				$this->db->insert("uploads", $insert);
			}
			
			?>
			<script>
				alert("Data berhasil disimpan")
				window.location.href="<?=base_url("index.php/aplikasi")?>"
			</script>
			<?php
		}else{
			$this->load->view('masuk');
		}
	}
	public function masuk()
	{
		if($this->input->post("username")==="admin" && $this->input->post("password")==="abcd1234"){
			$session["isLogin"]	= true;
			$this->session->set_userdata($session);
			redirect("aplikasi");
		}else{
			?>
			<script>
				alert("Maaf username dan password anda salah")
				window.history.back()
			</script>
			<?php
		}
	}
}
