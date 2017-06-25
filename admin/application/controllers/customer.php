<?php
class Customer extends MY_Controller{
	public function alist($type='aboutus'){
		$this->load->model('Customermodel');
		$data['datainfo']=$this->Customermodel->alist($type);
		$data['act']=$type;
		$this->load->view('customer',$data);
	}
	
	public function editsave($id){
		if(!$id){
			redirect('customer/alist');
		}
		$pic=$this->uploadimg('pic');
		$this->load->model('Customermodel');
		$bool=$this->Customermodel->editsave($pic,$id);
		if($bool){
			echo '<script>alert("±£´æ³É¹¦£¡");history.back();</script>';
		}	
	}
	public function del($id=''){
		if(!$id){
			redirect('customer/alist');
		}	
		$this->load->model('Customermodel');	
		$bool=$this->Customermodel->delete($id);
		if($bool){
			echo '<script>location.href="'.site_url('customer/alist').'";</script>';
		}
	}
	public function uploadimg($name){
		$pimg='';
		if(!empty($_FILES[$name]['tmp_name'])){
			$config['upload_path']='../uploads/';
			$config['allowed_types']='jpg|jpeg|gif|png';
			$config['max_size']='300';
			$config['file_name']=uniqid().rand(123,999);
			$this->load->library('upload');
			$this->upload->initialize($config);
			if($this->upload->do_upload($name)){
				$rdata=$this->upload->data();
				$pimg=$rdata['file_name'];
			}else{
				$pimg='';
			}
		}
		return $pimg;
	}
}