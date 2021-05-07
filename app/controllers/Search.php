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
		
		$data['title'] = "Profile";
		$this->view('template/header',$data);
		$this->view('template/nav-inside');
		// $this->view('template/left-panel');
		$this->view('search/index',$data);
		$this->view('template/right-panel',$data);
		$this->view('template/footer');
	}
}