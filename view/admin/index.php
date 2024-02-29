<?php

    // Author : Sibin V M, 
    // Page Title : Admin Index,
    // Created Date : 04-06-2022


    //including header file

    include '../layout/header.php';

    // check session, if set redirect to admin dashboard;

    if(isset($_SESSION['admin_id'])) {
        header("Location: /view/admin/dashboard.php");
    }

?>

<body class="bg-dark text-light">

    <?php

        include '../layout/navbar.php'

    ?>

    <section class="adminLogin">
        <div class="container d-flex align-items-center jusify-content-center">
            <div class="row text-center m-auto">
                <h3 class="text-center mb-3">Admin Login</h3>
                <form action="home.html" class="m-auto loginForm" method="POST" id="loginForm">
                    <div>
                        <input type="email" name="email" id="adminEmail" class="w-100 my-2 ps-2" placeholder="Email">
                    </div>
                    <div>
                        <input type="password" name="password" id="adminPassword" class="w-100 my-2 ps-2" placeholder="Password" maxlength="8">
                    </div>
                    <div>
                        <button type="button" class="btn btn-danger w-100 mt-3" id="adminLoginBtn">Login</button>
                    </div>
                </form>
                <div class="row mt-3">
                    <span id="errorMsg" class="errorMsg">hello</span>
                </div>
            </div>
        </div>
    </section>
    
</body>  

<?php

    // includeing footer file
    
    include '../layout/footer.php';

?>

    