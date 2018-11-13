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
            $dsn = 'mysql:host='.$this->host.';dbname='.$this->name_base;
            $options = array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );
            try{
                $this->dbh = new PDO($dsn, $this->user, $this->password, $options);
                $this->dbh->exec('set names utf8');
            }catch(PDOException $e){
                $this->error = $e->getMessage();
                echo "<br>Aquí el error: <br>";
                echo $this->error;
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