<?php 

class Dashboard extends Controller {
	public function index()
	{
		$this->model('User_model')->isLoggedOut();

		$data['title'] = "Dashboard";
		$this->view('template/header',$data);
		$this->view('template/nav-inside');	
		$this->view('template/left-panel');
		$this->view('dashboard/index');
		$this->view('template/right-panel');
		$this->view('template/footer');
		
	}
}