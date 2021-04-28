<?php 

class Login extends Controller {
	public function index($err = 0)
	{	
		$this->model('User_model')->isLoggedIn();


		if (isset($_COOKIE['errCode'])) {
			if ($_COOKIE['errCode'] == 303) {
				$data['feedback'] = '';
				unset($_COOKIE['errCode']);
				session_destroy();
			}else{
				$data['feedback'] = 'hidden';
			}
		}else{
			$data['feedback'] = 'hidden';
		}
		$data['title'] = "Login Page";
		$this->view('template/header', $data);
		$this->view('template/navigation');
		$this->view('login/index',$data);
		$this->view('template/footer');
	}

	public function isUserExist()
	{
		if ($this->model('User_model')->checkUsername($_POST) < 1) {
          echo '&nbsp;<i class="fas fa-exclamation-circle fa-fw"></i>&nbsp;User not found';
		}else{
			echo "<i></i>";
		}
	}

	public function userLogin()
	{
		if ($this->model('User_model')->Login($_POST)) {
			$_SESSION['UserLoggedIn'] = $_POST['username'];
			// header('Set-Cookie: errCode=0');
			setcookie("errCode", 0,time()+5);
			header('Location:'.ROOTURL.'/dashboard');

		}else{
			setcookie("errCode", 303,time()+5);
			header('Location:'.ROOTURL.'/login');
		}
	}
}