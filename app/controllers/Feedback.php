<?php 

class Feedback extends Controller {
	public function page_not_found()
	{
		// $this->model('User_model')->isLoggedIn();
		
		$data['title'] = "Home Page";
		$this->view('template/header',$data);
		// $this->view('template/navigation');	
		$this->view('error-page/page_not_found');
	}
}