<?php 

/**
 * 
 */
class Comment_model
{
	
	public function __construct()
	{
        $this->db = new Database;
	}

	public function insertComment($a,$b,$c)
	{
		$postId=$a;
		$comment=$b;
		$commenter=$c;

		$this->db->query('INSERT INTO comments (commenter,content,post_id) VALUES (:commenter,:content,:post_id)');
		$this->db->bind('commenter',$commenter);
		$this->db->bind('content',$comment);
		$this->db->bind('post_id',$postId);

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function commentLoad($postId)
	{
		$this->db->query('SELECT * FROM comments WHERE post_id =:postId ORDER BY id DESC');
		$this->db->bind('postId' , $postId);
		// $this->db->execute();
		return $this->db->resultSet();
	}

	public function commentCount($postId)
	{
		$this->db->query('SELECT * FROM comments WHERE post_id =:postId');
		$this->db->bind('postId' , $postId);
		$this->db->execute();
		return $this->db->rowCount();
	}

	public function countMyComments($userId)
	{
		$this->db->query('SELECT * FROM comments WHERE commenter=:userId');
		$this->db->bind('userId',$userId);
		$this->db->execute();
		return $this->db->rowCount();
	}

	public function getAllMyComments($userId)
	{
		$this->db->query('SELECT * FROM comments WHERE commenter=:userId ORDER BY id DESC');
		$this->db->bind('userId',$userId);
		$this->db->execute();
		return $this->db->resultSet();
	}

	public function whichPost($postId)
	{
		$this->db->query('SELECT * FROM posts WHERE id=:postId');
		$this->db->bind('postId',$postId);
		$this->db->execute();
		return $this->db->resultSet();
	}

	public function getLastComment()
	{
		$this->db->query('SELECT id FROM comments ORDER BY id DESC LIMIT 1');
		$this->db->execute();
		return $this->db->single();
	}

	public function getCommentById($id)
	{
		$this->db->query('SELECT * FROM comments WHERE id=:id');
		$this->db->bind('id', $id);
		$this->db->execute();

		return $this->db->resultSet();
	}
}