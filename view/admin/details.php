<?php

    // Author : Sibin V M, 
    // Page Title : Details,
    // Created Date : 07-06-2022 


    // incliding queries file

    include '../../db/queries.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <!-- link bootstrap cdn -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../../public/css/app.css">
    
</head>
<body class="bg-dark">
    <div class="container bg-dark text-light p-5" id="companyDetails">
        <div class="row row-cols-1 row-cols-md-2 g-5">
            <div class="col">
                <div class="card bg-dark border-light h-100">
                    <div class="card-body">
                        <div class="text-center">
                            <div class="m-3">

                                <i class="fa-solid fa-sack-dollar fa-3x text-danger"></i>
                            </div>
                            <h5>Company Profit : 5 Lakhs</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-dark border-light h-100">
                    <div class="card-body">
                        <div class="text-center">
                            <div class="m-3">
                                <i class="fa-solid fa-users fa-3x text-danger"></i>
                            </div>
                            <h5>Clients : 34</h5>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col">
                <div class="card bg-dark border-light h-100">
                    <div class="card-body">
                        <div class="text-center">
                            <div class="m-3">
                            <i class="fa-solid fa-list-check fa-3x text-danger"></i>
                            </div>
                            <h5>Projects : 654</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card bg-dark border-light h-100">
                    <div class="card-body">
                        <div class="text-center">
                            <div class="m-3">
                                <i class="fa-solid fa-people-group fa-3x text-danger"></i>
                            </div>
                            <h5>Employees : 654</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

