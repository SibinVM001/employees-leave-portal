<?php

    // Author : Sibin V M, 
    // Page Title : Personal Details,
    // Created Date : 04-06-2022 

    // start session

    session_start();

    // incliding queries file

    include '../../db/queries.php';

    foreach(Queries::selectAll('employees') as $index=>$item) {

        if($item['id'] == $_SESSION['id']) {

            $name = $item['name'];
            $email = $item['email'];
            $gender = $item['gender'];
            $place = $item['place'];
            $address = $item['address'];

        }
    }
        
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <!-- link bootstrap cdn -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body class="bg-dark">
<div class="container bg-dark text-light mt-5 p-5" style="border: 1px solid white;">
    <div class="row mb-3">
        <h5>Personal Details</h5>
    </div>
    <div class="row ms-1">
        <div class="col-5">
            <label for="employeeName">Name</label>
        </div>
        <div class="col-2">
            :
        </div>
        <div class="col-5">
            <p><?= ucwords($name); ?></p>
        </div>
    </div>

    <div class="row mt-3 ms-1">
        <div class="col-5">
            <label for="employeeEmail">Email</label>
        </div>
        <div class="col-2">
            :
        </div>
        <div class="col-5">
            <p><?= $email; ?></p>
        </div>
    </div>

    <div class="row mt-3 ms-1">
        <div class="col-5">
            <label for="male">Gender</label>
        </div>
        <div class="col-2">
            :
        </div>
        <div class="col-5">
            <p><?= ucwords($gender) ?></p>
        </div>
    </div>

    <div class="row mt-3 ms-1">
        <div class="col-5">
            <label for="place">Place</label>
        </div>
        <div class="col-2">
            :
        </div>
        <div class="col-5">
            <p><?= ucwords($place) ?></p>
        </div>
    </div>

    <div class="row mt-3 ms-1">
        <div class="col-5">
            <label for="employeeAddress">Address</label>
        </div>
        <div class="col-2">
            :
        </div>
        <div class="col-5">
            <p><?= ucwords($address) ?></p>
        </div>
    </div>
</div>
</body>
</html>