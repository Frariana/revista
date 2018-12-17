<?php
	class User{
		private $db;
		private $name_base = DB_NAME;

		public function __construct(){
			$this->db = new Db;
		}

		public function getAllUsers(){
			$this->db->query("SELECT * FROM ".$this->name_base.".users");
            $res = $this->db->rows();
            return $res;
		}

		public function getUserForEmail($email){
			$this->db->query("SELECT * FROM ".$this->name_base.".users WHERE email = :email");
            $this->db->bind(':email', $email);
            $res = $this->db->row();
            return $res;
		}

		public function getUserForId($id){
			$this->db->query("SELECT * FROM ".$this->name_base.".users WHERE id_user = :id");
            $this->db->bind(':id', $id);
            $res = $this->db->row();
            return $res;
		}

		public function insert($data){
			$this->db->query("INSERT INTO ".$this->name_base.".users (email, rol, user, password) VALUES (:email, :rol, :user, :password)");
			$this->db->bind(':email', $data['email']);
			$this->db->bind(':rol', $data['rol']);
			$this->db->bind(':user', $data['user']);
			$this->db->bind(':password', $data['password']);

			if ($this->db->execute()){
                return true;
            }else{
                return false;
            }
		}

		public function update($data){
			$this->db->query("UPDATE ".$this->name_base.".users SET email = :email, rol = :rol, user = :user WHERE id_user = :id_user");
			$this->db->bind(':id_user', $data['id_user']);
			$this->db->bind(':email', $data['email']);
			$this->db->bind(':rol', $data['rol']);
			$this->db->bind(':user', $data['user']);
			if ($this->db->execute()){
				return true;
			}else{
				return false;
			}
		}

		public function delete($id){
			$this->db->query("DELETE from ".$this->name_base.".users where id_user = :id");
			$this->db->bind(':id', $id);
			if ($this->db->execute()){
				return true;
			}else{
				return false;
			}
		}

		public function cambiarClave($data){
			$data['passwordActual'] = sha1($data['passwordActual']);
			$data['password2']      = sha1($data['password2']);

			$this->db->query("SELECT password FROM ".$this->name_base.".users WHERE id_user = :id");
			$this->db->bind(':id', $data['idUser']);
			$res = $this->db->row();
			
			if ($res->password == $data['passwordActual']){
				$this->db->query("UPDATE ".$this->name_base.".users SET password = :password WHERE id_user = :id");
				$this->db->bind(':id', $data['idUser']);
				$this->db->bind(':password', $data['password2']);
				if ($this->db->execute()){
					return true;
				}else{
					return false;
				}
			}else{
				return false;
			}
		}
	}
?>