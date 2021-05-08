<?php 

class Comment extends Controller {
	public function post($postId)
	{

		$a = $postId;
		$b = $_POST['comment'];
		$c_username = $_SESSION['UserLoggedIn'];

		// var_dump($a,$b,$c);

		$user = $this->model('User_model')->getUserData($c_username);

		$c = $user['id'];
		$d = $user['photo'];
		if ($this->model('Comment_model')->insertComment($a,$b,$c) > 0) 
		{
			$lastCommentId = $this->model('Comment_model')->getLastComment();
			$getPostOwner = $this->model('Post_model')->getPostOwnerByPostId($a);


			$lcid = $lastCommentId['id'];
			$powner = $getPostOwner['owner'];
			// var_dump($lastCommentId);die();
			if ($powner != $c) {
				if ($this->model('Notification_model')->saveNotification($lcid,$c_username,$d,$powner) > 0) {
					header('Location:'.ROOTURL.'/post/'.$a);
				}
			}else{
				header('Location:'.ROOTURL.'/post/'.$a);
			}

		}

	}

	

}