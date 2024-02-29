<!-- 
    Author : Sibin V M, 
    Page Title : User Index,
    Created Date : 03-06-2022 
-->


<?php

    //including header file

    include '../layout/header.php';

    // check session, if set redirect to user dashboard;

    if(isset($_SESSION['id'])) {
        header("Location: /view/user/dashboard.php");
    }

?>

<body class="bg-dark text-light">

    <?php

        include '../layout/navbar.php'

    ?>

    <section class="adminLogin">
        <div class="container d-flex align-items-center jusify-content-center">
            <div class="row text-center m-auto">
                <h3 class="text-center mb-3">User Login</h3>
                <form action="home.html" class="m-auto loginForm" method="POST" id="loginForm">
                    <div>
                        <input type="email" name="email" id="userEmail" class="w-100 my-2 ps-2" placeholder="Email">
                    </div>
                    <div>
                        <input type="password" name="password" id="userPassword" class="w-100 my-2 ps-2" placeholder="Password" maxlength="8">
                    </div>
                    <div>
                        <button type="button" class="btn btn-danger w-100 mt-3" id="userLoginBtn">Login</button>
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