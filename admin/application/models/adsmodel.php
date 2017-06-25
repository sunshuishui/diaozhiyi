<?php
class Adsmodel extends CI_Model{
	public function adslist(){
		$res=$this->db->order_by('sort asc')->get('adsmanager');	
		return $res->result_array();
	}
	public function addads($pic){
		$pdata['title']=$this->input->post('title');
		$pdata['link']=$this->input->post('link');
		$pdata['posation']=$this->input->post('posation');
		$pdata['sort']=$this->input->post('sort');
		if(empty($pic)){
			
		}else{
			$pdata['pic']=$pic;	
		}
		return $this->db->insert('adsmanager',$pdata);
	}
	public function singleinfo($id){
		$rs=$this->db->where(array('id'=>$id))->get('adsmanager');
		return $rs->row_array();
	}
	public function editsave($pic){
		$id=$this->input->post('id');
		$pdata['title']=$this->input->post('title');
		$pdata['link']=$this->input->post('link');
		$pdata['posation']=$this->input->post('posation');
		$pdata['sort']=$this->input->post('sort');
		if(!empty($pic)){
			$pdata['pic']=$pic;	
			$imgurl=$this->singleinfo($id);
			$imgpath='../uploads/'.$imgurl['pic'];
			if(is_file($imgpath)){
				unlink($imgpath);
			}
		}
		
		$bool=$this->db->where(array('id'=>$id))->update('adsmanager',$pdata);
		return $bool;
	}	
	public function deleteads($id){
		
		$imgurl=$this->singleinfo($id);
			$imgpath='../uploads/'.$imgurl['pic'];
			if(is_file($imgpath)){
				unlink($imgpath);
			}
		$res=$this->db->delete('adsmanager',array('id'=>$id));
		return $res;
	}
	
}