<?php 

class Profile extends Controller {
	public function index()
	{
		$this->model('User_model')->isLoggedOut();
		$data['user'] = $this->model('User_model')->getUserData($_SESSION['UserLoggedIn']);
		$data['totalComment'] = $this->model('Comment_model')->countMyComments($data['user']['id']);



		$data['userPost'] = $this->model('Post_model')->getPostFromThisUser($data['user']['id']);
		$data['postCount'] = $this->model('Post_model')->countPostFromThisUser($data['user']['id']);
		for ($i=0; $i < $data['postCount'] ; $i++) { 
			$timeConvert = $this->model('Post_model')->convertTime($data['userPost'][$i]['time_posted']);
			$commentCount = $this->model('Comment_model')->commentCount($data['userPost'][$i]['id']);

			$data['userPost'][$i]['comments'] = $commentCount;

			$data['userPost'][$i]['date'] = $timeConvert['date'];
			$data['userPost'][$i]['hour'] = $timeConvert['hour'];
		}

		// getting all comments from this user
		
		$data['myComments'] = $this->model('Comment_model')->getAllMyComments($data['user']['id']);

		for ($i=0; $i < $data['totalComment']; $i++) { 
			// var_dump($data['myComments'][$i]['content']);
			$data['myComments']['thisPost'][$i] = $this->model('Comment_model')->whichPost($data['myComments'][$i]['post_id']);

			$data['myComments']['thisPost'][$i][0]['content'] = substr($data['myComments']['thisPost'][$i][0]['content'], 0,40);
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