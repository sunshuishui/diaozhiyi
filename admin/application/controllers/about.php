<?php
class About extends MY_Controller{
	public function editlist($type='all'){
		$data['act']=$type;
		$this->load->model('Aboutmodel');
		$data['datainfo']=$this->Aboutmodel->editlistinfor('customer');
		$this->load->view('about',$data);
	}
	public function project($type='ziben'){
		$data['act']=$type;
		$this->load->model('Aboutmodel');
		$data['datainfo']=$this->Aboutmodel->editlistinfor('project');
		$this->load->view('about',$data);
	}
	public function editsave(){
		$this->load->model('Aboutmodel');
		$bool=$this->Aboutmodel->editsaveinfor();
		if($bool){
			echo '<script>alert("编辑成功");history.back();</script>';	
		}
	}
	public function editjectsave(){
		$this->load->model('Aboutmodel');
		$bool=$this->Aboutmodel->editprojectinfor();
		if($bool){
			echo '<script>alert("编辑成功");history.back();</script>';
		}
	}
	
	
	public function buildlist($type='about_build'){
		$data['act']=$type;
		$this->load->model('Aboutmodel');
		$data['datainfo']=$this->Aboutmodel->editbuildinfor($type);
		$this->load->view('about',$data);
	}
	public function editbuildsave(){
		$this->load->model('Aboutmodel');
		$bool=$this->Aboutmodel->editbuildsave();
		if($bool){
			echo '<script>alert("编辑成功");history.back();</script>';	
		}
	}
}