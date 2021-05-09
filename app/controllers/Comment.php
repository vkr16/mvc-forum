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

					$point = $this->model('User_model')->getUserPointById($c);
					$newPoint = $point['points'] + 17;
					if ($newPoint >= 0 && $newPoint < 500) {
						$newRank = "Newbie";
					}elseif ($newPoint >= 500 && $newPoint < 1000) {
						$newRank = "Helper";
					}elseif ($newPoint >= 1000 && $newPoint < 2000) {
						$newRank = "Ambitious";
					}elseif ($newPoint >= 2000 && $newPoint < 3500) {
						$newRank = "Educated";
					}elseif ($newPoint >= 3500 && $newPoint < 6000) {
						$newRank = "Expert";
					}elseif ($newPoint >= 6000 && $newPoint < 10000) {
						$newRank = "Professional";
					}elseif ($newPoint >= 10000) {
						$newRank = "Genius";
						if ($newPoint >= 99999) {
							$newRank = "Brilliant";
							$newPoint = 99999;
						}
					}
					
					if ($this->model('User_model')->updateUserPoint($c,$newPoint,$newRank) > 0) {
						header('Location:'.ROOTURL.'/post/'.$a);
					}
				}
			}else{
				header('Location:'.ROOTURL.'/post/'.$a);
			}

		}

	}

	

}