<?php 

/**
 * 
 */
class Post_model
{
	
	public function __construct()
	{
        $this->db = new Database;
	}

	public function storePost($data,$owner)
	{
		$this->db->query('INSERT INTO posts (owner,content,category) VALUES (:owner,:content,:category)');
		$this->db->bind('owner',$owner);
		$this->db->bind('content', $data['postfield']);
		$this->db->bind('category',$data['category']);

		$this->db->execute();
        return $this->db->rowCount();
	}

	public function getCategoryLogo($data)
	{
		switch ($data) {
			case 'All Category':
				return 'fas fa-asterisk';
				break;
			
			case 'Programming':
				return 'fas fa-code';
				break;

			case 'Gaming':
				return 'fas fa-gamepad';
				break;

			case 'Music':
				return 'fas fa-music';
				break;

			case 'Movie':
				return 'fas fa-film';
				break;

			case 'Book':
				return 'fas fa-book';
				break;

			case 'Art':
				return 'fas fa-paint-brush';
				break;

			default:
				return 'fas fa-users';
				break;
		}
	}

	public function getAllPost()
	{
		$this->db->query('SELECT * FROM posts ORDER BY id DESC');
		$result = $this->db->resultSet();
		$total  = $this->db->rowCount();
		
		return $result;
	}

	public function countAllPost()
	{
		$this->db->query('SELECT * FROM posts');
		$this->db->execute();
		$total  = $this->db->rowCount();
		
		return $total;
	}

	public function getPostByCategory($category)
	{
		$this->db->query('SELECT * FROM posts WHERE category=:category ORDER BY id DESC');
		$this->db->bind('category',$category);
		$result = $this->db->resultSet();
		
		return $result;
	}

	public function countPostByCategory($category)
	{
		$this->db->query('SELECT * FROM posts WHERE category=:category');
		$this->db->bind('category',$category);
		$this->db->execute();
		$total  = $this->db->rowCount();
		
		return $total;
	}

	public function convertTime($datetime){

	}
}