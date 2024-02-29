<?php

    // Author : Sibin V M, 
    // Page Title : Leave Reject Controller,
    // Created Date : 04-05-2022 
    
    
    // incliding queries file

    include '../db/queries.php';

    // update column of table leaves

    Queries::updateCol('leaves', 'id', $_GET['id'], 0);

    // redirect page to admin dashboard
    
    header("Location: /view/admin/employeesDetails.php");   
?>