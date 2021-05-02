<?php 

class Profile extends Controller {
	public function index()
	{
		$this->model('User_model')->isLoggedOut();
		$data['user'] = $this->model('User_model')->getUserData($_SESSION['UserLoggedIn']);


		$data['userPost'] = $this->model('Post_model')->getPostFromThisUser($data['user']['id']);
		$data['postCount'] = $this->model('Post_model')->countPostFromThisUser($data['user']['id']);
		for ($i=0; $i < $data['postCount'] ; $i++) { 
			$timeConvert = $this->model('Post_model')->convertTime($data['userPost'][$i]['time_posted']);

			$data['userPost'][$i]['date'] = $timeConvert['date'];
			$data['userPost'][$i]['hour'] = $timeConvert['hour'];
		}

		// var_dump($userPost);die();
		$data['title'] = "Profile";
		$this->view('template/header',$data);
		$this->view('template/nav-inside');
		$this->view('template/profile-left-panel',$data);
		$this->view('profile/index',$data);
		$this->view('template/footer');
	}
}