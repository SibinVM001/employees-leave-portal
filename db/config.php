<?php

    // Author : Sibin V M, 
    // Page Title : Config,
    // Created Date : 03-06-2022 


    //Config class declaration
    class Config{

        public $dbhost;
        public $dbname;
        public $dbuser;
        public $dbpass;

        public function Config() {
            $this->dbhost = '127.0.0.1';
            $this->dbname = 'employees';
            $this->dbuser = 'root';
            $this->dbpass = 'root';
        }
    }
    
?>