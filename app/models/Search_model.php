<?php

/**
 * 
 */
class Search_model
{

	public function __construct()
	{
		$this->db = new Database;
		date_default_timezone_set("Asia/Bangkok");
	}

	public function find($searchQuery)
	{
		$this->db->query('SELECT * FROM posts WHERE content LIKE :searchQuery ORDER BY id DESC');

		$this->db->bind('searchQuery', '%' . $searchQuery . '%');
		$return = $this->db->resultSet();
		$this->db = null;
		return $return;
	}

	public function countSearch($searchQuery)
	{
		$this->db->query('SELECT * FROM posts WHERE content LIKE :searchQuery');
		$this->db->bind('searchQuery', '%' . $searchQuery . '%');
		$this->db->execute();
		$return = $this->db->rowCount();
		$this->db = null;
		return $return;
	}
}
