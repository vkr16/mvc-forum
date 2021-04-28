<?php 

class Search extends Controller {
	public function index()
	{
		$this->model('User_model')->isLoggedOut();
		
		$data['title'] = "Profile";
		$this->view('template/header',$data);
		$this->view('template/nav-inside');
		$this->view('template/left-panel');
		$this->view('search/index');
		$this->view('template/right-panel');
		$this->view('template/footer');
	}
}