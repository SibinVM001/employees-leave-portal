<?php

    // Author : Sibin V M, 
    // Page Title : Admin Dashboard,
    // Created Date : 03-06-2022,


    // incliding queries 

    include '../../db/queries.php';

    //including header 

    include '../layout/header.php';

    // check session, if not set redirect to user login;
    
    if(!isset($_SESSION['admin_id'])) {

        header("Location: /view/admin");
        
    }

    // loop through employees table and fetch admin details

    foreach(Queries::selectAll('employees') as $index=>$item) {

        if($item['id'] == $_SESSION['admin_id']) {

            $id = $item['id'];
            $name = $item['name'];
            $email = $item['email'];
            $password = $item['password'];
            $gender = $item['gender'];
            $place = $item['place'];
            $address = $item['address'];
            $gender = $item['gender'];

        }
        
    }

?>

<body class="bg-dark text-light">

    <?php

        //including navbar 

        include 'navbar.php';

    ?>


    <!-- view admin details modal -->

    <div class="modal fade" id="viewAdminModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content  bg-dark text-light">
                <div class="modal-header">

                    <h5 class="modal-title" id="exampleModalLabel">Employee Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>

                <div class="modal-body">
                    <div class="container bg-dark text-light">
                        <div class="row ms-1">
                            <div class="col-5">
                                <label for="employeeName">Name</label>
                            </div>
                            <div class="col-2">
                                :
                            </div>
                            <div class="col-5">
                                <p><?= ucwords($name) ?></p>
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
                            <p><?= $email ?></p>
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
                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" id="addNewEmployeeBtn" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#updateAdminModal" data-bs-dismiss="modal">Update</button>

                </div>
            </div>
        </div>
    </div>

    <!-- update admin details modal -->

    <div class="modal fade" id="updateAdminModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content  bg-dark text-light">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Employee Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/controller/EditEmployeeController.php" method="post" id="updateAdminForm">
                    <input type="hidden" name="id" value=<?= $id ?>>
                    <input type="hidden" name="is_admin" value="1">
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-5">
                                    <label for="name">Name</label>
                                </div>
                                <div class="col-2">
                                    :
                                </div>
                                <div class="col-5">
                                    <input type="text" name="name" id="name" value="<?= $name ?>">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-5">
                                    <label for="email">Email</label>
                                </div>
                                <div class="col-2">
                                    :
                                </div>
                                <div class="col-5">
                                    <input type="email" name="email" id="email" value="<?= $email ?>">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-5">
                                    <label for="password">Password</label>
                                </div>
                                <div class="col-2">
                                    :
                                </div>
                                <div class="col-5">
                                    <input type="password" name="password" id="password" maxlength="8" value="<?= $password ?>">
                                </div>
                            </div>


                            <div class="row mt-3">
                                <div class="col-5">
                                    <label for="male">Gender</label>
                                </div>
                                <div class="col-2">
                                    :
                                </div>
                                <div class="col-5">
                                    <input type="radio" name="gender" id="updateMale" value="male" style="cursor: pointer;"><label for="updateMale" class="ps-2 me-3" style="cursor: pointer;">Male</label>
                                    <input type="radio" name="gender" id="updateFemale" value="female" style="cursor: pointer;"><label for="updateFemale" class="ps-2" style="cursor: pointer;">Female</label>
                                </div>

                                <!-- link jquery cdn -->
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

                                <script>
                                    <?php if($gender == 'male') : ?>

                                        $('#updateAdminForm #updateMale').prop('checked',true);

                                    <?php else: ?>

                                        $('#updateAdminForm #updateFemale').prop('checked',true);

                                    <?php endif; ?>
                                </script>
                            </div>

                            <div class="row mt-3">
                                <div class="col-5">
                                    <label for="place">Place</label>
                                </div>
                                <div class="col-2">
                                    :
                                </div>
                                <div class="col-5">
                                    <input type="text" name="place" id="place" value="<?= $place ?>">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-5">
                                    <label for="address">Address</label>
                                </div>
                                <div class="col-2">
                                    :
                                </div>
                                <div class="col-5">
                                    <textarea name="address" id="address" cols="20" rows="5"><?= $address ?></textarea>
                                </div>
                            </div>                                                                             
                        </div>                 
                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" id="addNewEmployeeBtn" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Save</button>

                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- sidebar -->

    <div class="container" id="sideBar">
        <div class="row">
            <div class="col-lg-3">
                <div class="container mt-5 py-5" style="border: 1px solid white;">
                    <div class="row justify-content-center">
                        
                        <?php foreach(Queries::selectAll('employees') as $index=>$item): ?>

                            <?php $index = $index + 1 ?>

                            <?php if($item['id'] == $_SESSION['admin_id']) :?>

                                <div class="d-flex align-items-center justify-content-center" style="width: 90px; height:90px;border:2px solid white; border-radius: 100%;">

                                    <img src="../../public/images/<?= $item['gender'] ?>.png" style="border-radius: 100%;" alt="" width="100%">

                                </div>

                                <h4 class="text-center mt-3"><?= ucwords($item['name']) ?></h4>

                            <?php endif; ?>

                        <?php endforeach; ?>
                        
                    </div>

                    <div class="row mt-2">
                        <div class="py-2">
                            <a href="/view/admin/employeesDetails.php"><button id="employeesDetails" class="btn btn-danger w-100">Employees Details</button></a>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="py-2">
                            <a href="/view/admin/employeesLeaveLog.php"><button id="employeesLeaveLog" class="btn btn-danger w-100">Employees Leave Log</button></a>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="py-2">
                            <button id="adminDetails" class="btn btn-danger w-100" data-bs-toggle="modal" data-bs-target="#viewAdminModal">Personal Details</button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-9 my-5 mt-lg-0">
                          
                <div class="container bg-dark text-light px-0 p-lg-5" id="companyDetails">
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
                                        <h5>Clients : 654</h5>
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

                                        <h5>Employees : <?= $index ?></h5>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    

<?php

    // includeing footer 
    
    include '../layout/footer.php';

?>