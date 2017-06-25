<?php
class Product extends MY_Controller{
	public function alist(){
		$this->load->model('Productmodel');
		$this->load->library('pagination');
		$pagesize=30;
		$config['base_url']=site_url('product/alist');
		$row=$this->Productmodel->alist('','');
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
		$data['datalist']=$this->Productmodel->alist($tiaoguo,$pagesize);
		$data['link']=$link;
		$data['act']='list';
		$this->load->view('product',$data);
	}
	public function add(){
		$data['act']='add';
		$this->load->view('product',$data);
	}
	public function addsave(){
		$pic=$this->uploadimg('pic');
		$this->load->model('Productmodel');
		$bool=$this->Productmodel->addsave($pic);
		if($bool){
			echo '<script>alert("保存成功！");location.href="'.site_url('product/alist').'";</script>';
		}
	}
	public function edit($id=''){
		if(!$id){
			redirect('product/alist');
		}
		$data['act']='edit';
		$this->load->model('Productmodel');
		$data['datainfo']=$this->Productmodel->singleinfo($id);
		$this->load->view('product',$data);
	}
	public function editsave(){
		$id=$this->input->post('id');
		if(!$id){
			redirect('product/alist');
		}
		$pic=$this->uploadimg('pic');
		$this->load->model('Productmodel');
		$bool=$this->Productmodel->editsave($pic);
		if($bool){
			echo '<script>alert("保存成功！");location.href="'.site_url('product/alist').'";</script>';
		}	
	}
	public function del($id=''){
		if(!$id){
			redirect('product/alist');
		}	
		$this->load->model('Productmodel');	
		$bool=$this->Productmodel->delete($id);
		if($bool){
			echo '<script>location.href="'.site_url('product/alist').'";</script>';
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