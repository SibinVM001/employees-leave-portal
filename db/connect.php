<?php

    // Author : Sibin V M, 
    // Page Title : Connect,
    // Created Date : 03-06-2022 


    //including config file

    include 'config.php';

    //Connect class declaration

    class Connect extends Config {

        public $pdo;

        public function Connect() {

            // instantiate the Config class

            $conn = new Config;
            
            // try and catch the erroe in the PDO connection

            try {

                // create new PDO connection

                $this->pdo = new PDO("mysql:host=$conn->dbhost;dbname=$conn->dbname", $conn->dbuser, $conn->dbpass, array(PDO::ATTR_PERSISTENT => true));

            } catch (PDOException $e) {

                echo "Error!: " . $e->getMessage() . "<br/>";
                die();
                
            }
        }

    }
    
?>