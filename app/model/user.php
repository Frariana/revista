<?php
	class User{
		private $db;
		private $name_base = DB_NAME;
		public function __construct(){
			$this->db = new Db;
		}

		public function getUser($email){
			$this->db->query("SELECT * FROM ".$this->name_base.".users WHERE email = :email");
            $this->db->bind(':email', $email);
            $res = $this->db->row();
            return $res;
		}
	}
?>