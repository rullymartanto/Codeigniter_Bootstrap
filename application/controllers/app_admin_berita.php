<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class app_admin_berita extends CI_Controller {

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
			$tot_hal = $this->db->query("select * from tbl_berita");
			$config['base_url'] = base_url() . 'app_admin_berita/index/';

			$config['total_rows'] = $tot_hal->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 3;
			$config['first_link'] = 'Awal';
			$config['last_link'] = 'Akhir';
			$config['next_link'] = 'Selanjutnya';
			$config['prev_link'] = 'Sebelumnya';
			$this->pagination->initialize($config);
			$d["paginator"] =$this->pagination->create_links();
			
			$d['data_get'] = $this->db->query("select * from tbl_berita order by id_berita desc LIMIT ".$offset.",".$limit."");
			
			$this->load->view("app_admin/global/header",$d);
			$this->load->view("app_admin/berita/home");
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
	
			
			$config['base_url'] = base_url() . 'app_admin_berita/index/';
			
			$d['id_param'] = "";
			$d['judul'] = "";
			$d['isi'] = "";
			$d['st'] = "tambah";
			$d['id_param'] = "";
			
			$this->load->view("app_admin/global/header",$d);
			$this->load->view("app_admin/berita/input",$d);
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
			$id_get['id_berita'] = $this->uri->segment(3);
			
			$dt = $this->db->get_where("tbl_berita",$id_get)->row();
			$d['id_param'] = $dt->id_berita;
			$d['judul'] = $dt->judul_berita;
			$d['isi'] = $dt->isi;
			$d['data_content'] = $this->db->get("tbl_berita");
			
			$d['st'] = "edit";
			
			$this->load->view("app_admin/global/header",$d);
			$this->load->view("app_admin/berita/edit",$d);
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
			$id['id_berita'] = $this->input->post("id_param");
			$data["judul_berita"]=$this->input->post('judul');
			$isi=$this->input->post('isi');
			$data["isi"] = preg_replace('#(href|src)="(.*?)/media#', '$1="'.base_url().'media', $isi);
			$data["tanggal"] = date("Y-m-d H:i:s",$now);
			$data["author"] =  $this->session->userdata('username');
			
					$this->db->insert("tbl_berita",$data);
					echo "<meta http-equiv='refresh' content='0; url=".base_url()."app_admin_berita/'>";
				
				
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
			$data=array();
			$now = time();
				$id['id_berita'] = $this->input->post("id_param");
				$upd['judul_berita'] = $this->input->post("judul");
				$isi=$this->input->post('isi');
				$upd["isi"] = preg_replace('#(href|src)="(.*?)/media#', '$1="'.base_url().'media', $isi);
				$upd["tanggal"] = date("Y-m-d H:i:s",$now);
				$upd["author"] =  $this->session->userdata('username');
				
				$this->db->update("tbl_berita",$upd,$id);
				echo "<meta http-equiv='refresh' content='0; url=".base_url()."app_admin_berita/'>";
				
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
			$id['id_berita'] = $this->uri->segment(3);
			$this->db->delete("tbl_berita",$id);
			header('location:'.base_url().'app_admin_berita');
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
			$id = $this->input->post('id_berita');
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

/* End of file app_admin_berita.php */
/* Location: ./application/controllers/app_admin_kabupaten.php */