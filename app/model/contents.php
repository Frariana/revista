<?php
	class Contents{
		private $db;
		#rowCount
		private $name_base = DB_NAME;
		public function __construct(){
			$this->db = new Db;
		}

		public function getContentForId($id){
			$this->db->query("SELECT * FROM ".$this->name_base.".content WHERE id_contenido = :id_contenido");
            $this->db->bind(':id_contenido', $id);
            return $this->db->row();
		}

		public function getAllContent(){ #$cantidad
			$this->db->query("SELECT * FROM ".$this->name_base.".content");
			$res = $this->db->rows();
			return $res;
		}

		public function getAllContentForCategory($categoria, $cantidad){

		}

		public function getAllContentsForCant($cantidad){
			$this->db->query("SELECT * FROM ".$this->name_base.".content ORDER BY fecha DESC LIMIT ".$cantidad);
			$res = $this->db->rows();
			return $res;
		}

		public function insert($data){
			$fecha = date('d-m-Y h:G a');
			$this->db->query("INSERT INTO ".$this->name_base.".content (titulo, cuerpo, icono, id_categoria, creador, fecha) VALUES (:titulo, :cuerpo, :icono, :id_categoria, :creador, now())");
			$this->db->bind(':titulo', $data['titulo']);
			$this->db->bind(':cuerpo', $data['cuerpo']);
			$this->db->bind(':icono', $data['icono']);
			$this->db->bind(':id_categoria', $data['id_categoria']);
			$this->db->bind(':creador', $data['creador']);

			if ($this->db->execute()){
                return true;
            }else{
                return false;
            }
		}

		public function update($data){
			$this->db->query("UPDATE ".$this->name_base.".content SET titulo = :titulo, cuerpo = :cuerpo, icono = :icono, creador = :creador, id_categoria = :id_categoria WHERE id_contenido = :id_contenido");
			$this->db->bind(':id_contenido', $data['id_contenido']);
			$this->db->bind(':titulo', $data['titulo']);
			$this->db->bind(':cuerpo', $data['cuerpo']);
			$this->db->bind(':icono', $data['icono']);
			$this->db->bind(':creador', $data['creador']);
			$this->db->bind(':id_categoria', $data['id_categoria']);
			if ($this->db->execute()){
				return true;
			}else{
				return false;
			}
		}

		public function delete($id){
			$this->db->query("DELETE from ".$this->name_base.".content where id_contenido = :id");
			$this->db->bind(':id', $id);
			if ($this->db->execute()){
				return true;
			}else{
				return false;
			}
		}

		public function getAllCategory(){
			$this->db->query("SELECT * FROM ".$this->name_base.".category");
            return $this->db->rows();
		}

		public function getCategoryForId($id){
			$this->db->query("SELECT * FROM ".$this->name_base.".category where id_categoria = :id");
			$this->db->bind(':id', $id);
			return $this->db->row();
		}

		public function insertCategory($data){
			$this->db->query("INSERT INTO ".$this->name_base.".category (titulo, icono) VALUES (:titulo, :icono)");
            $this->db->bind(':titulo', $data['titulo']);
            $this->db->bind(':icono', $data['icono']);
            if ($this->db->execute()){
                return true;
            }else{
                return false;
            }
		}

		public function updateCategory($data){
			$this->db->query("UPDATE ".$this->name_base.".category SET titulo = :titulo, icono = :icono WHERE id_categoria = :id");
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
			$this->db->query("DELETE FROM ".$this->name_base.".category where id_categoria = :id");
			$this->db->bind(':id', $id);
			if ($this->db->execute()){
				return true;
			}else{
				return false;
			}
		}
	}
?>