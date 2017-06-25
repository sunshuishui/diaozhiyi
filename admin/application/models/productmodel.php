<?php
class Productmodel extends CI_Model{
	public function alist($tiaoguo,$pagesize){
		if($pagesize){
			$rs=$this->db->order_by('id desc')->limit($pagesize,$tiaoguo)->get('product');
		}else{
			$rs=$this->db->select('id')->get('product');
		}
		return $rs->result_array();
	}
	public function addsave($pic){
		if($pic){
			$data['pic']=$pic;	
		}
		$data['title']=$this->input->post('title');
		$data['content']=$this->input->post('content');
		
		$bool=$this->db->insert('product',$data);
		return $bool;
	}
	public function singleinfo($id){
		$rs=$this->db->where(array('id'=>$id))->get('product');
		return $rs->row_array();
	}
	public function delete($id){
		$imgarr=$this->singleinfo($id);
		$imglogo='../uploads/'.$imgarr['pic'];
		if(is_file($imglogo)){
			unlink($imglogo);	
		}
	
		return $this->db->delete('product',array('id'=>$id));
	}
	public function editsave($pic){
		$id=$this->input->post('id');
		
		if($pic){
			$imgurl=$this->singleinfo($id);
			$data['pic']=$pic;
			$imglogo='../uploads/'.$imgurl['pic'];
			if(is_file($imglogo)){
				unlink($imglogo);	
			}
		}
		$data['title']=$this->input->post('title');
		$data['content']=$this->input->post('content');
		$bool=$this->db->where(array('id'=>$id))->update('product',$data);
		return $bool;
	}
}