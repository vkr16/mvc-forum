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
}