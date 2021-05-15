<?php

/**
 * 
 */
class Comment_model
{

	public function __construct()
	{
		$this->db = new Database;
		date_default_timezone_set("Asia/Bangkok");
	}

	public function insertComment($a, $b, $c)
	{
		$postId = $a;
		$comment = $b;
		$commenter = $c;
		$current_time = date("Y-m-d H:i:s");

		$this->db->query('INSERT INTO comments (commenter,content,post_id,time_commented) VALUES (:commenter,:content,:post_id,:time_commented)');
		$this->db->bind('commenter', $commenter);
		$this->db->bind('content', $comment);
		$this->db->bind('post_id', $postId);
		$this->db->bind('time_commented', $current_time);

		$this->db->execute();
		$return = $this->db->rowCount();
		return $return;
		$this->db = null;
	}

	public function commentLoad($postId)
	{
		$this->db->query('SELECT * FROM comments WHERE post_id =:postId ORDER BY id DESC');
		$this->db->bind('postId', $postId);
		// $this->db->execute();
		$return = $this->db->resultSet();
		$this->db = null;
		return $return;
	}

	public function commentCount($postId)
	{
		$this->db->query('SELECT * FROM comments WHERE post_id =:postId');
		$this->db->bind('postId', $postId);
		$this->db->execute();
		$return = $this->db->rowCount();
		$this->db = null;
		return $return;
	}

	public function countMyComments($userId)
	{
		$this->db->query('SELECT * FROM comments WHERE commenter=:userId');
		$this->db->bind('userId', $userId);
		$this->db->execute();
		$return = $this->db->rowCount();
		$this->db = null;
		return $return;
	}

	public function getAllMyComments($userId)
	{
		$this->db->query('SELECT * FROM comments WHERE commenter=:userId ORDER BY id DESC');
		$this->db->bind('userId', $userId);
		$this->db->execute();
		$return = $this->db->resultSet();
		$this->db = null;
		return $return;
	}

	public function whichPost($postId)
	{
		$this->db->query('SELECT * FROM posts WHERE id=:postId');
		$this->db->bind('postId', $postId);
		$this->db->execute();
		$return = $this->db->resultSet();
		$this->db = null;
		return $return;
	}

	public function getLastComment()
	{
		$this->db->query('SELECT id FROM comments ORDER BY id DESC LIMIT 1');
		$this->db->execute();
		$return = $this->db->single();
		$this->db = null;
		return $return;
	}

	public function getCommentById($id)
	{
		$this->db->query('SELECT * FROM comments WHERE id=:id');
		$this->db->bind('id', $id);
		$this->db->execute();
		$return = $this->db->resultSet();
		$this->db = null;
		return $return;
	}

	public function deleteComment($post_id)
	{
		$this->db->query('DELETE FROM comments WHERE post_id=:post_id');
		$this->db->bind('post_id', $post_id);
		$this->db->execute();
		$return = $this->db->rowCount();
		$this->db = null;
		return $return;
	}
}
