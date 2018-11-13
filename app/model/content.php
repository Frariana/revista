<?php
	class Content{
		private $db;

		public function __construct(){
			$this->db = new Db;
		}

		public function getContentForId($id){
			$this->db->query('SELECT * FROM content WHERE id_content = :id_content');
            $this->db->bind(':id_content', $id);
            return $this->db->row();
		}

		public function getAllContent(){
			$this->db->query('SELECT * FROM content');
			$res = $this->db->row();
			return $res;
		}

		public function getAllContentForCategory(){

		}

		public function insert(){

		}

		public function update($id){

		}

		public function delete($id){

		}

		public function insertCategory($data){
			$this->db->query('INSERT INTO category (titulo, icono) VALUES (:titulo, :icono)');
            $this->db->bind(':titulo', $data['titulo']);
            $this->db->bind(':icono', $data['icono']);
            if ($this->db->execute()){
                return true;
            }else{
                return false;
            }
		}

		public function getAllCategory(){
			$this->db->query('SELECT * FROM category');
            return $this->db->rows();
		}

		public function getCategoryForId($id){
			$this->db->query('SELECT * FROM category where id_categoria = :id');
			$this->db->bind(':id', $id);
			return $this->db->row();
		}

		public function updateCategory($data){
			$this->db->query('UPDATE category SET titulo = :titulo, icono = :icono WHERE id_categoria = :id');
			$this->db->bind(':id', $data['id_categoria']);
			$this->db->bind(':titulo', $data['titulo']);
			$this->db->bind(':icono', $data['icono']);
			if ($this->db->execute()){
				return true;
			}else{
				return false;
			}
		}

		public function deleteCategory($id){
			$this->db->query('DELETE FROM category where id_categoria = :id');
			$this->db->bind(':id', $id);
			if ($this->db->execute()){
				return true;
			}else{
				return false;
			}
		}
	}
?>