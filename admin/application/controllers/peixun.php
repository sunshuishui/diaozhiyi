<?php
class Peixun extends MY_Controller{
	public function alist(){
		$this->load->model('Peixunmodel');
		$this->load->library('pagination');
		$pagesize=30;
		$type=intval($this->uri->segment(3));
		$config['base_url']=site_url('peixun/alist/'.$type);
		$row=$this->Peixunmodel->alist($type,'','');
		$zongj=count($row);
		$config['total_rows']=$zongj;
		$config['per_page']=$pagesize;
		$config['uri_segment'] = 4;
		$tiaoguo=intval($this->uri->segment(4));
		$config['first_link'] = '首页';
		$config['last_link'] = '尾页';
		$config['next_link'] = '下一页';
		$config['prev_link'] = '上一页';
		$this->pagination->initialize($config); 
		$link=$this->pagination->create_links();
		$data['datalist']=$this->Peixunmodel->alist($type,$tiaoguo,$pagesize);
		$data['link']=$link;
		$data['act']='list';
		$data['type']=$type;
		$data['alltype']=$this->_peixuntype();
		$this->load->view('peixun',$data);
	}
	public function add(){
		$data['act']='add';
		$data['alltype']=$this->_peixuntype();
		$this->load->view('peixun',$data);
	}
	public function addsave(){
		$this->load->model('Peixunmodel');
		$pic=$this->uploadimg('pic');
		if($pic){
			$this->_resizeimg('../uploads/'.$pic);
		}
		$logo=$this->uploadimg('logo');
		$bool=$this->Peixunmodel->addsave($pic,$logo);
		if($bool){
			echo '<script>alert("保存成功！");location.href="'.site_url('peixun/alist').'";</script>';
		}
	}
	public function edit($id=''){
		if(!$id){
			redirect('peixun/alist');
		}
		$data['act']='edit';
		$this->load->model('Peixunmodel');
		$data['datainfo']=$this->Peixunmodel->singleinfo($id);
		$data['alltype']=$this->_peixuntype();
		$this->load->view('peixun',$data);
	}
	public function editsave(){
		$id=$this->input->post('id');
		if(!$id){
			redirect('peixun/alist');
		}
		$this->load->model('Peixunmodel');	
		
		$pic=$this->uploadimg('pic');
		if($pic){
			$this->_resizeimg('../uploads/'.$pic);
		}
		$logo=$this->uploadimg('logo');
		$bool=$this->Peixunmodel->editsave($pic,$logo);
		if($bool){
			echo '<script>alert("保存成功！");location.href="'.site_url('peixun/alist').'";</script>';
		}	
	}
	public function del($id=''){
		if(!$id){
			redirect('peixun/alist');
		}	
		$this->load->model('Peixunmodel');	
		$bool=$this->Peixunmodel->delete($id);
		if($bool){
			echo '<script>location.href="'.site_url('peixun/alist').'";</script>';
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
	function _peixuntype(){
		return array(1=>'纹绣培训',2=>'纹眉培训');	
	}
	private function _resizeimg($img){
		$config['image_library'] = 'gd2';
		$config['source_image'] = $img;
		$config['create_thumb'] = TRUE;
		$config['maintain_ratio'] = TRUE;
		$config['width'] = 500;
		$config['height'] = 325;
		
		$this->load->library('image_lib', $config); 
		$this->image_lib->resize();	
	}
}