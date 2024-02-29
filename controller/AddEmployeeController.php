<?php

    // Author : Sibin V M, 
    // Page Title : Add  Employee Controller,
    // Created Date : 03-06-2022 


    // incliding queries file

    include '../db/queries.php';

    // insert data into employees table

    Queries::insertInto('employees', [
        $_POST['name'], 
        $_POST['email'], 
        $_POST['password'], 
        $_POST['gender'],
        $_POST['place'],
        $_POST['address'],
        0,
        date(DATE_ATOM),
        date(DATE_ATOM)
    ]);
    
    // redirect page to admin dashboard

    header("Location: /view/admin/employeesDetails.php");

?>