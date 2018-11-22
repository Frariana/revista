<?php
    class Db{
        private $host = DB_HOST;
        private $user = DB_USER;
        private $password = DB_PASSWORD;
        private $name_base = DB_NAME;

        private $dbh; #database handel
        private $stmt;
        private $error;

        public function __construct(){
            $dsn = 'mysql:host='.$this->host.';charset=utf8;';
            $options = array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );
            try{
                $this->dbh = new PDO($dsn, $this->user, $this->password, $options);
                $this->dbh->exec("CREATE DATABASE IF NOT EXISTS ".$this->name_base." DEFAULT CHARACTER SET = 'utf8' DEFAULT COLLATE 'utf8_general_ci';");
                $this->dbh->exec("
                    CREATE TABLE IF NOT EXISTS ".$this->name_base.".users (
                        id_user MEDIUMINT NOT NULL AUTO_INCREMENT,
                        email varchar(60) NOT NULL,
                        rol int(11) NOT NULL,
                        user varchar(255)  NOT NULL,
                        password varchar(255)  NOT NULL,
                        PRIMARY KEY (id_user)
                    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
                    CREATE TABLE IF NOT EXISTS ".$this->name_base.".content (
                        id_contenido MEDIUMINT NOT NULL AUTO_INCREMENT,
                        titulo varchar(60) NOT NULL,
                        cuerpo longtext NOT NULL,
                        icono varchar(60),
                        fecha datetime,
                        creador varchar(60) NOT NULL,
                        id_categoria int(11),
                        PRIMARY KEY (id_contenido)
                    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
                    CREATE TABLE IF NOT EXISTS ".$this->name_base.".category (
                        id_categoria int(11) NOT NULL AUTO_INCREMENT,
                        titulo varchar(60) NOT NULL,
                        icono varchar(60),
                        PRIMARY KEY(id_categoria)
                    )ENGINE=InnoDB DEFAULT CHARSET=utf8;
                ");
            }catch(PDOException $e){
                $this->error = $e->getMessage();
                echo "Error de DB: " . $this->error;
            }
        }
        #preparamos la consulta
        public function query($sql){
            $this->stmt = $this->dbh->prepare($sql);
        }
        #vinculamos la consulta con bind
        public function bind($param, $value, $type = null){
            if (is_null($type)){
                switch(true){
                    case is_int($value):
                        $type = PDO::PARAM_INT;
                    break;
                    case is_int($value):
                        $type = PDO::PARAM_BOOL;
                    break;
                    case is_null($value):
                        $type = PDO::PARAM_NULL;
                    break;
                    default:
                        $type = PDO::PARAM_STR;
                    break;
                }
            }
            $this->stmt->bindValue($param, $value, $type);
        }
        #ejecuta la consulta
        public function execute(){
           return $this->stmt->execute();
        }
        #obtener registros
        public function rows(){
            $this->execute();
            return $this->stmt->fetchAll(PDO::FETCH_OBJ);
        }
        #obtener registro
        public function row(){
            $this->execute();
            return $this->stmt->fetch(PDO::FETCH_OBJ);
        }
        #obtener cantidad de rows
        public function rowCount(){
            return $this->stmt->rowCount();
        }
    }