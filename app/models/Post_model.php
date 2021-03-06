<?php

/**
 * 
 */
class Post_model
{

	public function __construct()
	{
		$this->db = new Database;
		date_default_timezone_set("Asia/Bangkok");
	}

	public function storePost($data, $owner, $time_posted)
	{
		$this->db->query('INSERT INTO posts (owner,content,category,time_posted) VALUES (:owner,:content,:category,:time_posted)');
		$this->db->bind('owner', $owner);
		$this->db->bind('content', $data['postfield']);
		$this->db->bind('category', $data['category']);
		$this->db->bind('time_posted', $time_posted);

		$this->db->execute();
		$return = $this->db->rowCount();
		$this->db = null;
		return $return;
	}

	public function getCategoryLogo($data)
	{
		switch ($data) {
			case 'All':
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
		$this->db = null;
	}

	public function getAllPost($rows)
	{
		// var_dump($data);

		$this->db->query('SELECT * FROM posts ORDER BY id DESC LIMIT ' . $rows);
		// $this->db->bind('rows',$rows);
		$this->db->execute();
		$result = $this->db->resultSet();

		$this->db = null;
		return $result;
	}

	public function countAllPost($rows)
	{
		// var_dump($rows);
		$this->db->query('SELECT * FROM posts LIMIT ' . $rows);
		// $this->db->bind('rows',$rows);
		$this->db->execute();
		$total  = $this->db->rowCount();

		$this->db = null;
		return $total;
	}

	public function getPostByCategory($category, $rows)
	{
		$this->db->query('SELECT * FROM posts WHERE category=:category ORDER BY id DESC LIMIT ' . $rows);
		$this->db->bind('category', $category);
		$result = $this->db->resultSet();

		$this->db = null;
		return $result;
	}

	public function countPostByCategory($category, $rows)
	{
		$this->db->query('SELECT * FROM posts WHERE category=:category LIMIT ' . $rows);
		$this->db->bind('category', $category);
		$this->db->execute();
		$total  = $this->db->rowCount();

		$this->db = null;
		return $total;
	}

	public function getPostFromThisUser($data)
	{
		$ownerid = $data;
		$this->db->query('SELECT * FROM posts WHERE owner=:ownerid ORDER BY id DESC');
		$this->db->bind('ownerid', $ownerid);
		$return = $this->db->resultSet();
		$this->db = null;
		return $return;
	}

	public function countPostFromThisUser($user)
	{
		$this->db->query('SELECT * FROM posts WHERE owner=:ownerid');
		$this->db->bind('ownerid', $user);
		$this->db->execute();
		$total  = $this->db->rowCount();

		$this->db = null;
		return $total;
	}

	public function convertTime($datetime)
	{
		$chattime = $datetime;
		$stringtime = strtotime($chattime);
		$hour = date('H:i', $stringtime);

		$today = new DateTime();
		$today->setTime(0, 0, 0);

		$match_date = DateTime::createFromFormat("Y-m-d H:i:s", $chattime);
		$match_date->setTime(0, 0, 0);

		$diff = $today->diff($match_date);
		$diffDays = (int)$diff->format("%R%a");

		switch ($diffDays) {
			case 0:
				$theDate =  "Today";
				break;
			case -1:
				$theDate =  "Yesterday";
				break;
			default:
				$theDate =  date('d M Y', $stringtime);
		}
		$time['date'] = $theDate;
		$time['hour'] = $hour;
		$this->db = null;
		return $time;
	}

	public function getPostById($id)
	{
		$this->db->query('SELECT * FROM posts WHERE id=:id');
		$this->db->bind('id', $id);
		$this->db->execute();
		$return =  $this->db->single();
		$this->db = null;
		return $return;
	}

	public function deletePost($id)
	{
		$this->db->query('DELETE FROM posts WHERE id=:id');
		$this->db->bind('id', $id);
		$this->db->execute();
		$return = $this->db->rowCount();
		$this->db = null;
		return $return;
	}

	public function getPostOwnerByPostId($postid)
	{
		$this->db->query('SELECT owner FROM posts WHERE id=:postid');
		$this->db->bind('postid', $postid);
		$this->db->execute();
		$return = $this->db->single();
		$this->db = null;
		return $return;
	}
}
