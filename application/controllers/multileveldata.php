<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Multileveldata extends CI_Controller
{
	public function index()
	{
		$data['multilevel'] = $this->m_multileveldata->get_data();
		$this->load->view('web/header',$data);
	}
}