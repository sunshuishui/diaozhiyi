<?php
class Ads extends MY_Controller{
	public function adsimg(){
		$this->load->model('Adsmodel');
		$data['adslist']=$this->Adsmodel->adslist();
		$data['adsposation']=$this->_adsposation();
		$data['act']='list';
		$this->load->view('adsmanager',$data);
	}
	public function add(){
		$data['act']='add';
		$data['adsposation']=$this->_adsposation();
		$this->load->view('adsmanager',$data);
	}
	public function addads(){
		$pic='';
		if(!empty($_FILES['pic']['tmp_name'])){
			$config['upload_path']='../uploads/';
			$config['allowed_types']='jpg|jpeg|gif|png';
			$config['max_size']='300';
			$config['file_name']=time().rand(123,999);
			$this->load->library('upload', $config);
			if($this->upload->do_upload('pic')){
				$rdata=$this->upload->data();
				$pic=$rdata['file_name'];
			}
		}
		$this->load->model('Adsmodel');	
		$bool=$this->Adsmodel->addads($pic);
		if($bool){
			echo '<script>alert("添加成功");location.href="'.site_url('ads/adsimg').'"</script>';
		}else{
			echo '<script>alert("添加失败，请重新添加")location.href="'.site_url('ads/adsimg').'"</script>';	
		}
	}
	public function edit($id=''){
		if(!$id){
			redirect('ads/adsimg');
		}
		$data['act']='edit';
		$this->load->model('Adsmodel');
		$data['datainfo']=$this->Adsmodel->singleinfo($id);
		$data['adsposation']=$this->_adsposation();
		$this->load->view('adsmanager',$data);
	}
	public function deleteads($id=''){
		if(!$id){
			redirect('ads/adsimg');	
		}
		$this->load->model('Adsmodel');	
		$bool=$this->Adsmodel->deleteads($id);
		if($bool){
			echo '<script>location.href="'.site_url('ads/adsimg').'"</script>';
		}else{
			echo '<script>alert("删除失败，请重新删除");location.href="'.site_url('ads/adsimg').'"</script>';	
		}	
	}
	public function editsave(){
		$id=$this->input->post('id');
		if(!$id){
			redirect('ads/adsimg');	
		}
		$pic='';
		if(!empty($_FILES['pic']['tmp_name'])){
			$config['upload_path']='../uploads/';
			$config['allowed_types']='jpg|jpeg|gif|png';
			$config['max_size']='300';
			$config['file_name']=time().rand(123,999);
			$this->load->library('upload', $config);
			if($this->upload->do_upload('pic')){
				$rdata=$this->upload->data();
				$pic=$rdata['file_name'];
			}
		}
		$this->load->model('Adsmodel');	
		$bool=$this->Adsmodel->editsave($pic);
		if($bool){
			echo '<script>alert("编辑成功");location.href="'.site_url('ads/adsimg').'"</script>';
		}else{
			echo '<script>alert("编辑失败，请重新操作")location.href="'.site_url('ads/adsimg').'"</script>';	
		}
	}
	function _adsposation(){
		return array(1=>'PC轮播(1900*500)',2=>'WAP轮播(640*295)');
	}
}