<?php 

class Profile extends Controller {
	public function index()
	{
		$this->model('User_model')->isLoggedOut();
		$data['user'] = $this->model('User_model')->getUserData($_SESSION['UserLoggedIn']);

		// $this->model('Post_model')->getPostFromThisUser($_SESSION['UserLoggedIn']);
		$data['title'] = "Profile";
		$this->view('template/header',$data);
		$this->view('template/nav-inside');
		$this->view('template/profile-left-panel',$data);
		$this->view('profile/index');
		$this->view('template/footer');
	}
}