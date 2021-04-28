<?php 

class Home extends Controller {
	public function index()
	{
		$this->model('User_model')->isLoggedIn();
		
		$data['title'] = "Home Page";
		$this->view('template/header',$data);
		$this->view('template/navigation');	
		$this->view('home/index');
	}
}