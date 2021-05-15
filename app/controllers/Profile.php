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

			$timeConvert = $this->model('Post_model')->convertTime($data['myComments'][$i]['time_commented']);

			$data['myComments'][$i]['date'] = $timeConvert['date'];
			$data['myComments'][$i]['hour'] = $timeConvert['hour'];
		}


		#load notif start
		$data['ntf'] = $this->model('Notification_model')->notificationLoader($data['user']['id']);
		$data['ntfCount'] = $this->model('Notification_model')->notificationCount($data['user']['id']);
		for ($i=0; $i < $data['ntfCount'] ; $i++) { 
			$data['cmts'] = $this->model('Comment_model')->getCommentById($data['ntf'][$i]['comment_id']);
			$data['dPost'] = $this->model('Post_model')->getPostById($data['cmts'][0]['post_id']);

			$data['postContent'][$i] = $data['dPost']['content'];
			$data['postContent'][$i] = mb_strimwidth($data['postContent'][$i], 0,25,"...");
			$data['pstId'][$i] = $data['dPost']['id'];
			// var_dump($data['postContent'][$i]);echo "<br><br>";
			$data['cmt'][$i] = $data['cmts'][0]['content'];
			$data['cmt'][$i] = mb_strimwidth($data['cmt'][$i], 0,50,"...");
			$data['notifPhoto'][$i] = $data['ntf'][$i]['sender_photo'];
			$data['notifUsername'][$i] = $data['ntf'][$i]['sender_username'];
			$convertedTime = $this->model('Post_model')->convertTime($data['ntf'][$i]['time_notified']);
			$data['date'][$i] = $convertedTime['date'];
			$data['hour'][$i] = $convertedTime['hour'];
		}
		
		#load notif end

		// var_dump($userPost);die();
		$data['title'] = "Profile";
		$this->view('template/header',$data);
		$this->view('template/nav-inside',$data);
		$this->view('template/profile-left-panel',$data);
		$this->view('profile/index',$data);
		$this->view('template/footer');
	}



	public function uploadPhoto()
	{
		 if(!empty($_FILES['uploaded_file']))
		  {
		    $path = $_SERVER['DOCUMENT_ROOT']."/mvc-forum/public/assets/img/profile-img/";
		    $path2 = $_FILES['uploaded_file']['name'];
		    $ext = pathinfo($path2, PATHINFO_EXTENSION);
		    // var_dump($ext);die();
		    // $path = $path . basename( $_FILES['uploaded_file']['name']);
		    $path = $path . $_SESSION['UserLoggedIn'].'.'. $ext;

		    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
		      $photoName = $_SESSION['UserLoggedIn'].'.'. $ext;
			  $data['user'] = $this->model('User_model')->getUserData($_SESSION['UserLoggedIn']);

		      $this->model('User_model')->updateUserPhoto($data['user']['id'],$photoName);
		      header('Location:'.ROOTURL.'/profile');
		    } else{
		        echo "There was an error uploading the file, please try again!";
		    }
		  }
	}

}