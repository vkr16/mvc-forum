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
}