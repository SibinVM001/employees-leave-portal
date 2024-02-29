<?php

    // Author : Sibin V M, 
    // Page Title : Validation Controller,
    // Created Date : 03-06-2022 
    

    // session start

    session_start();

    // incliding queries file

    include '../db/queries.php';

    // fetch all data from employees table

    

    $employees = Queries::selectAll('employees');

    foreach($employees as $employee) {

        if($employee['id'] == $_GET['id']) {

            if($employee['is_admin'] == 1) {

                $_SESSION['admin_id'] = $_GET['id'];

                // redirect page to user dashboard
                
                header("Location: /view/admin/dashboard.php");

            } else {

                $_SESSION['id'] = $_GET['id'];

                // redirect page to user dashboard
                
                header("Location: /view/user/dashboard.php");
                
            }
        }

    }

    
    
?>