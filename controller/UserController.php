<?php

    // Author : Sibin V M, 
    // Page Title : User Controller,
    // Created Date : 03-06-2022 
    

    // incliding queries 

    include '../db/queries.php';

    // fetch all data from employees table
    
    echo json_encode(Queries::selectAll('employees'));

?>