<?php

    if (isset($_POST["sy-set"])){
        require "conn.inc.php";
        include "func.lib.php";
        
        $startMonth = mysqli_real_escape_string($conn,$_POST["start-month"]);
        $startDay = mysqli_real_escape_string($conn,$_POST["start-day"]);
        $endMonth = mysqli_real_escape_string($conn,$_POST["end-month"]);
        $endDay =  mysqli_real_escape_string($conn,$_POST["end-day"]);

       $sdate = getStartYear()."/".$startMonth."/".$startDay;
       $edate = getEndYear()."/".$endMonth."/".$endDay;
        $sy_desc = getStartYear()."-".getEndYear();
        
        $query = "INSERT INTO sy_tbl(startDate,end_date,sy_desc) VALUES ('$sdate','$edate','$sy_desc')";

        if(mysqli_query($conn,$query)){
            echo "School Year Added!";
        } else {
            echo "Error: ".mysqli_error($conn);
        }
       
    }

    
    
 
    



    //sy.php import file 
    /*
    require "conn.inc.php";
    if(isset($_POST['sdate'])){
        $sdate = mysqli_real_escape_string($conn,$_POST['sdate']);
        $edate = mysqli_real_escape_string($conn,$_POST['edate']);
        
        $query = "INSERT INTO sy_tbl(start_date,end_date) VALUES ('$sdate','$edate')";

        if(mysqli_query($conn,$query)){
            echo 'User Added';
        }else{
            echo 'error: '.mysqli_error($conn);
        }
    }

*/
        
      