<?php 

    // Author : Sibin V M, 
    // Page Title : Leave Application,
    // Created Date : 03-06-2022 


    // start session

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <!-- link bootstrap cdn -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- link fontawsome cdn -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- link styles -->

    <link rel="stylesheet" href="../../public/css/app.css">

</head>
<body class="bg-dark">

    <div class="container bg-dark text-light mt-5 p-5" style="border: 1px solid white;">
        <div class="row mb-3">
            <h5>Leave Application</h5>
        </div>

        <form action="../../controller/LeaveApplyController.php" method="post">
            
            <div class="row ms-1">
                <div class="col-3">
                    <label for="startDate">Start Date</label>
                </div>
                <div class="col-1">
                    :
                </div>
                <div class="col-8">
                    <div class="calenderContainer col-4 d-flex align-items-center justify-content-center p-0">
                        <input type="date" class="inputField p-0 calender" name="startDate" id="startDate" min="<?= date('Y-m-d'); ?>">
                        
                        <span class="calenderOpenBtn">
                            <button type="button" class=" d-flex align-items-center justify-content-center"><i class="fa-solid fa-calendar-day" style="color: gray;"></i><button>
                        </span>
                    </div>

                </div>
            </div>

            

            <div class="row mt-3 ms-1">
                <div class="col-3">
                    <label for="endDate">End Date</label>
                </div>
                <div class="col-1">
                    :
                </div>
                <div class="col-8">
                    <div class="calenderContainer col-4 d-flex align-items-center justify-content-center p-0">
                        <input type="date" class="inputField p-0 calender" name="endDate" id="endDate" min="<?= date('Y-m-d'); ?>">
                        <span class="calenderOpenBtn">
                            <button type="button" class=" d-flex align-items-center justify-content-center"><i class="fa-solid fa-calendar-day" style="color: gray;"></i><button>
                        </span>
                    </div>

                    
                </div>
            </div>

            <div class="row mt-4 ms-1">
                <span id="dayErrorMsg" class="text-danger" style="visibility: hidden;">It's Sunday please select another day</span>
            </div>

            <div class="row mt-4 ms-1">
                <div class="col-3">
                </div>
                <div class="col-1">
                    
                </div>
                <div class="col-8 text-end">
                    <button type="submit" class="btn btn-danger">Apply</button>
                </div>
            </div>

            <!-- <div>
                
            </div> -->
        </form>
    </div>

    <script>


        // Everything except weekend days
        const validate = dateString => {

            const day = (new Date(dateString)).getDay();

            if (day==0) {

                document.getElementById('dayErrorMsg').style.visibility = 'visible';

                return false;

            }

            return true;

        }
        
        // Sets the value to '' in case of an invalid date
        document.getElementById('startDate').onchange = evt => {

            if (!validate(evt.target.value)) {

                evt.target.value = '';

            }

        }

        document.getElementById('endDate').onchange = evt => {

            if (!validate(evt.target.value)) {

                evt.target.value = '';

            }

        }

        document.getElementById('startDate').onclick = function () {

            document.getElementById('dayErrorMsg').style.visibility = 'hidden';

        }

        document.getElementById('endDate').onclick = function () {

            document.getElementById('dayErrorMsg').style.visibility = 'hidden';

        }

    </script>

    <?php

        // includeing footer file

        include '../layout/footer.php';

    ?>
</body>
</html>