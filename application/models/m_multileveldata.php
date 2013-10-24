<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_multileveldata extends CI_Model
{
	public function get_data($id_parent=0)
	{
		$data = array();
		$this->db->from('tbl_menu');
		$this->db->where('id_parent',$id_parent);
		$result = $this->db->get();
	
		foreach($result->result() as $row)
		{
			$data[] = array(
					'id'	=>$row->id_parent,
					'title'	=>$row->title,
					'data_id'	=>$row->id,
					// recursive
					'child'	=>$this->get_data($row->id)
				);
		}
		return $data;
	}
	/*public function leftmenu($id_parent=10)
	{
		$data = array();
		$this->db->from('tbl_menu');
		$this->db->where('id_parent',$id_parent);
		$result = $this->db->get();
	
		foreach($result->result() as $row)
		{
			$data[] = array(
					'id'	=>$row->id_parent,
					'title'	=>$row->title,
				);
		}
		return $data;
	}*/

	public function get_child($id)
	{
		$data = array();
		$this->db->from('tbl_menu');
		$this->db->where('level',$id);
		$result = $this->db->get();
		foreach($result->result() as $row)
		{
			$data[$row->id] = $row->title;
		}
		return $data;
	}
}