<?php 

/**
 * 
 */
class Notification_model 
{
	public function __construct()
	{
        $this->db = new Database;
	}

	public function saveNotification($lcid,$c_username,$d,$powner)
	{
		$this->db->query('INSERT INTO notifications (comment_id,sender_username,sender_photo,recipient) VALUES (:comment_id,:sender_username,:sender_photo,:notif_recipient)');
		$this->db->bind('comment_id',$lcid);
		$this->db->bind('sender_username',$c_username);
		$this->db->bind('sender_photo',$d);
		$this->db->bind('notif_recipient',$powner);
		$this->db->execute();
		$return = $this->db->rowCount();
		$this->db = null;
		return $return;
	}

	public function notificationLoader($userId)
	{
		$this->db->query('SELECT * FROM notifications WHERE recipient=:myuserid ORDER BY id DESC LIMIT 50');
		$this->db->bind('myuserid',$userId);	
		$this->db->execute();
		$return = $this->db->resultSet();
		$this->db = null;
		return $return;
	}

	public function notificationCount($userId)
	{
		$this->db->query('SELECT * FROM notifications WHERE recipient=:myuserid');
		$this->db->bind('myuserid',$userId);	
		$this->db->execute();
		$return = $this->db->rowCount();
		$this->db = null;
		return $return ;
	}
}