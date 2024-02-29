<?php

    // Author : Sibin V M, 
    // Page Title : Edit Employee Controller,
    // Created Date : 03-06-2022

    // incliding queries file
    include '../db/queries.php';

    // update data in employees table

    Queries::updateRow('employees', 'id', $_POST['id'], [
        $_POST['name'], 
        $_POST['email'], 
        $_POST['password'], 
        $_POST['gender'],
        $_POST['place'],
        $_POST['address'],
        (int)$_POST['is_admin'],
        date(DATE_ATOM),
        date(DATE_ATOM)
    ]);

    // redirect to previous page

    header('Location: ' . $_SERVER['HTTP_REFERER']);

?>