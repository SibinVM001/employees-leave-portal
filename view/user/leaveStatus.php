<!-- 
    Author : Sibin V M, 
    Page Title : Leave Status,
    Created Date : 04-06-2022 
-->


<?php

    // start session

    session_start();

    // incliding queries file

    include '../../db/queries.php';

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
            <h5>Leave Status</h5>
        </div>
        <table class="table table-dark table-hover table-borderless">
            <thead>
                <th>Sl.No</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Total Days</th>
                <th>Status</th>
            </thead>
            <tbody>
                <?php $slno = 0; ?>

                <?php foreach(Queries::selectAll('leaves') as $index=>$leave): ?>

                    <?php if($leave['employee_id'] == $_SESSION['id']) : ?>

                        <?php $slno = $slno + 1; ?>

                        <tr>
                            <th><?= $slno ?></th>
                            <td><?= $leave['start_date'] ?></td>
                            <td><?= $leave['end_date'] ?></td>
                            <td><?= $leave['total_days'] ?></td>
                            <td>
                                <?php if($leave['status'] == 1): ?>

                                    <span style="width: 70px;" class="badge rounded-pill bg-danger">Approved</span>

                                <?php elseif($leave['status'] == ''): ?>

                                    <span style="width: 70px;" class="badge rounded-pill bg-warning">Pending</span>

                                <?php else: ?>

                                    <span style="width: 70px;" class="badge rounded-pill bg-secondary">Rejected</span>

                                <?php endif; ?>                           
                            </td>
                        </tr>

                    <?php endif; ?>
                    
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>