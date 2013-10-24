<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class app_admin_photo extends CI_Controller {

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
			$tot_hal = $this->db->query("select * from tbl_galeri");
			$config['base_url'] = base_url() . 'app_admin_photo/index/';

			$config['total_rows'] = $tot_hal->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 3;
			$config['first_link'] = 'Awal';
			$config['last_link'] = 'Akhir';
			$config['next_link'] = 'Selanjutnya';
			$config['prev_link'] = 'Sebelumnya';
			$this->pagination->initialize($config);
			$d["paginator"] =$this->pagination->create_links();
			
			$d['data_get'] = $this->db->query("SELECT tbl_album_galeri.id_album, tbl_album_galeri.nama_album, tbl_galeri.foto_besar, tbl_galeri.foto_kecil FROM tbl_galeri INNER JOIN tbl_album_galeri ON tbl_galeri.id_album = tbl_album_galeri.id_album order by tbl_galeri.id_album desc LIMIT ".$offset.",".$limit."");
			$d['album'] = $this->db->get("tbl_album_galeri");

			$this->load->view("app_admin/global/header",$d);
			$this->load->view("app_admin/photo/home");
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
			$config['base_url'] = base_url() . 'app_admin_photo/index/';
			$dt = $this->db->get_where("tbl_album_galeri",$id_get)->row();
			
			$d['id_album'] = $id_get;
			$d['id_param'] = $dt->id_album;		
			$d['id_album'] = $dt->id_album;
			
			$d['data_content'] = $this->db->query("SELECT tbl_album_galeri.id_album, tbl_album_galeri.nama_album, tbl_galeri.foto_besar FROM tbl_galeri INNER JOIN tbl_album_galeri ON tbl_galeri.id_album = tbl_album_galeri.id_album where  tbl_album_galeri.id_album ='".$dt->id_album."'");
			$d['album'] = $this->db->get("tbl_album_galeri");
			$d['st'] = "edit";
			
			$this->load->view("app_admin/global/header",$d);
			$this->load->view("app_admin/photo/edit",$d);
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
			$data["id_album"]=$this->input->post('id_album');
			
				$acak=rand(00000000000,99999999999);
				$bersih=$_FILES['userfile']['name'];
				$nm=str_replace(" ","_","$bersih");
				$pisah=explode(".",$nm);
				$nama_murni_lama = preg_replace("/^(.+?);.*$/", "\\1",$pisah[0]);
				$nama_murni=strtolower($nama_murni_lama);
				$ekstensi_kotor = $pisah[1];
				
				$file_type = preg_replace("/^(.+?);.*$/", "\\1", $ekstensi_kotor);
				$file_type_baru = strtolower($file_type);
				
				$ubah=$acak.'-'.$nama_murni; //tanpa ekstensi
				$n_baru = $ubah.'.'.$file_type_baru;
				$ori_src="application/views/web/galeri/".strtolower( str_replace(' ','_',$n_baru) );
				$thumb_src="application/views/web/galeri/thumb/".strtolower( str_replace(' ','_','kecil-'.$n_baru) );
				if(move_uploaded_file ($_FILES['userfile']['tmp_name'],$ori_src))
				{
				chmod("$ori_src",0777);
				}else{
				echo "Gagal melakukan proses upload file.Hal ini biasanya disebabkan ukuran file yang terlalu besar atau koneksi jaringan anda sedang bermasalah";
				exit;
				}
				list($width, $height) = getimagesize($ori_src) ;
				if($height > $width)
				{
				$x_height= 480; 
				$diff = $height / $x_height;
				$x_width = $width / $diff;
				
				$n_height= 98; 
				$diff = $height / $n_height;
				$n_width = $width / $diff;
				}
				else
				{
				$x_width= 640; 
				$diff = $width / $x_width;
				$x_height = $height / $diff;
				
				$n_width= 130; 
				$diff = $width / $n_width;
				$n_height = $height / $diff;
				}
				if(($_FILES['userfile']['type']=="image/jpeg") || ($_FILES['userfile']['type']=="image/png") || ($_FILES['userfile']['type']=="image/gif"))
				{
				$im = @ImageCreateFromJPEG ($ori_src) or // Read JPEG Image
				$im = @ImageCreateFromPNG ($ori_src) or // or PNG Image
				$im = @ImageCreateFromGIF ($ori_src) or // or GIF Image
				$im = false; // If image is not JPEG, PNG, or GIF
				//$im=ImageCreateFromJPEG($ori_src); 
				
				
				if(!$im) 
				{
					echo '<p>Gagal membuat thumnail</p>';
					exit;
				}
				else 
				{	
					$newimage2=@imagecreatetruecolor($x_width,$x_height);                 
					@imageCopyResized($newimage2,$im,0,0,0,0,$x_width,$x_height,$width,$height);
					@ImageJpeg($newimage2,$ori_src);
					chmod("$ori_src",0777);
							
					$newimage=@imagecreatetruecolor($n_width,$n_height);                 
					@imageCopyResized($newimage,$im,0,0,0,0,$n_width,$n_height,$width,$height);
					@ImageJpeg($newimage,$thumb_src);
					chmod("$thumb_src",0777);
				}
				}
				
				//---------------------------------------------------------------------------------------------------
				$data['foto_besar'] = $n_baru;
				$data['foto_kecil'] = 'kecil-'.$n_baru;
				$data['id_album'] = $this->input->post('album');
				
					$this->db->insert("tbl_galeri",$data);
					echo "<meta http-equiv='refresh' content='0; url=".base_url()."app_admin_photo/'>";
				
				
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
			
				$this->db->update("tbl_galeri",$upd,$id);
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
			$this->db->delete("tbl_galeri",$id);
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