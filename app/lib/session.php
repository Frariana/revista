<?php 
	class Session{
	    
	    private $sessionState = false; // The state of the session
	    private $instance; // THE only instance of the class
	    
	    public function __construct() {}
	    
	    public function getInstance(){
	        if (!isset($this->instance)){
	            $this->instance = new Session();
	        }
	        $this->instance->startSession();
	        return $this->instance;
	    }
	    public function getStatus(){
	    	return $this->sessionState;
	    }
	    
	    public function startSession(){
	        if ( $this->sessionState == false ){
	            $this->sessionState = session_start();
	        }
	        return $this->sessionState;
	    }
	    
	    public function __set( $name , $value ){
	        $_SESSION[$name] = $value;
	    }
	    
	    public function __get( $name ){
	        if (isset($_SESSION[$name])){
	            return $_SESSION[$name];
	        }
	    }
	    
	    public function __isset( $name ){
	        return isset($_SESSION[$name]);
	    }
	    
	    public function __unset( $name ){
	        unset( $_SESSION[$name] );
	    }
	    
	    public function destroy(){
	        session_destroy();
	        unset($_SESSION);
	    	$sessionState = false;        
        	return $sessionState;
	    }
	}
?>