<?php

class Clogin extends CI_Controller{
	

 function saveGallery(){
	$photo_name = time().trim($_FILES['selectedStu']['name']);
	$name= $this->insert->post('selectedStu');
	 echo $name;
	$data=array(
			'name'=>$this->input->post("title"),
			'image'=>$photo_name,
			'date'=>date("Y-m-d")
	);
	$query = $this->db->insert("gallery",$data);
	if($query){
		$this->load->library('upload');
		$image_path = realpath(APPPATH . '../assets/images');
		$data['upload_path'] = $image_path;
		$data['allowed_types'] = 'gif|jpg|jpeg|png';
		$data['max_size'] = '1000';
		$data['file_name'] = $photo_name;
	}
	if (!empty($_FILES['selectedStu']['name'])) {
		$this->upload->initialize($data);
		$this->upload->do_upload('selectedStu');
		echo "ho gya";
			
		redirect(base_url()."login/gallery");
		//echo $image_path;
	}
	else{
		echo "Somthing going wrong. Please Contact Site administrator";
	}
}
}




?>