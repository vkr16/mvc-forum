<?php 

class User_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function checkUsername($data)
    {
    	$this->db->query('SELECT * FROM users WHERE username=:username');
    	$this->db->bind('username', $data['username']);
    	return count($this->db->resultSet());
    }

    public function checkEmail($data)
    {
    	$this->db->query('SELECT * FROM users WHERE email=:email');
    	$this->db->bind('email', $data['email']);
    	return count($this->db->resultSet());
    }

    public function register($data)
    {
    	$query = "INSERT INTO users (fullname, username, email, password)
                    VALUES
                  (:fullname, :username, :email, :password)";
        
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        $this->db->query($query);
        $this->db->bind('fullname', $data['fullname']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', $data['password']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function login($data)
    {
        $this->db->query('SELECT password FROM users WHERE username=:username');
        $this->db->bind('username',$data['username']);
        $result = $this->db->single();
        $passwordInDB = $result['password'];
        if (password_verify($data['password'], $passwordInDB)) {
            return true;
        }else{
            return false;
        }
    }

    public function isLoggedIn()
    {
        if (isset($_SESSION['UserLoggedIn'])) {
            header('Location:'.ROOTURL.'/dashboard');
        }
    }

    public function isLoggedOut()
    {
        if (!isset($_SESSION['UserLoggedIn'])) {
            header('Location:'.ROOTURL.'/login');
        }
    }

    public function getUserData($data)
    {
        $username = $_SESSION['UserLoggedIn'];
        $this->db->query('SELECT * FROM users WHERE username=:username');
        $this->db->bind('username',$username);
        return $this->db->single();
    }

    public function getTop()
    {
        $this->db->query('SELECT * FROM users ORDER BY points DESC LIMIT 10 ');
        return $this->db->resultSet();
    }

    public function getUserById($id)
    {
        $this->db->query('SELECT * FROM users WHERE id=:id');
        $this->db->bind('id',$id);
        // $this->db->execute();
        return $this->db->resultSet();
    }

    public function getUserPointById($id)
    {
        $this->db->query('SELECT * FROM users WHERE id=:id');
        $this->db->bind('id',$id);
        return $this->db->single();
    }

    public function updateUserPoint($id,$point,$rank)
    {
        $this->db->query('UPDATE users SET points =:points , rank=:rank WHERE id=:id');
        $this->db->bind('points',$point);
        $this->db->bind('rank',$rank);
        $this->db->bind('id',$id);
        $this->db->execute();
        return $this->db->rowCount();

    }

}