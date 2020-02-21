<?php
	class Contents{
		private $db;

		private $name_base = DB_NAME;

		public function __construct(){
			$this->db = new Db;
		}

		public function insert($data){
			$this->db->query("INSERT INTO ".$this->name_base.".content (content_titulo, cuerpo, fecha, creador, id_categoria, imagen, slider, bloque1, bloque2, bloque3) VALUES (:titulo, :cuerpo, now(), :creador, :id_categoria, :imagen, :slider, :bloque1, :bloque2, :bloque3 )");
			$this->db->bind(':titulo', $data['titulo']);
			$this->db->bind(':cuerpo', $data['cuerpo']);
			$this->db->bind(':creador', $data['creador']);
			$this->db->bind(':id_categoria', $data['id_categoria']);
			$this->db->bind(':imagen', $data['imagen']);
			$this->db->bind(':slider', $data['slider']);
			$this->db->bind(':bloque1', $data['bloque1']);
			$this->db->bind(':bloque2', $data['bloque2']);
			$this->db->bind(':bloque3', $data['bloque3']);
			if ($this->db->execute()){
                return true;
            }else{
                return false;
            }
		}

		public function update($data){
			$this->db->query("UPDATE ".$this->name_base.".content SET content_titulo = :titulo, cuerpo = :cuerpo, id_categoria = :id_categoria, creador = :creador, id = :id, slider = :slider, bloque1 = :bloque1, bloque2 = :bloque2, bloque3 = :bloque3 WHERE id = :id");
			$this->db->bind(':id', $data['id']);
			$this->db->bind(':titulo', $data['titulo']);
			$this->db->bind(':cuerpo', $data['cuerpo']);
			$this->db->bind(':id_categoria', $data['id_categoria']);
			$this->db->bind(':creador', $data['creador']);
			$this->db->bind(':id', $data['id']);
			// $this->db->bind(':imagen', $data['imagen']);
			$this->db->bind(':slider', $data['slider']);
			$this->db->bind(':bloque1', $data['bloque1']);
			$this->db->bind(':bloque2', $data['bloque2']);
			$this->db->bind(':bloque3', $data['bloque3']);
			if ($this->db->execute()){
				return true;
			}else{
				return false;
			}
		}

		public function updateImagen($data){
			$this->db->query("UPDATE ".$this->name_base.".content SET imagen = :imagen  WHERE id = :id");
			$this->db->bind(':id', $data['id']);
			$this->db->bind(':imagen', $data['imagen']);
			if ($this->db->execute()){
				return true;
			}else{
				return false;
			}
		}

		public function delete($id){
			$this->db->query("DELETE from ".$this->name_base.".content where id = :id");
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
					id,
				    content_titulo,
				    cuerpo,
				    fecha as fecha,
					creador as creador,
					imagen
				FROM
					".$this->name_base.".content
				where content_titulo = :titulo 
			");
            $this->db->bind(':titulo', $url);
            return $this->db->row();
		}

		public function getContentForId($id){
			$this->db->query("
				SELECT
					id,
				    content_titulo,
				    cuerpo,
				    fecha,
				    id_categoria,
					creador,
					imagen,
					id,
					slider,
					bloque1,
					bloque2,
					bloque3
				FROM
				    ".$this->name_base.".content
				where id = :id
			");
            $this->db->bind(':id', $id);
            return $this->db->row();
		}

		public function getAllContentsForCant($cantidad){
			$this->db->query("
				SELECT 
					content_titulo,
				    SUBSTRING(cuerpo, 4, 50) AS cuerpo,
				    fecha,
					creador,
					imagen
				FROM 
					".$this->name_base.".content
				ORDER BY fecha DESC LIMIT ".$cantidad);
			$res = $this->db->rows();
			return $res;
		}

		public function getAllContent(){ 
			$this->db->query("
				SELECT 
					id,
					content_titulo,
					SUBSTRING(cuerpo, 4, 50) AS cuerpo,
					icono,
					fecha,
					creador
				FROM 
					".$this->name_base.".content
				ORDER BY fecha DESC
			");
			$res = $this->db->rows();
			return $res;
		}

		public function getContentPaged($page = 1, $cantidadPorPagina = 10, $like = ''){
			$page = intval($page);
			$this->db->query("SELECT 
				co.id,
				co.content_titulo,
				co.cuerpo,
				co.creador,
				co.fecha,
				co.slider,
				co.bloque1,
				co.bloque2,
				co.bloque3
			FROM ".$this->name_base.".content as co
			WHERE co.content_titulo like '%".$like."%'
			OR co.cuerpo like '%".$like."%'
			OR co.fecha like '%".$like."%'
			OR co.creador like '%".$like."%'
			ORDER BY co.id DESC
			LIMIT :page, 10");
			$this->db->bind(":page", ($page - 1) * $cantidadPorPagina);
			// $this->db->bind(":cantidadPorPagina", $cantidadPorPagina);
			$data['contenido']    = $this->db->rows();
			$data['paginaActual'] = $page;
			//paginacion
			$this->db->query("SELECT 
				co.id,
				co.content_titulo,
				co.cuerpo,
				co.creador,
				co.fecha
			FROM ".$this->name_base.".content as co
			WHERE co.content_titulo like '%".$like."%'
			OR co.cuerpo like '%".$like."%'
			OR co.fecha like '%".$like."%'
			OR co.creador like '%".$like."%'");
			$this->db->execute();
	      	$cantTotal = $this->db->rowCount();
	      	$data['paginasAMostrar'] = ceil($cantTotal / $cantidadPorPagina);
	      	$data['cantidadPorPagina'] = $cantidadPorPagina;
			return $data;
		}

		public function getCantContent(){
			$this->db->query("SELECT * FROM ".$this->name_base.".content where 1");
			$this->db->execute();
			$res = $this->db->rowCount();
			return $res;
		}

		public function getContentForCategory($categoria, $limit){
			$this->db->query("
				SELECT 
					co.content_titulo as content_titulo,
					SUBSTRING(co.cuerpo, 4, 50) AS cuerpo,
					ca.icono as icono,
					co.fecha as fecha,
					co.creador as creador,
					co.imagen as imagen
				FROM 
					".$this->name_base.".content co 
				INNER JOIN ".$this->name_base.".category ca ON
					ca.category_titulo = :categoria
				AND ca.id = co.id
			");

			$this->db->bind(':categoria', $categoria);
			$res = $this->db->rows();
			return $res;
		}

		public function getContentForCategoryId($id_categoria){
			$this->db->query("
				SELECT 
					co.content_titulo as content_titulo,
					SUBSTRING(co.cuerpo, 4, 50) AS cuerpo,
					ca.icono as icono,
					co.fecha as fecha,
					co.creador as creador,
					co.imagen as imagen
				FROM ".$this->name_base.".content co 
				INNER JOIN ".$this->name_base.".category ca ON
					co.id_categoria = ca.id 
					AND ca.id = :categoria
			");

			$this->db->bind(':categoria', $id_categoria);
			$res = $this->db->rows();
			return $res;
		}

		public function getCantContentForCategory($categoria, $limit){
			$this->db->query("
				SELECT
					co.content_titulo as content_titulo,
					SUBSTRING(co.cuerpo, 4, 50) AS cuerpo,
					ca.icono as icono,
					co.fecha as fecha,
					co.creador as creador 
				FROM 
					".$this->name_base.".content AS cont
				INNER JOIN ".$this->name_base.".category AS cat
				WHERE cat.category_titulo = :categoria 
				AND cat.id = cont.id");
			$this->db->bind(':categoria', $categoria);
			$res = $this->db->rowCount();
			return $res;
		}

		public function getSliders(){
			$this->db->query("
				SELECT
					content_titulo,
					SUBSTRING(cuerpo, 4, 50) AS cuerpo,
					imagen
				FROM ".$this->name_base.".content
				WHERE slider = true");
			$res = $this->db->rows();
			return $res;
		}

		public function getBloque1(){
			$this->db->query("
				SELECT
					id,
					content_titulo,
					SUBSTRING(cuerpo, 4, 50) AS cuerpo
				FROM ".$this->name_base.".content
				WHERE bloque1 = true");
			$res = $this->db->rows();
			return $res;
		}

		public function getBloque2(){
			$this->db->query("
				SELECT
					id,
					content_titulo,
					SUBSTRING(cuerpo, 4, 50) AS cuerpo
				FROM ".$this->name_base.".content
				WHERE bloque2 = true");
			$res = $this->db->rows();
			return $res;
		}

		public function getBloque3(){
			$this->db->query("
				SELECT
					id,
					content_titulo,
					SUBSTRING(cuerpo, 4, 50) AS cuerpo,
					imagen
				FROM ".$this->name_base.".content
				WHERE bloque3 = true");
			$res = $this->db->rows();
			return $res;
		}

		public function getAllCategory(){
			$this->db->query("
				SELECT 
					*
				FROM 
					".$this->name_base.".category");
            return $this->db->rows();
		}
		
		public function getAllCategoryWithContent(){
			$this->db->query("SELECT DISTINCT cat.category_titulo, cat.icono FROM gatopard_gatopardoestudio.category as cat");
			return $this->db->rows();
		}

		public function getCategoryForId($id){
			$this->db->query("SELECT * FROM ".$this->name_base.".category where id = :id");
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
			$this->db->query("UPDATE ".$this->name_base.".category SET category_titulo = :titulo, icono = :icono WHERE id = :id");
			$this->db->bind(':id', $data['id']);
			$this->db->bind(':titulo', $data['titulo']);
			$this->db->bind(':icono', $data['icono']);
			if ($this->db->execute()){
				return true;
			}else{
				return false;
			}
		}

		public function deleteCategory($id){
			$this->db->query("DELETE FROM ".$this->name_base.".category where id = :id");
			$this->db->bind(':id', $id);
			if ($this->db->execute()){
				return true;
			}else{
				return false;
			}
		}

		public function revisarIp($ip){ 
			$this->db->query("SELECT * FROM ".$this->name_base.".visitaip WHERE ip = :ip");
			$this->db->bind(':ip', $ip);
			return $this->db->rows();
		}
		
		public function agregarVisita($ip){
			$this->db->query("INSERT INTO ".$this->name_base.".visitaip (ip, fecha, numero) VALUES (:ip, :hoy, 1)");
			$this->db->bind(':ip', $ip);
			$this->db->bind(':hoy', date("Y-m-d"));
			if ($this->db->execute()){
                return true;
            }else{
                return false;
            }
		}

		public function sumarVisita($id, $numero){
			$this->db->query("UPDATE ".$this->name_base.".visitaip SET numero = :numero WHERE id = :id");
			$this->db->bind(':id', $id);
			$this->db->bind(':numero', $numero + 1);
			if ($this->db->execute()){
				return true;
			}else{
				return false;
			}
		}

		public function contarTotalVisitas(){ 
			$this->db->query("SELECT SUM(numero) as visitas FROM ".$this->name_base.".visitaip ");
			return $this->db->rows();
		}
		
	}
?>