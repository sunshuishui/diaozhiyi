<?php
class Storemodel extends CI_Model{
	public function alist($type,$tiaoguo,$pagesize){
		if($type>0){
			if($pagesize){
				$rs=$this->db->where(array('type'=>$type))->order_by('id desc')->limit($pagesize,$tiaoguo)->get('store');
			}else{
				$rs=$this->db->select('id')->where(array('type'=>$type))->get('store');
			}
		}else{
			if($pagesize){
				$rs=$this->db->order_by('id desc')->limit($pagesize,$tiaoguo)->get('store');
			}else{
				$rs=$this->db->select('id')->get('store');
			}
		}
		return $rs->result_array();
	}
	public function addsave($pic1,$pic2,$pic3){
		
		$data['title']=$this->input->post('title');
		if($pic1){
			$data['pic1']=$pic1;	
		}
		if($pic2){
			$data['pic2']=$pic2;	
		}
		if($pic3){
			$data['pic3']=$pic3;	
		}
		$data['infor']=$this->input->post('infor');
		
		$bool=$this->db->insert('store',$data);
		return $bool;
	}
	public function singleinfo($id){
		$rs=$this->db->where(array('id'=>$id))->get('store');
		return $rs->row_array();
	}
	public function delete($id){
		$imgarr=$this->singleinfo($id);
		
		$imgurl1='../uploads/'.$imgarr['pic1'];
		$imgurl2='../uploads/'.$imgarr['pic2'];
		$imgurl3='../uploads/'.$imgarr['pic3'];
		if(is_file($imgurl1)){
			unlink($imgurl1);
		}
		if(is_file($imgurl2)){
			unlink($imgurl2);
		}
		if(is_file($imgurl3)){
			unlink($imgurl3);
		}
		return $this->db->delete('store',array('id'=>$id));
	}
	public function editsave($pic1,$pic2,$pic3){
		$id=$this->input->post('id');
		
		$data['title']=$this->input->post('title');
		if($pic1 or $pic2 or $pic3){
			$imgarr=$this->singleinfo($id);
			if($pic1){
				$data['pic1']=$pic1;
				$imgurl='../uploads/'.$imgarr['pic1'];
				if(is_file($imgurl)){
					unlink($imgurl);
				}
			}
			if($pic2){
				$data['pic2']=$pic2;
				$imgurl='../uploads/'.$imgarr['pic2'];
				if(is_file($imgurl)){
					unlink($imgurl);
				}
			}
			if($pic3){
				$data['pic3']=$pic3;
				$imgurl='../uploads/'.$imgarr['pic3'];
				if(is_file($imgurl)){
					unlink($imgurl);
				}
			}
		}
		$data['infor']=$this->input->post('infor');
		$bool=$this->db->where(array('id'=>$id))->update('store',$data);
		
		return $bool;
	}
}