<?php 

class Profile extends Controller {
	public function index()
	{
		$this->model('User_model')->isLoggedOut();
		
		$data['title'] = "Profile";
		$this->view('template/header',$data);
		$this->view('template/nav-inside');
		$this->view('template/profile-left-panel');
		$this->view('profile/index');
		$this->view('template/footer');
	}
}