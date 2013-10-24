<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class app_admin_statis extends CI_Controller {

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
			$tot_hal = $this->db->get("tbl_menu,tbl_data");
			$config['base_url'] = base_url() . 'app_admin_statis/index/';

			
			$d['data_get'] = $this->db->query("SELECT tbl_menu.id, tbl_data.data_id, tbl_menu.title, tbl_menu.id_parent, tbl_menu.level FROM tbl_data INNER JOIN tbl_menu ON tbl_data.data_id = tbl_menu.id");
			
			$this->load->view("app_admin/global/header",$d);
			$this->load->view("app_admin/menu/home");
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
			$level['level'] = "0";
			$tot_hal = $this->db->get("tbl_menu");
			
			$config['base_url'] = base_url() . 'app_admin_statis/index/';
			$config['total_rows'] = $tot_hal->num_rows();
			$d['data_get'] = $this->db->get_where("tbl_menu",$level);
			$d['st'] = "tambah";
			$d['id_param'] = "";
			
			$this->load->view("app_admin/global/header",$d);
			$this->load->view("app_admin/menu/input",$d);
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
			$id_get['id'] = $this->uri->segment(3);
			
			$dt = $this->db->get_where("tbl_menu,tbl_data",$id_get)->row();
			$d['id_param'] = $dt->id;
			$d['title'] = $dt->title;
			$d['id'] = $dt->id;
			$d['id_data'] = $dt->id_data;
			$d['content'] = $dt->content;
			$d['data_menu'] = $this->db->get("tbl_menu");	
			$d['data_content'] = $this->db->get("tbl_data");
			
			$d['st'] = "edit";
			
			$this->load->view("app_admin/global/header");
			$this->load->view("app_admin/menu/edit",$d);
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
			$data["data_id"]=$this->input->post('data_id');
			$content=$this->input->post('content');
			$data["content"] = preg_replace('#(href|src)="(.*?)/media#', '$1="'.base_url().'media', $content);
			
			if(empty($content))
				{
					echo "Data Masih Kosong";
				}
				else{
					$this->db->insert("tbl_data",$data);
					echo "<meta http-equiv='refresh' content='0; url=".base_url()."app_admin_statis/'>";
				}
				
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
			$this->form_validation->set_rules('content', 'content', 'trim|required');
				$id['data_id'] = $this->input->post("id_param");
				$upd['content'] = $this->input->post("content");
			
				$this->db->update("tbl_data",$upd,$id);
				echo "<meta http-equiv='refresh' content='0; url=".base_url()."app_admin_statis/'>";
				
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
			$id['id'] = $this->uri->segment(3);
			$this->db->delete("tbl_menu",$id);
			header('location:'.base_url().'app_admin_statis');
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
			$id = $this->input->post('id');
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