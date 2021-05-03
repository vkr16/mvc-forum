<?php 

class Post extends Controller {
	public function index($postId)
	{
		// $data['post_id'] =$postId;
		$this->model('User_model')->isLoggedOut();
		$data['user'] = $this->model('User_model')->getUserData($_SESSION['UserLoggedIn']);
		$data['top10'] = $this->model('User_model')->getTop();

		$data['post'] = $this->model('Post_model')->getPostById($postId);
		$data['owner'] = $this->model('User_model')->getUserById($data['post']['owner']);


		$data['time'] = $this->model('Post_model')->convertTime($data['post']['time_posted']);



		$data['count'] = count($data['top10']);
		
		$data['title'] = "View post";
		$this->view('template/header',$data);
		$this->view('template/nav-inside');
		$this->view('post/index',$data);
		$this->view('template/right-panel',$data);
		$this->view('template/footer');
	}

}