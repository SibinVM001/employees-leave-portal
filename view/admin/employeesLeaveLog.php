<?php

    // Author : Sibin V M, 
    // Page Title : Employees Leave Log,
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
                <span style="font-size: 22px;">Employees Leave Log (<?= date("l jS \of F Y") ?>)</span>
                <span style="float: right;"><a href="/view/admin/dashboard.php"><button class="btn btn-outline-danger">Back</button></a></span>
            </div>   
        </div>
        <div class="row mt-4 p-3" style="border: 1px solid white">
            <table class="table table-dark table-hover table-borderless">
                <thead>
                    <th>Sl.No</th>
                    <th>Employee Id</th>
                    <th>Name</th>
                    <th>Total Leave</th>
                    <th>Monthly Leave</th>
                    <th>Weekly Leave</th>
                </thead>
                <tbody>
                    <?php foreach(Queries::selectAll('employees') as $index=>$employee): ?>

                        <?php if($employee['is_admin'] == 0): ?>

                            <tr>
                                <th><?= $index + 1 ?></th>

                                <?php if((int)$employee['id'] < 10): ?>

                                    <td>EMP<?= '0'.$employee['id'] ?></td>

                                <?php else: ?>

                                    <td>EMP<?= $employee['id'] ?></td>

                                <?php endif; ?>

                                <td><?= ucwords($employee['name']) ?></td>

                                <?php 

                                    $data = Queries::fetchRow('leaves', 'employee_id', $employee['id']);

                                    $months = []; 
                                    $totalDays = 0;
                                    $monthlyLeave = 0;
                                    $weeklyLeave = 0;

                                    foreach($data as $item){

                                        if($item['status'] == 1) {

                                            $totalDays += $item['total_days'];                                      

                                            if(explode('-', $item['start_date'])[1] == date('m')) {

                                                $monthlyLeave += $item['total_days'];

                                                $weeklyLeave += $item['weekly_leave'];

                                            }                   
                                            
                                        }                                   
                                    }

                                ?>                   

                                <td><?= $totalDays ?></td>

                                <td>
                                    <?= $monthlyLeave ?>
                                </td>

                                <td>
                                    <?= $weeklyLeave ?>
                                </td>

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