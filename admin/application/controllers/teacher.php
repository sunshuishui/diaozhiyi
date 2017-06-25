<?php
class Teacher extends MY_Controller{
	public function alist(){
		$this->load->model('Teachermodel');
		$this->load->library('pagination');
		$pagesize=30;
		$config['base_url']=site_url('teacher/alist');
		$row=$this->Teachermodel->alist('','');
		$zongj=count($row);
		$config['total_rows']=$zongj;
		$config['per_page']=$pagesize;
		$config['uri_segment'] = 3;
		$tiaoguo=intval($this->uri->segment(3));
		$config['first_link'] = '首页';
		$config['last_link'] = '尾页';
		$config['next_link'] = '下一页';
		$config['prev_link'] = '上一页';
		$this->pagination->initialize($config); 
		$link=$this->pagination->create_links();
		$data['datalist']=$this->Teachermodel->alist($tiaoguo,$pagesize);
		$data['link']=$link;
		$data['act']='list';
		$this->load->view('teacher',$data);
	}
	public function add(){
		$data['act']='add';
		$this->load->view('teacher',$data);
	}
	public function addsave(){
		$pic=$this->uploadimg('pic');
		$this->load->model('Teachermodel');
		$bool=$this->Teachermodel->addsave($pic);
		if($bool){
			echo '<script>alert("保存成功！");location.href="'.site_url('teacher/alist').'";</script>';
		}
	}
	public function edit($id=''){
		if(!$id){
			redirect('teacher/alist');
		}
		$data['act']='edit';
		$this->load->model('Teachermodel');
		$data['datainfo']=$this->Teachermodel->singleinfo($id);
		$this->load->view('teacher',$data);
	}
	public function editsave(){
		$id=$this->input->post('id');
		if(!$id){
			redirect('teacher/alist');
		}
		$pic=$this->uploadimg('pic');
		$this->load->model('Teachermodel');
		$bool=$this->Teachermodel->editsave($pic);
		if($bool){
			echo '<script>alert("保存成功！");location.href="'.site_url('teacher/alist').'";</script>';
		}	
	}
	public function del($id=''){
		if(!$id){
			redirect('teacher/alist');
		}	
		$this->load->model('Teachermodel');	
		$bool=$this->Teachermodel->delete($id);
		if($bool){
			echo '<script>location.href="'.site_url('teacher/alist').'";</script>';
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