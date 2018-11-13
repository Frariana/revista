<?php
	class User{
		private $db;

		public function __construct(){
			$this->db = new Db;
		}
		public function getUser($email){
			$this->db->query('SELECT * FROM users WHERE email = :email');
            $this->db->bind(':email', $email);
            $res = $this->db->row();
            return $res;
		}
	}
?>