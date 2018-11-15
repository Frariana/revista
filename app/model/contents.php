<?php
	class Contents{
		private $db;

		public function __construct(){
			$this->db = new Db;
		}

		public function getContentForId($id){
			$this->db->query('SELECT * FROM content WHERE id_contenido = :id_contenido');
            $this->db->bind(':id_contenido', $id);
            return $this->db->row();
		}

		public function getAllContent(){ #$cantidad
			$this->db->query('SELECT * FROM content');
			$res = $this->db->rows();
			return $res;
		}

		public function getAllContentForCategory($categoria, $cantidad){

		}

		public function insert($data){
			$this->db->query('INSERT INTO content (titulo, cuerpo, icono, categoria, creador) VALUES (:titulo, :cuerpo, :icono, :categoria, :creador)');
			$this->db->bind(':titulo', $data['titulo']);
			$this->db->bind(':cuerpo', $data['cuerpo']);
			$this->db->bind(':icono', $data['icono']);
			$this->db->bind(':categoria', $data['categoria']);
			$this->db->bind(':creador', $data['creador']);

			if ($this->db->execute()){
                return true;
            }else{
                return false;
            }
		}

		public function update($data){
			$this->db->query('UPDATE content SET titulo = :titulo, cuerpo = :cuerpo, icono = :icono, creador = :creador, categoria = :categoria WHERE id_contenido = :id_contenido');
			$this->db->bind(':id_contenido', $data['id_contenido']);
			$this->db->bind(':titulo', $data['titulo']);
			$this->db->bind(':cuerpo', $data['cuerpo']);
			$this->db->bind(':icono', $data['icono']);
			$this->db->bind(':creador', $data['creador']);
			$this->db->bind(':categoria', $data['categoria']);
			if ($this->db->execute()){
				return true;
			}else{
				return false;
			}
		}

		public function delete($id){
			$this->db->query('DELETE from content where id_contenido = :id');
			$this->db->bind(':id', $id);
			if ($this->db->execute()){
				return true;
			}else{
				return false;
			}
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