<?php
	class Contents{
		private $db;

		private $name_base = DB_NAME;

		public function __construct(){
			$this->db = new Db;
		}

		public function insert($data){
			$this->db->query("INSERT INTO ".$this->name_base.".content (content_titulo, cuerpo, icono, id_categoria, creador, fecha) VALUES (:titulo, :cuerpo, :icono, :id_categoria, :creador, now())");
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
			$this->db->query("UPDATE ".$this->name_base.".content SET content_titulo = :titulo, cuerpo = :cuerpo, icono = :icono, creador = :creador, id_categoria = :id_categoria WHERE id_contenido = :id_contenido");
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

		public function getContentForTitle($url){
			$this->db->query("
				SELECT
				    co.content_titulo as content_titulo,
				    co.cuerpo,
				    ca.icono as icono,
				    co.fecha as fecha,
				    co.creador as creador
				FROM
				    ".$this->name_base.".content co
				INNER JOIN ".$this->name_base.".category ca ON
				    co.content_titulo = :titulo AND co.id_categoria = ca.id_categoria
			");
            $this->db->bind(':titulo', $url);
            return $this->db->row();
		}

		public function getContentForId($id){
			$this->db->query("
				SELECT
					co.id_contenido,
				    co.content_titulo as content_titulo,
				    SUBSTRING(co.cuerpo, 4, 50) AS cuerpo,
				    ca.icono as icono,
				    co.fecha as fecha,
					co.creador as creador,
					ca.id_categoria
				FROM
				    ".$this->name_base.".content co
				INNER JOIN ".$this->name_base.".category ca ON
				    id_contenido = :id_contenido AND co.id_categoria = ca.id_categoria
			");
            $this->db->bind(':id_contenido', $id);
            return $this->db->row();
		}

		public function getAllContentsForCant($cantidad){
			$this->db->query("
				SELECT 
					co.content_titulo as content_titulo,
				    SUBSTRING(co.cuerpo, 4, 50) AS cuerpo,
				    ca.icono as icono,
				    co.fecha as fecha,
				    co.creador as creador
				FROM 
					".$this->name_base.".content co 
				LEFT JOIN ".$this->name_base.".category ca ON
					co.id_categoria = ca.id_categoria
				ORDER BY co.fecha DESC LIMIT ".$cantidad);
			$res = $this->db->rows();
			return $res;
		}

		public function getAllContent(){ 
			$this->db->query("
				SELECT 
					co.id_contenido,
					co.content_titulo as content_titulo,
					SUBSTRING(co.cuerpo, 4, 50) AS cuerpo,
					ca.icono as icono,
					co.fecha as fecha,
					co.creador as creador
				FROM 
					".$this->name_base.".content co 
				LEFT JOIN ".$this->name_base.".category ca ON
					co.id_categoria = ca.id_categoria
				ORDER BY co.fecha DESC
			");
			$res = $this->db->rows();
			return $res;
		}

		public function getContentForCategory($categoria, $limit){
			$this->db->query("
				SELECT co.content_titulo as content_titulo,
				SUBSTRING(co.cuerpo, 4, 50) AS cuerpo,
				ca.icono as icono,
				co.fecha as fecha,
				co.creador as creador
			FROM 
				".$this->name_base.".content co 
			INNER JOIN ".$this->name_base.".category ca ON
				ca.category_titulo = :categoria
			AND ca.id_categoria = co.id_categoria
			");

			$this->db->bind(':categoria', $categoria);
			$res = $this->db->rows();
			return $res;
		}

		public function getCantContentForCategory($categoria, $limit){
			$this->db->query("SELECT * FROM ".$this->name_base.".content AS cont INNER JOIN ".$this->name_base.".category AS cat WHERE cat.category_titulo = :categoria AND cat.id_categoria = cont.id_categoria");
			$this->db->bind(':categoria', $categoria);
			$res = $this->db->rowCount();
			return $res;
		}

		public function getAllCategory(){
			$this->db->query("SELECT * FROM ".$this->name_base.".category");
            return $this->db->rows();
		}
		
		public function getAllCategoryWithContent(){
			$this->db->query("SELECT DISTINCT cat.category_titulo, cat.icono FROM ".$this->name_base.".category as cat inner join ".$this->name_base.".content as cont on cat.id_categoria = cont.id_categoria");
			return $this->db->rows();
		}

		public function getCategoryForId($id){
			$this->db->query("SELECT * FROM ".$this->name_base.".category where id_categoria = :id");
			$this->db->bind(':id', $id);
			return $this->db->row();
		}

		public function getCategoryForTitle($category){
			$this->db->query("SELECT * FROM ".$this->name_base.".category where category_titulo = :category");
			$this->db->bind(':category', $category);
			return $this->db->row();
		}

		public function insertCategory($data){
			$this->db->query("INSERT INTO ".$this->name_base.".category (category_titulo, icono) VALUES (:titulo, :icono)");
            $this->db->bind(':titulo', $data['titulo']);
            $this->db->bind(':icono', $data['icono']);
            if ($this->db->execute()){
                return true;
            }else{
                return false;
            }
		}

		public function updateCategory($data){
			$this->db->query("UPDATE ".$this->name_base.".category SET category_titulo = :titulo, icono = :icono WHERE id_categoria = :id");
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
		public function searchContent($data){
			$this->db->query("SELECT content_titulo FROM ".$this->name_base.".content where content_titulo like '%" . $data . "%'");
            return $this->db->rows();
		}
	}
?>