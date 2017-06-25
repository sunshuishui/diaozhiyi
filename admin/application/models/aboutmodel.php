<?php
class Aboutmodel extends CI_Model{
	public function editlistinfor($table){
		$res=$this->db->limit(1)->get($table);	
		return $res->row_array();
	}
	public function editsaveinfor(){
		$val=$this->input->post('val');
		$vararr=explode(',',$val);
		foreach($vararr as $item){
			$data[$item]=$this->input->post($item);
		}	
		$bool=$this->db->update('customer',$data);
		return $bool;
	}
	public function editprojectinfor(){
		$val=$this->input->post('val');
		$data[$val]=$this->input->post($val);
		$bool=$this->db->update('project',$data);
		return $bool;
	}
	
	public function editbuildinfor($type){
		$res=$this->db->select($type)->limit(1)->get('build');	
		return $res->row_array();
	}
	public function editbuildsave(){
		$val=$this->input->post('val');
		$data[$val]=$this->input->post($val);
		$bool=$this->db->update('build',$data);
		return $bool;
	}
}