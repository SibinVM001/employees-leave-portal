<?php

    // Author : Sibin V M, 
    // Page Title : Delete Employee Controller,
    // Created Date : 03-06-2022


    // incliding queries file

    include '../db/queries.php';

    // delete data from employees table

    Queries::deleteRow('employees', 'id', $_GET['id']);

    // redirect page to admin dashboard

    header("Location: /view/admin/employeesDetails.php");

?>