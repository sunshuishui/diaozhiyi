<?php
class Zuopinmodel extends CI_Model{
	public function alist($tiaoguo,$pagesize){
		if($pagesize){
			$rs=$this->db->order_by('id desc')->limit($pagesize,$tiaoguo)->get('zuopin');
		}else{
			$rs=$this->db->select('id')->get('zuopin');
		}
		return $rs->result_array();
	}
	public function addsave($pic){
		if($pic){
			$data['pic']=$pic;	
		}
		
		$data['title']=$this->input->post('title');
		$data['content']=$this->input->post('content');
		$bool=$this->db->insert('zuopin',$data);
		return $bool;
	}
	public function singleinfo($id){
		$rs=$this->db->where(array('id'=>$id))->get('zuopin');
		return $rs->row_array();
	}
	public function delete($id){
		$imgarr=$this->singleinfo($id);
		$imglogo='../uploads/'.$imgarr['pic'];
		$tempimg=explode('.',$imgarr['pic']);
		$imgpath2='../uploads/'.$tempimg[0].'_thumb.'.$tempimg[1];
	
		if(is_file($imgpath2)){
			unlink($imgpath2);
		}
		if(is_file($imglogo)){
			unlink($imglogo);	
		}
		return $this->db->delete('zuopin',array('id'=>$id));
	}
	public function editsave($pic){
		$id=$this->input->post('id');
		
		if($pic){
			$data['pic']=$pic;	
			$imgurl=$this->singleinfo($id);
			$imglogo='../uploads/'.$imgurl['pic'];
			$tempimg=explode('.',$imgurl['pic']);
			$imgpath2='../uploads/'.$tempimg[0].'_thumb.'.$tempimg[1];
		
			if(is_file($imgpath2)){
				unlink($imgpath2);
			}
			if(is_file($imglogo)){
				unlink($imglogo);	
			}
		}
		$data['title']=$this->input->post('title');
		$data['content']=$this->input->post('content');
		
		$bool=$this->db->where(array('id'=>$id))->update('zuopin',$data);
		return $bool;
	}
}