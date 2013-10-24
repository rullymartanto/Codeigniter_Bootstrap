<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class app_admin_album extends CI_Controller {

	public function index()
	{
		$cek = $this->session->userdata('logged_in');
		if(empty($cek))
		{
			header('location:'.base_url().'app_admin');
		}
		else
		{
			$page=$this->uri->segment(3);
			$limit=$this->config->item('limit_data');
			if(!$page):
			$offset = 0;
			else:
			$offset = $page;
			endif;
			
			$d['tot'] = $offset;
			$tot_hal = $this->db->query("select * from tbl_album_galeri");
			$config['base_url'] = base_url() . 'app_admin_album/index/';

			$config['total_rows'] = $tot_hal->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 3;
			$config['first_link'] = 'Awal';
			$config['last_link'] = 'Akhir';
			$config['next_link'] = 'Selanjutnya';
			$config['prev_link'] = 'Sebelumnya';
			$this->pagination->initialize($config);
			$d["paginator"] =$this->pagination->create_links();
			
			$d['data_get'] = $this->db->query("select * from tbl_album_galeri order by id_album desc LIMIT ".$offset.",".$limit."");
			
			$this->load->view("app_admin/global/header",$d);
			$this->load->view("app_admin/album/home");
			$this->load->view("app_admin/global/footer");
			
		}
	}
	 
	public function tambah()
	{
		$cek = $this->session->userdata('logged_in');
		if(empty($cek))
		{
			header('location:'.base_url().'app_admin');
		}
		else
		{
	
			
			$config['base_url'] = base_url() . 'app_admin_album/index/';
			
			$d['id_param'] = "";
			$d['nama_album'] = "";
			$d['st'] = "tambah";
			$d['id_param'] = "";
			
			$this->load->view("app_admin/global/header",$d);
			$this->load->view("app_admin/album/input",$d);
			$this->load->view("app_admin/global/footer");

		}
	} 
	 
	public function edit()
	{	
		$cek = $this->session->userdata('logged_in');
		if(empty($cek))
		{
			header('location:'.base_url().'app_admin');
		}
		else
		{
			$id_get['id_album'] = $this->uri->segment(3);
			
			$dt = $this->db->get_where("tbl_album_galeri",$id_get)->row();
			$d['id_param'] = $dt->id_album;
			$d['nama_album'] = $dt->nama_album;
			$d['data_content'] = $this->db->get("tbl_album_galeri");
			
			$d['st'] = "edit";
			
			$this->load->view("app_admin/global/header",$d);
			$this->load->view("app_admin/album/edit",$d);
			$this->load->view("app_admin/global/footer");
		}
	}
	 
	public function detail()
	{
		$cek = $this->session->userdata('logged_in');
		if(empty($cek))
		{
			header('location:'.base_url().'app_admin');
		}
		else
		{
			$id_get['id'] = $this->uri->segment(3);
			$dt = $this->db->get_where("tbl_menu",$id_get)->row();
			$d['id_param'] = $dt->id;
			$d['title'] = $dt->title;
			$d['id_parent'] = $dt->id_parent;
			$d['level'] = $dt->level;
			
			$this->load->view("app_admin/menu/detail",$d);
		}
	}

	public function simpan()
	{
		if($this->session->userdata('logged_in')!="")
		{
			$data=array();
			$now = time();
			$id['id_album'] = $this->input->post("id_param");
			$data["nama_album"]=$this->input->post('nama_album');
			
					$this->db->insert("tbl_album_galeri",$data);
					echo "<meta http-equiv='refresh' content='0; url=".base_url()."app_admin_album/'>";
				
				
		}
		else
		{
			header('location:'.base_url().'');
		}
	}
	
	public function update()
	{
		if($this->session->userdata('logged_in')!="")
		{
			$this->form_validation->set_rules('nama_album', 'nama_album', 'trim|required');
				$id['id_album'] = $this->input->post("id_param");
				$upd['nama_album'] = $this->input->post("nama_album");
			
				$this->db->update("tbl_album_galeri",$upd,$id);
				echo "<meta http-equiv='refresh' content='0; url=".base_url()."app_admin_album/'>";
				
		}
		else
		{
			header('location:'.base_url().'');
		}
	}

	public function cari()
	{
		if($this->session->userdata('logged_in')!="")
		{
			if($this->input->post("cari")=="")
			{
				$kata = $this->session->userdata('kata');
			}
			else
			{
				$sess_data['kata'] = $this->input->post("cari");
				$this->session->set_userdata($sess_data);
				$kata = $this->session->userdata('kata');
			}
			
			$page=$this->uri->segment(3);
			$limit=$this->config->item('limit_data');
			if(!$page):
			$offset = 0;
			else:
			$offset = $page;
			endif;
			
			$d['tot'] = $offset;
			$tot_hal = $this->db->query("select * from tbl_kabupaten where nama_kabupaten like '%".$kata."%'");
			$config['base_url'] = base_url() . 'app_admin_kabupaten/cari/';
			$config['total_rows'] = $tot_hal->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 3;
			$config['first_link'] = 'Awal';
			$config['last_link'] = 'Akhir';
			$config['next_link'] = 'Selanjutnya';
			$config['prev_link'] = 'Sebelumnya';
			$this->pagination->initialize($config);
			$d["paginator"] =$this->pagination->create_links();
			
			$d['data_get'] = $this->db->query("select * from tbl_kabupaten where nama_kabupaten like '%".$kata."%' LIMIT ".$offset.",".$limit."");
			
			$this->load->view("app_admin/global/header",$d);
			$this->load->view("app_admin/kabupaten/home");
			$this->load->view("app_admin/global/footer");
		}
		else
		{
			header('location:'.base_url().'');
		}
	}

	public function hapus()
	{
		if($this->session->userdata('logged_in')!="")
		{
			$id['id_album'] = $this->uri->segment(3);
			$this->db->delete("tbl_album_galeri",$id);
			header('location:'.base_url().'app_admin_album');
		}
		else
		{
			header('location:'.base_url().'');
		}
	}

	public function hapus_multiple()
	{
		if($this->session->userdata('logged_in')!="")
		{
			$id = $this->input->post('id_album');
			$query = $this->db->query("delete from tbl_menu where id ".$id."");
			if($query){
				echo $id;
			}
			else{
				echo 0;
			}
		}
		else
		{
			header('location:'.base_url().'');
		}
	}
}

/* End of file app_admin_kabupaten.php */
/* Location: ./application/controllers/app_admin_kabupaten.php */