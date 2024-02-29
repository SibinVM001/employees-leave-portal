<?php

    // Author : Sibin V M, 
    // Page Title : Logout Controller,
    // Created Date : 04-05-2022

    // session start

    session_start();

    if($_GET['key'] == 'admin') {

        // session destoy

        $_SESSION['admin_id'] = NULL;

        // redirect page to user login

        header("Location: /view/admin");

    } else {

        // session destoy

        $_SESSION['id'] = NULL;

        // redirect page to user login

        header("Location: /view/user");

    }

    

?>