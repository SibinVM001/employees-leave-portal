<?php

    // Author : Sibin V M, 
    // Page Title : Admin Controller,
    // Created Date : 03-06-2022 


    // incliding queries file

    include '../db/queries.php';

    // fetch all data from admins table

    echo json_encode(Queries::selectAll('admins'));

?>