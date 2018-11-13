<?php

    class Session{

        public function start() {
            session_start();
        }
        
        public function getSession($key){
            if (array_key_exists($key, $_SESSION)){
                return $_SESSION[$key];
            }else{
                return null;
            }
        }

        public function getSessions(){
            return $_SESSION;
        }
        
        public function setSession($array){
            foreach ($array as $key => $value) {
                $_SESSION[$key] =  $value;
            }
        }

        public function destroy(){
            session_destroy();
            session_unset();
            session_abort();
        }
    }

?>