<?php
class Zuopin extends MY_Controller{
	public function alist(){
		$this->load->model('Zuopinmodel');
		$this->load->library('pagination');
		$pagesize=30;
		$config['base_url']=site_url('zuopin/alist');
		$row=$this->Zuopinmodel->alist('','');
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
		$data['datalist']=$this->Zuopinmodel->alist($tiaoguo,$pagesize);
		$data['link']=$link;
		$data['act']='list';
		$this->load->view('zuopin',$data);
	}
	public function add(){
		$data['act']='add';
		$this->load->view('zuopin',$data);
	}
	public function addsave(){
		$pic=$this->uploadimg('pic');
		if($pic){
			$this->_resizeimg('../uploads/'.$pic);
		}
		$this->load->model('Zuopinmodel');
		$bool=$this->Zuopinmodel->addsave($pic);
		if($bool){
			echo '<script>alert("保存成功！");location.href="'.site_url('zuopin/alist').'";</script>';
		}
	}
	public function edit($id=''){
		if(!$id){
			redirect('zuopin/alist');
		}
		$data['act']='edit';
		$this->load->model('Zuopinmodel');
		$data['datainfo']=$this->Zuopinmodel->singleinfo($id);
		$this->load->view('zuopin',$data);
	}
	public function editsave(){
		$id=$this->input->post('id');
		if(!$id){
			redirect('zuopin/alist');
		}
		$pic=$this->uploadimg('pic');
		if($pic){
			$this->_resizeimg('../uploads/'.$pic);
		}
		$this->load->model('Zuopinmodel');
		$bool=$this->Zuopinmodel->editsave($pic);
		if($bool){
			echo '<script>alert("保存成功！");location.href="'.site_url('zuopin/alist').'";</script>';
		}	
	}
	public function del($id=''){
		if(!$id){
			redirect('zuopin/alist');
		}	
		$this->load->model('Zuopinmodel');	
		$bool=$this->Zuopinmodel->delete($id);
		if($bool){
			echo '<script>location.href="'.site_url('zuopin/alist').'";</script>';
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
	private function _resizeimg($img){
		$config['image_library'] = 'gd2';
		$config['source_image'] = $img;
		$config['create_thumb'] = TRUE;
		$config['maintain_ratio'] = TRUE;
		$config['width'] = 120;
		$config['height'] = 198;
		
		$this->load->library('image_lib', $config); 
		$this->image_lib->resize();	
	}
}