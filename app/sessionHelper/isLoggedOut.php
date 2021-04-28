<?php 

if (!isset($_SESSION['UserLoggedIn'])) {
	header('Location:'.ROOTURL.'/login');
}