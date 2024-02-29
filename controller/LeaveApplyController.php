<?php
    
    // Author : Sibin V M, 
    // Page Title : Leave Apply Controller,
    // Created Date : 03-06-2022

    
    // incliding queries file

    include '../db/queries.php';

    // start a session

    session_start();

    // variables

    $startDay = explode('-', $_POST['startDate'])[2];
    $endDay = explode('-', $_POST['endDate'])[2];

    $startMonth = explode('-', $_POST['startDate'])[1];
    $endMonth = explode('-', $_POST['endDate'])[1];

    $startYear = explode('-', $_POST['startDate'])[0];
    $endYear = explode('-', $_POST['endDate'])[0];

    $start = new DateTime($startYear.'-'.$startMonth.'-'.$startDay);
    $interval = new DateInterval('P1D');
    $end = new DateTime($endYear.'-'.$endMonth.'-'.((int)$endDay + 1));

    $period = new DatePeriod($start,$interval,$end);

    $sundays = 0;
    $sundaysList = [];
    $weeklyLeave = 0;
    $daysList = [];

    // calculate sundays

    foreach ($period as $day){

        array_push($daysList, $day->format('d'));

        if ($day->format('N') == 7){
            
            $sundays = $sundays + 1;
            array_push($sundaysList, $day->format('d'));
        } 
       
    }

    // calculate weekly leave

    if(!empty($sundaysList)) {

        for($i=(int)$start->format('d'); $i < (int)$sundaysList[0]; $i++) {

            
            foreach($daysList as $item) {
                
                if($i == (int)$item) {
                    $weeklyLeave = $weeklyLeave + 1;
                }
                
            }
    
        }

    } else {
        
        $weeklyLeave =  $endDay - $startDay + 1 - $sundays;
    
    }
    
    // calculate total leave days

    if($startMonth == $endMonth) {

        $days =  $endDay - $startDay + 1 - $sundays;

    } else {

        $days = date("t", strtotime($_POST['startDate'])) + 1 - $startDay + $endDay - $sundays;

    }

    // insert data into leaves table

    Queries::insertInto('leaves', [
        $_SESSION['id'], 
        $_POST['startDate'], 
        $_POST['endDate'], 
        $days,
        $weeklyLeave,
        NULL
    ]);
    
    // redirect page to user leave status

    header("Location: /view/user/leaveStatus.php");   

?>