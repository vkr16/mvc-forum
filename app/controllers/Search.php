<?php 

class Search extends Controller {
	public function index()
	{
		$this->model('User_model')->isLoggedOut();
		$data['user'] = $this->model('User_model')->getUserData($_SESSION['UserLoggedIn']);
		$data['top10'] = $this->model('User_model')->getTop();

		$data['count'] = count($data['top10']);
		
		$data['title'] = "Profile";
		$this->view('template/header',$data);
		$this->view('template/nav-inside');
		// $this->view('template/left-panel');
		$this->view('search/index');
		$this->view('template/right-panel',$data);
		$this->view('template/footer');
	}
}