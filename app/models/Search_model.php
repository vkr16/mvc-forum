<?php 

/**
 * 
 */
class Search_model
{
	
	public function __construct()
	{
        $this->db = new Database;
	}

	public function find($searchQuery)
	{
		$this->db->query('SELECT * FROM posts WHERE content LIKE :searchQuery');

		$this->db->bind('searchQuery','%'.$searchQuery.'%');
		return $this->db->resultSet();
	}

	public function countSearch($searchQuery)
	{
		$this->db->query('SELECT * FROM posts WHERE content LIKE :searchQuery');
		$this->db->bind('searchQuery','%'.$searchQuery.'%');
		$this->db->execute();
		return $this->db->rowCount();
	}
}