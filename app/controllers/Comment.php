<?php 

class Comment extends Controller {
	public function post($postId)
	{

		$a = $postId;
		$b = $_POST['comment'];
		$c = $_SESSION['UserLoggedIn'];

		var_dump($a,$b,$c);

		$user = $this->model('User_model')->getUserData($c);

		$c = $user['id'];
		if ($this->model('Comment_model')->insertComment($a,$b,$c) > 0) {
			header('Location:'.ROOTURL.'/post/'.$a);
		}

	}
}