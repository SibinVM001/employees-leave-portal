<!-- 
    Author : Sibin V M, 
    Page Title : User Dashboard,
    Created Date : 03-06-2022 
-->


<?php

    // incliding queries file

    include '../../db/queries.php';

    //including header file

    include '../layout/header.php';

    // check session, if not set redirect to user login;
    
    if(!isset($_SESSION['id'])) {
        header("Location: /view/user");
    }

?>

<body class="bg-dark text-light">

    <?php
    
    //including navbar file

    include 'navbar.php';

    ?>

    <div class="container" id="sideBar">
        <div class="row">
            <div class="col-md-3">
                <div class="container mt-5 py-5" style="border: 1px solid white;">
                    <div class="row justify-content-center">
                        
                        <?php foreach(Queries::selectAll('employees') as $index=>$item): ?>

                            <?php if($item['id'] == $_SESSION['id']) :?>

                                <div class="d-flex align-items-center justify-content-center" style="width: 90px; height:90px;border:2px solid white; border-radius: 100%;">

                                    <img src="../../public/images/<?= $item['gender'] ?>.png" style="border-radius: 100%;" alt="" width="100%">

                                </div>

                                <h4 class="text-center mt-3"><?= ucwords($item['name']) ?></h4>

                            <?php endif; ?>

                        <?php endforeach; ?>
                        
                    </div>
                    <div class="row mt-2">
                        <div class="py-2">
                            <button id="personalDetails" class="btn btn-danger w-100">Personal Details</button>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="py-2">
                            <button id="leaveApplication" class="btn btn-danger w-100">Apply for a Leave</button>                           
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="py-2">
                        <button id="leaveStatus" class="btn btn-danger w-100">Leave Status</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                          
                <iframe id="iframe" src="personalDetails.php" frameborder="0" scrolling="no" onload="resizeIframe(this)" width="100%"></iframe>
                
            </div>
        </div>
    </div>

</body>


<?php

    // includeing footer file
    
    include '../layout/footer.php';

?>