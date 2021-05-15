<?php 

class Search extends Controller {
	public function index()
	{
		if (!isset($_POST['search'])) {
			header('Location:'.ROOTURL.'/dashboard');
		}
		$this->model('User_model')->isLoggedOut();
		$data['user'] = $this->model('User_model')->getUserData($_SESSION['UserLoggedIn']);
		$data['top10'] = $this->model('User_model')->getTop();

		$data['count'] = count($data['top10']);

		
		$data['searchResult'] = $this->model('Search_model')->find($_POST['search']);
		$data['countResult'] = $this->model('Search_model')->countSearch($_POST['search']);
		for ($i=0; $i < $data['countResult']; $i++) { 
			$data['postDetail'] = $this->model('Post_model')->getPostById($data['searchResult'][$i]['id']);
			$data['userDetail'] = $this->model('User_model')->getUserById($data['postDetail']['owner']);
			$data['searchResult']['postOwnerName'] = $data['userDetail'][0]['username'];
			$data['searchResult']['postOwnerPhoto'] = $data['userDetail'][0]['photo'];
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


		$data['title'] = "Profile";
		$this->view('template/header',$data);
		$this->view('template/nav-inside',$data);
		// $this->view('template/left-panel');
		$this->view('search/index',$data);
		$this->view('template/right-panel',$data);
		$this->view('template/footer');
	}
}