<?php
class Customermodel extends CI_Model{
	public function alist($type){
		$rs=$this->db->where(array('id'=>$type))->get('customer');
		return $rs->row_array();
	}
	
	public function singleinfo($id){
		$rs=$this->db->where(array('id'=>$id))->get('customer');
		return $rs->row_array();
	}
	
	public function editsave($pic,$id){
		
		if($pic){
			$imgurl=$this->singleinfo($id);
			$data['pic']=$pic;
			$imglogo='../uploads/'.$imgurl['pic'];
			if(is_file($imglogo)){
				unlink($imglogo);	
			}
		}
		$data['infor']=$this->input->post('infor');
		$bool=$this->db->where(array('id'=>$id))->update('customer',$data);
		return $bool;
	}
}