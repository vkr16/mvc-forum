<?php 

class Dashboard extends Controller {
	public function index($category = 'All Category')
	{	
		switch ($category) {
			case 'All Category':
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

		$data['category']=$category;
		$categoryLogo = $this->model('Post_model')->getCategoryLogo($category);
		$data['logo'] = $categoryLogo;

		if ($category == 'All Category') {
			$data['post'] = $this->model('Post_model')->getAllPost();
			$postCount = $this->model('Post_model')->countAllPost();
			
			for ($i=0; $i < $postCount ; $i++) { 
				// # code...
				$userData = $this->model('User_model')->getUserById($data['post'][$i]['owner']);
				$data['post'][$i]['ppowner'] = $userData[0]['photo'];
				$data['post'][$i]['ownername'] = $userData[0]['username'];
			}

		}else{
			$data['post'] = $this->model('Post_model')->getPostByCategory($category);
			$data['post'] = $this->model('Post_model')->getPostByCategory($category);
			$postCount = $this->model('Post_model')->countPostByCategory($category);
			
			for ($i=0; $i < $postCount ; $i++) { 
				// # code...
				$userData = $this->model('User_model')->getUserById($data['post'][$i]['owner']);
				$data['post'][$i]['ppowner'] = $userData[0]['photo'];
				$data['post'][$i]['ownername'] = $userData[0]['username'];
			}
		}



		$data['title'] = "Dashboard";
		$this->view('template/header',$data);
		$this->view('template/nav-inside');	
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