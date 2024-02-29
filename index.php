<?php

    // Author : Sibin V M, 
    // Page Title : Index,
    // Created Date : 06-06-2022,


    // incliding queries file

    include './db/queries.php';

    //including header file

    include './view/layout/header.php';


?>

<body class="bg-dark text-light">

    <?php

    //including navbar file

    include './view/layout/navbar.php';

    ?>

    
        <div class="container justify-content-center mt-5" id="dashboardMain">
            <div class="row mt-5">
                <div class="col-md-6 mt-md-0 mt-5">
                    <a href="/view/admin">
                        <div class="card border-light text-light bg-dark p-3 mx-5">
                            <div class="card-body">
                                <?php if(isset($_SESSION['admin_id'])): ?>

                                    <h5 class="card-title text-center">Admin Dashboard</h5>

                                <?php else: ?>

                                    <h5 class="card-title text-center">Admin Login</h5>

                                <?php endif; ?>
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class="col-md-6 mt-md-0 mt-5">
                    <a href="/view/user">
                        <div class="card border-light text-light bg-dark p-3 mx-5">
                            <div class="card-body">
                            <?php if(isset($_SESSION['id'])): ?>

                                <h5 class="card-title text-center">Employee Dashboard</h5>

                            <?php else: ?>

                                <h5 class="card-title text-center">Employee Login</h5>

                            <?php endif; ?>
                            </div>
                        </div>
                    </a>
                </div>    
            </div>
        </div>

    
    
    
    
    
</body>


<?php

    // includeing footer file
    
    include './view/layout/footer.php';

?>