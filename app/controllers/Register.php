<?php 

class Register extends Controller {
	public function index()
	{
		$this->model('User_model')->isLoggedIn();
		
		$data['title'] = "Register Page";
		$this->view('template/header', $data);
		$this->view('template/navigation');
		$this->view('register/index',$data);
		$this->view('template/footer');

	}

	public function userRegister()
	{
		if ($this->model('User_model')->register($_POST) > 0) {
			header('Location:'.ROOTURL.'/login');
			exit;
		}else{
			header('Location:'.ROOTURL.'/register');
			exit;
		}
	}

	public function checkUsername(){
		if ($this->model('User_model')->checkUsername($_POST) > 0) {
          echo '&nbsp;<i class="fas fa-exclamation-triangle fa-fw"></i>&nbsp;Username already taken';
		}else{
			echo "<i></i>";
		}
	}

	public function checkEmail(){
		if ($this->model('User_model')->checkEmail($_POST) > 0) {
          echo '&nbsp;<i class="fas fa-exclamation-triangle fa-fw"></i>&nbsp;Email already registered';
		}else{
			echo "<i></i>";
		}
	}

	
}