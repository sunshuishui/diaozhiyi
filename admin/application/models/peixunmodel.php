<?php
class Peixunmodel extends CI_Model{
	public function alist($type,$tiaoguo,$pagesize){
		if($type>0){
			if($pagesize){
				$rs=$this->db->where(array('type'=>$type))->order_by('id desc')->limit($pagesize,$tiaoguo)->get('peixun');
			}else{
				$rs=$this->db->select('id')->where(array('type'=>$type))->get('peixun');
			}
		}else{
			if($pagesize){
				$rs=$this->db->order_by('id desc')->limit($pagesize,$tiaoguo)->get('peixun');
			}else{
				$rs=$this->db->select('id')->get('peixun');
			}
		}
		return $rs->result_array();
	}
	public function addsave($pic,$logo){
		
		$data['title']=$this->input->post('title');
		if($pic){
			$data['pic']=$pic;	
		}
		if($logo){
			$data['logo']=$logo;	
		}
		$data['type']=$this->input->post('type');
		$data['xuezhi']=$this->input->post('xuezhi');
		$data['feiyong']=$this->input->post('feiyong');
		$data['kecheng']=$this->input->post('kecheng');
		$data['px_content']=$this->input->post('px_content');
		$data['ys_content']=$this->input->post('ys_content');
		$data['content']=$this->input->post('content');
		$bool=$this->db->insert('peixun',$data);
		return $bool;
	}
	public function singleinfo($id){
		$rs=$this->db->where(array('id'=>$id))->get('peixun');
		return $rs->row_array();
	}
	public function delete($id){
		$imgarr=$this->singleinfo($id);
		
		$imgurl='../uploads/'.$imgarr['pic'];
		$tempimg=explode('.',$imgarr['pic']);
		$imgpath2='../uploads/'.$tempimg[0].'_thumb.'.$tempimg[1];
	
		if(is_file($imgpath2)){
			unlink($imgpath2);
		}
		if(is_file($imgurl)){
			unlink($imgurl);
		}
		
		$imgurl='../uploads/'.$imgarr['logo'];
		if(is_file($imgurl)){
			unlink($imgurl);
		}
		return $this->db->delete('peixun',array('id'=>$id));
	}
	public function editsave($pic,$logo){
		$id=$this->input->post('id');
		
		$data['title']=$this->input->post('title');
		if($pic or $logo){
			$imgarr=$this->singleinfo($id);
			if($pic){
				$data['pic']=$pic;
				$imgurl='../uploads/'.$imgarr['pic'];
				$tempimg=explode('.',$imgarr['pic']);
				$imgpath2='../uploads/'.$tempimg[0].'_thumb.'.$tempimg[1];
			
				if(is_file($imgpath2)){
					unlink($imgpath2);
				}
				if(is_file($imgurl)){
					unlink($imgurl);
				}
			}
			if($logo){
				$data['logo']=$logo;
				$imgurl='../uploads/'.$imgarr['logo'];
				if(is_file($imgurl)){
					unlink($imgurl);
				}
			}
		}
		$data['type']=$this->input->post('type');
		$data['xuezhi']=$this->input->post('xuezhi');
		$data['feiyong']=$this->input->post('feiyong');
		$data['kecheng']=$this->input->post('kecheng');
		$data['px_content']=$this->input->post('px_content');
		$data['ys_content']=$this->input->post('ys_content');
		$data['content']=$this->input->post('content');
		$bool=$this->db->where(array('id'=>$id))->update('peixun',$data);
		
		return $bool;
	}
}