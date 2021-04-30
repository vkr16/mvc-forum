<?php 

class Dashboard extends Controller {
	public function index()
	{
		$this->model('User_model')->isLoggedOut();
		$data['user'] = $this->model('User_model')->getUserData($_SESSION['UserLoggedIn']);
		$data['top10'] = $this->model('User_model')->getTop();

		$data['count'] = count($data['top10']);

		$data['title'] = "Dashboard";
		$this->view('template/header',$data);
		$this->view('template/nav-inside');	
		$this->view('template/left-panel');
		$this->view('dashboard/index');
		$this->view('template/right-panel',$data);
		$this->view('template/footer');
		
	}


	public function submitPost()
	{	
		$userData = $this->model('User_model')->getUserData($_SESSION['UserLoggedIn']);
		$owner = $userData['id'];
		// var_dump($UserId);
		if ($this->model('Post_model')->storePost($_POST,$owner) > 0) {
			header('Location:'.ROOTURL.'/dashboard');
		}
	}
}