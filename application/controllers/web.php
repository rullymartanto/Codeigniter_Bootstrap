<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Web extends CI_Controller
{
   function index()
   {
		$data['web'] = $this->m_multileveldata->get_data();
		/*$data['leftmenu'] = $this->m_multileveldata->leftmenu();*/
		$level['level']="10";
		$data['menuleft'] = $this->db->get_where("tbl_menu",$level);
		
		$this->load->view('web/header',$data);
		$this->load->view('web/isi_index');
		$this->load->view('web/footer');

	}
	public function data()
	{
		$data['web'] = $this->m_multileveldata->get_data();
		/*$data['leftmenu'] = $this->m_multileveldata->leftmenu();*/
		$level['level']="10";
		$data['menuleft'] = $this->db->get_where("tbl_menu",$level);
		
		$id='';		
		if ($this->uri->segment(3) === FALSE)
		{
    			$id='';
		}
		else
		{
    			$id = $this->uri->segment(3);
		}
			$id_get['id'] = $this->uri->segment(3);
			$dt = $this->db->get_where("tbl_menu",$id_get)->row();
		
			$d['data_id'] = $dt->id;
			$d['data_menu'] = $this->db->get("tbl_menu",$id_get);
	$d['data_content'] = $this->db->query("SELECT tbl_menu.id, tbl_data.data_id, tbl_data.content, tbl_menu.title, tbl_menu.id_parent, tbl_menu.level FROM tbl_data INNER JOIN tbl_menu ON tbl_data.data_id = tbl_menu.id");
	
			$this->load->view('web/header',$data);

			if($id=="7"){
				/*berita*/
				$page=$this->uri->segment(4);
				$limit=$this->config->item('limit_data');
				if(!$page):
				$offset = 0;
				else:
				$offset = $page;
				endif;
				
				$d['tot'] = $offset;
				$tot_hal = $this->db->get("tbl_berita");
				$config['base_url'] = base_url() . '/index.php/web/data/'.$id.'/';
				
				$config['total_rows'] = $tot_hal->num_rows();
				$config['per_page'] = $limit;
				$config['uri_segment'] = 4;
				$config['first_link'] = 'Awal';
				$config['last_link'] = 'Akhir';
				$config['next_link'] = 'Selanjutnya';
				$config['prev_link'] = 'Sebelumnya';
				$this->pagination->initialize($config);
				$d["paginator"] =$this->pagination->create_links();
				$d['data_get'] = $this->db->query("SELECT * from tbl_berita order by id_berita DESC LIMIT ".$offset.",".$limit."");
				$this->load->view('web/berita',$d);
			}
			else if($id=="8"){
				/*galeri*/
				$page=$this->uri->segment(4);
				$limit=12;
				if(!$page):
				$offset = 0;
				else:
				$offset = $page;
				endif;
				
				$d['tot'] = $offset;
				$tot_hal = $this->db->get("tbl_album_galeri");
				$config['base_url'] = base_url() . '/index.php/web/data/'.$id.'/';
				$config['total_rows'] = $tot_hal->num_rows();
						$config['per_page'] = $limit;
						$config['uri_segment'] = 4;
						$config['first_link'] = 'Awal';
						$config['last_link'] = 'Akhir';
						$config['next_link'] = 'Selanjutnya';
						$config['prev_link'] = 'Sebelumnya';
						$this->pagination->initialize($config);
					$d["paginator"] =$this->pagination->create_links();
					$d['data_get'] = $this->db->query("SELECT * from tbl_album_galeri order by id_album DESC LIMIT ".$offset.",".$limit."");
					
					$this->load->view('web/album',$d);
		}
			else{
				$this->load->view('web/data_statis',$d);
			}
			$this->load->view('web/footer');
	}
	function galeri()
	{
		$id='';		
		if ($this->uri->segment(3) === FALSE)
		{
    			$id='';
		}
		else
		{
    			$id = $this->uri->segment(3);
		}
		$data['web'] = $this->m_multileveldata->get_data();
			/*$data['leftmenu'] = $this->m_multileveldata->leftmenu();*/
			$level['level']="10";
			$data['menuleft'] = $this->db->get_where("tbl_menu",$level);
		
			$page=$this->uri->segment(4);
			$limit=$this->config->item('limit_data');
			if(!$page):
			$offset = 0;
			else:
			$offset = $page;
			endif;
			
			$d['tot'] = $offset;
			$tot_hal = $this->db->get("tbl_album_galeri",$id);
			$config['base_url'] = base_url() . '/index.php/web/galeri/'.$id.'/';
			
			$config['total_rows'] = $tot_hal->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 4;
			$config['first_link'] = 'Awal';
			$config['last_link'] = 'Akhir';
			$config['next_link'] = 'Selanjutnya';
			$config['prev_link'] = 'Sebelumnya';
			$this->pagination->initialize($config);
			$d["paginator"] =$this->pagination->create_links();
			
			$d['data_get'] = $this->db->query("select * from tbl_galeri left join tbl_album_galeri on tbl_galeri.id_album=tbl_album_galeri.id_album where tbl_galeri.id_album='$id' LIMIT ".$offset.",".$limit."");
			$this->load->view('web/header',$data);
			$this->load->view('web/galeri',$d);
			$this->load->view('web/footer');
	}	
	public function berita()
	{
			$data['web'] = $this->m_multileveldata->get_data();
			/*$data['leftmenu'] = $this->m_multileveldata->leftmenu();*/
			$level['level']="10";
			$data['menuleft'] = $this->db->get_where("tbl_menu",$level);
		
			$page=$this->uri->segment(3);
			$limit=$this->config->item('limit_data');
			if(!$page):
			$offset = 0;
			else:
			$offset = $page;
			endif;
			
			$d['tot'] = $offset;
			$tot_hal = $this->db->get("tbl_berita");
			
			$config['total_rows'] = $tot_hal->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 3;
			$config['first_link'] = 'Awal';
			$config['last_link'] = 'Akhir';
			$config['next_link'] = 'Selanjutnya';
			$config['prev_link'] = 'Sebelumnya';
			$this->pagination->initialize($config);
			$d["paginator"] =$this->pagination->create_links();
			
			$d['data_get'] = $this->db->query("SELECT* from tbl_berita order by id_berita desc LIMIT ".$offset.",".$limit."");
			$this->load->view('web/header',$data);
			$this->load->view('web/berita',$d);
			$this->load->view('web/footer');
	}
}