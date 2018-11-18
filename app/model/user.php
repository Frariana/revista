<?php
	class User{
		private $db;

		public function __construct(){
			$this->db = new Db;
			$this->verificarDatabase();
		}

		private function verificarDatabase(){
			$this->db->query('CREATE DATABASE IF NOT EXISTS revista;');
			$this->db->query('
				CREATE TABLE IF NOT EXISTS users (
					id_user MEDIUMINT NOT NULL AUTO_INCREMENT,
				  	email varchar(60) NOT NULL,
				  	rol varchar(60) NOT NULL,
				  	user varchar(255)  NOT NULL
				  	PRIMARY KEY (id_user)
				) ENGINE=InnoDB DEFAULT CHARSET=utf8;
			');
		}

		public function getUser($email){
			$this->db->query('SELECT * FROM users WHERE email = :email');
            $this->db->bind(':email', $email);
            $res = $this->db->row();
            return $res;
		}
	}
?>