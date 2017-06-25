<?php
class Articlemodel extends CI_Model{
	public function alist($type,$tiaoguo,$pagesize){
		if($type>0){
			if($pagesize){
				$rs=$this->db->where(array('type'=>$type))->order_by('id desc')->limit($pagesize,$tiaoguo)->get('article');
			}else{
				$rs=$this->db->select('id')->where(array('type'=>$type))->get('article');
			}
		}else{
			if($pagesize){
				$rs=$this->db->order_by('id desc')->limit($pagesize,$tiaoguo)->get('article');
			}else{
				$rs=$this->db->select('id')->get('article');
			}
		}
		return $rs->result_array();
	}
	public function addsave($pic){
		
		$data['title']=$this->input->post('title');
		if($pic){
			$data['pic']=$pic;	
		}
		
		$data['type']=$this->input->post('type');
		$data['author']=$this->input->post('author');
		$data['addtime']=$this->input->post('addtime');
		$data['content']=$this->input->post('content');
		$bool=$this->db->insert('article',$data);
		return $bool;
	}
	public function singleinfo($id){
		$rs=$this->db->where(array('id'=>$id))->get('article');
		return $rs->row_array();
	}
	public function delete($id){
		
		return $this->db->delete('article',array('id'=>$id));
	}
	public function editsave($pic){
		$id=$this->input->post('id');
		
		$data['title']=$this->input->post('title');
		if($pic){
			$data['pic']=$pic;	
			$imgarr=$this->singleinfo($id);
			$imgurl='../uploads/'.$imgarr['pic'];
			if(is_file($imgurl)){
				unlink($imgurl);
			}
		}
		
		$data['type']=$this->input->post('type');
		$data['author']=$this->input->post('author');
		$data['addtime']=$this->input->post('addtime');
		$data['content']=$this->input->post('content');
		$bool=$this->db->where(array('id'=>$id))->update('article',$data);
		
		return $bool;
	}
}