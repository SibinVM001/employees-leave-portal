<?php

    // Author : Sibin V M, 
    // Page Title : Queries,
    // Created Date : 03-06-2022 



    //including connect file
    include 'connect.php';

    //Queries class declaration

    class Queries extends Connect {

        // selectAll method declaration

        public static function selectAll($table) {

            $conn = new Connect;

            $query = "SELECT * FROM $table";

            $stmt = $conn->pdo->prepare($query);
            $stmt->execute();

            return $stmt->fetchAll();
        }

        // fetchRow method declaration

        public static function fetchRow($table, $key, $value) {
            
            $conn = new Connect;

            $stmt =  $conn->pdo->prepare("SELECT * FROM $table WHERE $key = '$value'");
            $stmt->execute();
    
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        // insertInto method declaration

        public static function insertInto($table, $values) {

            $conn = new Connect;

            $query = $conn->pdo->prepare("SELECT * FROM $table");
            $query->execute();

            $result = array_keys($query->fetch(PDO::FETCH_ASSOC));

            array_shift($result);
            
            $columnNames = '';
            $params = '';

            foreach($result as $key) {

                $columnNames .= $key.",";
                $params .= "?,";
                
            }
            
            $query2 = "INSERT INTO $table(".substr($columnNames, 0, -1).") VALUES (".substr($params, 0, -1).")";
            
            $query3 = $conn->pdo->prepare($query2);
            $query3->execute($values);
            
            return $query3;

        }

        // updateRow method declaration

        public static function updateRow($table, $key, $value, $param) {

            $conn = new Connect;

            $query = $conn->pdo->prepare("SELECT * FROM $table");
            $query->execute();

            $result = array_keys($query->fetch(PDO::FETCH_ASSOC));
            
            
            array_shift($result);
            
            $columnNames = '';

            foreach($result as $item) {

                $columnNames .= $item."=?,";
                
            }
            $query2 = "UPDATE $table SET ".substr($columnNames, 0, -1)." WHERE $key = $value";

            $query3 = $conn->pdo->prepare($query2);
            $query3->execute($param);
            
            return $query3;

        }

        // updateCol method declaration

        public static function updateCol($table, $key, $value, $param) {

            $conn = new Connect;
            
            $query = "UPDATE $table SET status = $param WHERE $key = $value";

            $query2 = $conn->pdo->prepare($query);
            $query2->execute();

        }

        // deleteRow method declaration

        public static function deleteRow($table, $key, $value) {

            $conn = new Connect;

            $query = $conn->pdo->prepare("DELETE FROM $table WHERE $key = $value");
            $query->execute();

        }
    }

?>