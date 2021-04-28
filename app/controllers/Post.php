<?php 

class Post extends Controller {
	public function index()
	{
		$this->model('User_model')->isLoggedOut();
		
		$data['title'] = "View post";
		$this->view('template/header',$data);
		$this->view('template/nav-inside');
		$this->view('post/index');
		$this->view('template/right-panel');
		$this->view('template/footer');
	}
}