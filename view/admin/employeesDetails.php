<?php

    // Author : Sibin V M, 
    // Page Title : Employees Details Dashboard,
    // Created Date : 04-06-2022 


    // incliding queries file

    include '../../db/queries.php';

    //including header file

    include '../layout/header.php';

?>

<body class="bg-dark text-light">

    <?php

    //including navbar file

    include 'navbar.php';

    ?>

    <!-- users table -->

    <div class="container mt-5">
        <div class="row mt-3">
            <div>
                <span style="font-size: 22px;">Employees Details</span>

                
                <a href="/view/admin/dashboard.php" style="float: right;"><button class="btn btn-outline-danger">Back</button></a>

                <button type="button" class="btn btn-danger me-3" data-bs-toggle="modal" data-bs-target="#addEmployeeModal" style="float: right;">
                    Add New Employee
                </button>

                <!-- add new employee modal -->

                <div class="modal fade" id="addEmployeeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content  bg-dark text-light">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add New Employee</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="/controller/AddEmployeeController.php" method="post">
                                <div class="modal-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-5">
                                                <label for="employeeName">Employee Name</label>
                                            </div>
                                            <div class="col-2">
                                                :
                                            </div>
                                            <div class="col-5">
                                                <input type="text" name="name" id="employeeName">
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-5">
                                                <label for="employeeEmail">Employee Email</label>
                                            </div>
                                            <div class="col-2">
                                                :
                                            </div>
                                            <div class="col-5">
                                                <input type="email" name="email" id="employeeEmail">
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-5">
                                                <label for="employeePassword">Employee Password</label>
                                            </div>
                                            <div class="col-2">
                                                :
                                            </div>
                                            <div class="col-5">
                                                <input type="password" name="password" id="employeePassword" maxlength="8">
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-5">
                                                <label for="male">Employee Gender</label>
                                            </div>
                                            <div class="col-2">
                                                :
                                            </div>
                                            <div class="col-5">
                                                <input type="radio" name="gender" id="male" value="male"><label for="male" class="ms-2 me-3">Male</label>
                                                <input type="radio" name="gender" id="female" value="female"><label for="female" class="ms-2">Female</label>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-5">
                                                <label for="place">Employee Place</label>
                                            </div>
                                            <div class="col-2">
                                                :
                                            </div>
                                            <div class="col-5">
                                                <input type="text" name="place" id="place">
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-5">
                                                <label for="employeeAddress">Employee Address</label>
                                            </div>
                                            <div class="col-2">
                                                :
                                            </div>
                                            <div class="col-5">
                                                <textarea name="address" id="employeeAddress" cols="20" rows="5"></textarea>
                                            </div>
                                        </div>                                                                            
                                    </div>                    
                                </div>
                                <div class="modal-footer">

                                    <button type="button" class="btn btn-secondary" id="addNewEmployeeBtn" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-danger">Add Employee</button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- view employee modal -->

                <div class="modal fade" id="viewEmployeeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                            <p id="empName"></p>
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
                                            <p id="empEmail"></p>
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
                                            <p id="empGender"></p>
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
                                            <p id="empPlace"></p>
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
                                            <p id="empAddress"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- update employee modal -->

                <div class="modal fade" id="updateEmployeeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content  bg-dark text-light">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Update Employee Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="/controller/EditEmployeeController.php" method="post" id="updateForm">
                                <input type="hidden" name="is_admin" value="0">
                                <input type="hidden" name="id" id="id">
                                <div class="modal-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-5">
                                                <label for="name">Employee Name</label>
                                            </div>
                                            <div class="col-2">
                                                :
                                            </div>
                                            <div class="col-5">
                                                <input type="text" name="name" id="name">
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-5">
                                                <label for="email">Employee Email</label>
                                            </div>
                                            <div class="col-2">
                                                :
                                            </div>
                                            <div class="col-5">
                                                <input type="email" name="email" id="email">
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-5">
                                                <label for="password">Employee Password</label>
                                            </div>
                                            <div class="col-2">
                                                :
                                            </div>
                                            <div class="col-5">
                                                <input type="password" name="password" id="password" maxlength="8">
                                            </div>
                                        </div>


                                        <div class="row mt-3">
                                            <div class="col-5">
                                                <label for="male">Employee Gender</label>
                                            </div>
                                            <div class="col-2">
                                                :
                                            </div>
                                            <div class="col-5">
                                                <input type="radio" name="gender" id="updateMale" value="male" style="cursor: pointer;"><label for="updateMale" class="ps-2 me-3" style="cursor: pointer;">Male</label>
                                                <input type="radio" name="gender" id="updateFemale" value="female" style="cursor: pointer;"><label for="updateFemale" class="ps-2" style="cursor: pointer;">Female</label>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-5">
                                                <label for="place">Employee Place</label>
                                            </div>
                                            <div class="col-2">
                                                :
                                            </div>
                                            <div class="col-5">
                                                <input type="text" name="place" id="place">
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-5">
                                                <label for="address">Employee Address</label>
                                            </div>
                                            <div class="col-2">
                                                :
                                            </div>
                                            <div class="col-5">
                                                <textarea name="address" id="address" cols="20" rows="5"></textarea>
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

                <!-- leave modal -->

                <div class="modal fade" id="leaveModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content  bg-dark text-light">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Leave Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <div class="row">
                                        <table class="table table-dark table-hover">
                                            <input type="hidden" name="employeeId" id="employeeId">
                                            <thead>
                                                <th>Sl.No</th>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                                <th>Total Days</th>
                                                <th>Actions</th>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>                                   
                            </div>
                        </div>
                    </div>
                </div>

            </div>   
        </div>
        <div class="row mt-4 p-3" style="border: 1px solid white;">
            <table class="table table-dark table-hover table-borderless table-sm">
                <thead>
                    <th class="pb-3">Sl.No</th>
                    <th class="pb-3">Employee Id</th>
                    <th class="pb-3">Name</th>
                    <th class="pb-3">Email</th>
                    <th class="pb-3">Actions</th>
                    <th class="pb-3">Leave Requests</th>
                </thead>
                <tbody>
                    <?php foreach(Queries::selectAll('employees') as $index=>$value): ?>

                        <?php if($value['is_admin'] == 0): ?>
                        
                            <tr>

                                <th class="pt-2"><?= $index + 1 ?></th>

                                <?php if((int)$value['id'] < 10): ?>

                                    <td class="pt-2">EMP<?= '0'.$value['id'] ?></td>

                                <?php else: ?>

                                    <td class="pt-2">EMP<?= $value['id'] ?></td>
                
                                <?php endif; ?>
        
                                <td class="pt-2"><?= ucwords($value['name']) ?></td>
                                <td class="pt-2"><?= $value['email'] ?></td>

                                

                                
                                <td class="pt-2">
                                    <button type="button" id="employeeViewBtn<?= $value['id'] ?>" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#viewEmployeeModal">
                                        <i class="fa-solid fa-eye px-2"></i>
                                    </button>

                                    <button type="button" id="employeeEditBtn<?= $value['id'] ?>" class="btn btn-success mx-1" data-bs-toggle="modal" data-bs-target="#updateEmployeeModal">
                                        <i class="fa-solid fa-pen-to-square px-2"></i>
                                    </button>

                                    <a href="/controller/DeleteEmployeeController.php?id=<?= $value['id'] ?>">

                                        <button class="btn btn-secondary">
                                            <i class='fa-solid fa-trash text-light px-2'></i>
                                        </button>

                                    </a>
                                    
                                </td>  

                                <td class="pt-2">
                                    <button type="button" id="employeeLeaveBtn<?= $value['id'] ?>" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#leaveModal" disabled>
                                        <i class="fa-solid fa-bell px-2"></i>
                                    </button>
                                </td>

                                <!-- link jquery cdn -->
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

                                <script>
                                    $('#employeeViewBtn<?= $value['id'] ?>').click(function() {

                                    <?php foreach(Queries::selectAll('employees') as $index=>$item): ?>

                                        <?php if($item['id'] == $value['id']) :?>

                                            $('#empName').html('<?= ucwords($item['name']) ?>');
                                            $('#empEmail').html('<?= $item['email'] ?>');
                                            $('#empGender').html('<?= ucwords($item['gender']) ?>');
                                            $('#empPlace').html('<?= ucwords($item['place']) ?>');
                                            $('#empAddress').html('<?= ucwords($item['address']) ?>');

                                        <?php endif;  ?>

                                    <?php endforeach; ?>

                                    });

                                    $('#employeeEditBtn<?= $value['id'] ?>').click(function() {

                                        <?php foreach(Queries::selectAll('employees') as $index=>$item): ?>

                                            <?php if($item['id'] == $value['id']) :?>

                                                $('#updateForm #id').val('<?= $item['id'] ?>');
                                                $('#updateForm #name').val('<?= $item['name'] ?>');
                                                $('#updateForm #email').val('<?= $item['email'] ?>');
                                                $('#updateForm #password').val('<?= $item['password'] ?>');
                                                $('#updateForm #place').val('<?= $item['place'] ?>');
                                                $('#updateForm #address').val('<?= $item['address'] ?>');

                                                <?php if($item['gender'] == 'male') : ?>

                                                    $('#updateForm #updateMale').prop('checked',true);

                                                <?php else: ?>

                                                    $('#updateForm #updateFemale').prop('checked',true);

                                                <?php endif; ?>

                                            <?php endif;  ?>

                                        <?php endforeach; ?>

                                    });

                                    $('#employeeLeaveBtn<?= $value['id'] ?>').click(function() {

                                        $('#leaveModal tbody').html('');

                                        <?php $count = 0 ?>

                                        <?php foreach(Queries::selectAll('leaves') as $item): ?>

                                            <?php if($item['employee_id'] == $value['id'] && $item['status'] == NULL) : ?>

                                                $('#leaveModal tbody').append(

                                                    `<tr>
                                                        <th><?= $count = $count + 1 ?></th>
                                                        <td><?= $item['start_date'] ?></td>
                                                        <td><?= $item['end_date'] ?></td>
                                                        <td><?= $item['total_days'] ?></td>
                                                        <td>
                                                        <a href="/controller/LeaveApproveController.php?id=<?= $item['id'] ?>" class="mx-1">
                                                            <button id='approveBtn' class="btn btn-danger">
                                                                Approve
                                                            </button>

                                                        </a>

                                                        <a href="/controller/LeaveRejectController.php?id=<?= $item['id'] ?>" class="mx-1">

                                                            <button id='rejectBtn' class="btn btn-secondary">
                                                                Reject
                                                            </button>

                                                        </a>

                                                        <a href="/controller/LeavePendingController.php?id=<?= $item['id'] ?>" class="mx-1">

                                                            <button id='pendingBtn' class="btn btn-warning">
                                                                Pending
                                                            </button>

                                                        </a>
                                                        </td>
                                                    </tr>`

                                                );

                                            <?php endif; ?>

                                        <?php endforeach; ?>

                                    });

                                    <?php foreach(Queries::selectAll('leaves') as $item): ?>

                                        <?php if($item['employee_id'] == $value['id'] && $item['status'] == NULL) : ?>

                                            $('#employeeLeaveBtn<?= $value['id'] ?>').attr('disabled', false);

                                        <?php endif; ?>
                                    
                                    <?php endforeach; ?>

                                </script>

                            </tr>

                        <?php endif; ?>

                    <?php endforeach; ?>
                </tbody>

            </table>
        </div>
    </div>
    
    
    
    
</body>


<?php

    // includeing footer file

    include '../layout/footer.php';

?>