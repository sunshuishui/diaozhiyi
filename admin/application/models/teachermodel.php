<?php
class Teachermodel extends CI_Model{
	public function alist($tiaoguo,$pagesize){
		if($pagesize){
			$rs=$this->db->order_by('id desc')->limit($pagesize,$tiaoguo)->get('teacher');
		}else{
			$rs=$this->db->select('id')->get('teacher');
		}
		return $rs->result_array();
	}
	public function addsave($pic){
		if($pic){
			$data['pic']=$pic;	
		}
		$data['name']=$this->input->post('name');
		$data['infor']=$this->input->post('infor');
		
		$bool=$this->db->insert('teacher',$data);
		return $bool;
	}
	public function singleinfo($id){
		$rs=$this->db->where(array('id'=>$id))->get('teacher');
		return $rs->row_array();
	}
	public function delete($id){
		$imgarr=$this->singleinfo($id);
		$imglogo='../uploads/'.$imgarr['pic'];
		if(is_file($imglogo)){
			unlink($imglogo);	
		}
	
		return $this->db->delete('teacher',array('id'=>$id));
	}
	public function editsave($pic){
		$id=$this->input->post('id');
		$imgurl=$this->singleinfo($id);
		if($pic){
			$data['pic']=$pic;
			$imglogo='../uploads/'.$imgurl['pic'];
			if(is_file($imglogo)){
				unlink($imglogo);	
			}
		}
		$data['infor']=$this->input->post('infor');
		$data['name']=$this->input->post('name');
		$bool=$this->db->where(array('id'=>$id))->update('teacher',$data);
		return $bool;
	}
}