<?php 

class Post extends Controller {
	public function index($postId)
	{
		// $data['post_id'] =$postId;
		$this->model('User_model')->isLoggedOut();
		$data['user'] = $this->model('User_model')->getUserData($_SESSION['UserLoggedIn']);
		$data['top10'] = $this->model('User_model')->getTop();

		if ($data['post'] = $this->model('Post_model')->getPostById($postId) == NULL) {
			   header('Location:'.ROOTURL.'/feedback/page_not_found');
		}

		$data['post'] = $this->model('Post_model')->getPostById($postId);
		$data['owner'] = $this->model('User_model')->getUserById($data['post']['owner']);


		$data['time'] = $this->model('Post_model')->convertTime($data['post']['time_posted']);
		$data['count'] = count($data['top10']);



		// load comment
		$data['comments'] = $this->model('Comment_model')->commentLoad($postId);
		$commentCount = $this->model('Comment_model')->commentCount($postId);

		for ($i=0; $i < $commentCount; $i++) { 
			$userData = $this->model('User_model')->getUserById($data['comments'][$i]['commenter']);
			$timeConvert = $this->model('Post_model')->convertTime($data['comments'][$i]['time_commented']);
			$data['comments'][$i]['date'] = $timeConvert['date'];
			$data['comments'][$i]['hour'] = $timeConvert['hour'];
			$data['comments'][$i]['photo'] = $userData[0]['photo'];
			$data['comments'][$i]['username'] = $userData[0]['username'];

		}


		
		$data['title'] = "View post";
		$this->view('template/header',$data);
		$this->view('template/nav-inside');
		$this->view('post/index',$data);
		$this->view('template/right-panel',$data);
		$this->view('template/footer');
	}

	public function delete($id)
	{
		if ($this->model('Post_model')->deletePost($id) > 0) {
			echo '<script type="text/javascript">
						console.log("Post has been removed successfully");
					</script>';
			header('Location:'.ROOTURL.'/profile');
		}
	}

	public function comment($id)
	{ 
		var_dump($id);
	}


}