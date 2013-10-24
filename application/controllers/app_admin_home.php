<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class app_admin_home extends CI_Controller {
	 
	public function index()
	{
		$cek = $this->session->userdata('logged_in');
		if(empty($cek))
		{
			header('location:'.base_url().'app_admin');
		}
		else
		{
			$this->load->view("app_admin/global/header");
			$this->load->view("app_admin/global/content");
			$this->load->view("app_admin/global/footer");
		}
	}
}

/* End of file app_admin_home.php */
/* Location: ./application/controllers/app_admin_home.php */