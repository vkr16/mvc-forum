<?php 

class Dashboard extends Controller {
	public function index($category = 'All',$rows = 10)
	{	

		$data['rows']=$rows;
		// var_dump($data['rows']);
		switch ($category) {
			case 'All':
				break;

			case 'General':
				break;

			case 'Programming':
				break;

			case 'Gaming':
				break;

			case 'Music':
				break;

			case 'Movie':
				break;

			case 'Book':
				break;

			case 'Art':
				break;

			default:
				header('Location:'.ROOTURL.'/dashboard');
				break;
		}
		$this->model('User_model')->isLoggedOut();
		$data['user'] = $this->model('User_model')->getUserData($_SESSION['UserLoggedIn']);


		$data['top10'] = $this->model('User_model')->getTop();

		$data['count'] = count($data['top10']);

		if ($category == 'All') {
			$data['categoryshow']="All Category";
		}else{
			$data['categoryshow']=$category;
		}

		if ($category == 'All') {
			$data['category']="All";
		}else{
			$data['category']=$category;
		}
		$categoryLogo = $this->model('Post_model')->getCategoryLogo($category);
		$data['logo'] = $categoryLogo;

		if ($category == 'All') {
			$data['post'] = $this->model('Post_model')->getAllPost($data['rows']);
			$postCount = $this->model('Post_model')->countAllPost($data['rows']);
			
			for ($i=0; $i < $postCount ; $i++) { 
				// # code...
				$userData = $this->model('User_model')->getUserById($data['post'][$i]['owner']);
				$timeConvert = $this->model('Post_model')->convertTime($data['post'][$i]['time_posted']);
				$commentCount = $this->model('Comment_model')->commentCount($data['post'][$i]['id']);
				$data['post'][$i]['date'] = $timeConvert['date'];
				$data['post'][$i]['hour'] = $timeConvert['hour'];
				$data['post'][$i]['ppowner'] = $userData[0]['photo'];
				$data['post'][$i]['ownername'] = $userData[0]['username'];
				$data['post'][$i]['comments'] = $commentCount;
				
			}
			// $data['postCount'] = $postCount;
			// if ($data['postCount'] <= $data['rows']) {
			// 	$data['visib'] = 'hidden';
			// }else{
			// 	$data['visib'] = 'visible';
			// }
		}else{
			// $data['post'] = $this->model('Post_model')->getPostByCategory($category);
			$data['post'] = $this->model('Post_model')->getPostByCategory($category,$rows);
			$postCount = $this->model('Post_model')->countPostByCategory($category,$rows);
			
			for ($i=0; $i < $postCount ; $i++) { 
				$userData = $this->model('User_model')->getUserById($data['post'][$i]['owner']);
				$timeConvert = $this->model('Post_model')->convertTime($data['post'][$i]['time_posted']);
				$commentCount = $this->model('Comment_model')->commentCount($data['post'][$i]['id']);

				$data['post'][$i]['comments'] = $commentCount;
				
				$data['post'][$i]['date'] = $timeConvert['date'];
				$data['post'][$i]['hour'] = $timeConvert['hour'];
				$data['post'][$i]['ppowner'] = $userData[0]['photo'];
				$data['post'][$i]['ownername'] = $userData[0]['username'];
			}
			
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
		}
		
		#load notif end



		$data['title'] = "Dashboard";
		$this->view('template/header',$data);
		$this->view('template/nav-inside',$data);	
		$this->view('template/left-panel');
		$this->view('dashboard/index',$data);
		$this->view('template/right-panel',$data);
		$this->view('template/footer');
		
	}

	public function submitPost()
	{	
		$userData = $this->model('User_model')->getUserData($_SESSION['UserLoggedIn']);
		$owner = $userData['id'];
		if ($this->model('Post_model')->storePost($_POST,$owner) > 0) {
			header('Location:'.ROOTURL.'/dashboard');
		}
	}

	
}