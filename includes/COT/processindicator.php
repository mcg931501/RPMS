<?php
$conn = mysqli_connect('localhost', 'root', '' ,'rpms') or die(mysqli_error($conn));
if(isset($_POST['tsave'])){
   
    $indicator_no = $_POST['indicator_no'];
    $indicator_name = $_POST['indicator_name'];
    $query = "INSERT INTO tindicator_tbl(indicator_no,indicator_name) VALUES ('$indicator_no','$indicator_name')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo '<script>alert("Successfully Added!")</script>'; 
        echo '<script>window.location.assign("addindicator.php")</script>';

    }

    else 
    {
        echo '<script>alert("Data not Save!")</script>'; 

    }
}

if(isset($_POST['mtsave'])){
   
    $indicator_no = $_POST['indicator_no'];
    $indicator_name = $_POST['indicator_name'];
    $query = "INSERT INTO mtindicator_tbl(indicator_no,indicator_name) VALUES ('$indicator_no','$indicator_name')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo '<script>alert("Successfully Added!")</script>'; 
        echo '<script>window.location.assign("addindicator.php")</script>';

    }

    else 
    {
        echo '<script>alert("Data not Save!")</script>'; 

    }

}

if(isset($_POST['tupdate']))
                    
{

    $indicator_id = $_POST['indicator_id'];
    $query = "SELECT * FROM tindicator_tbl where indicator_id = '$indicator_id'";

    $indicator_no = $_POST['indicator_no'];
    $indicator_name = $_POST['indicator_name'];

    $query = "UPDATE tindicator_tbl SET indicator_no = '$indicator_no', indicator_name='$indicator_name' where indicator_id = '$indicator_id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
 
        echo '<script>alert("Indicator Updated!")</script>'; 
        echo '<script>window.location.assign("t_index.php")</script>';
    }
    else
    {
        echo '<script>alert("Indicator Not Update!")</script>';
    }
    
}


if(isset($_POST['mtupdate']))
                    
{

    $indicator_id = $_POST['indicator_id'];
    $query = "SELECT * FROM mtindicator_tbl where indicator_id = '$indicator_id'";
    
    $indicator_no = $_POST['indicator_no'];
    $indicator_name = $_POST['indicator_name'];

    $query = "UPDATE mtindicator_tbl SET indicator_no = '$indicator_no', indicator_name='$indicator_name' where indicator_id = '$indicator_id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
 
        echo '<script>alert("Indicator Updated!")</script>'; 
        echo '<script>window.location.assign("mt_index.php")</script>';
    }
    else
    {
        echo '<script>alert("Indicator Not Update!")</script>';
    }
    
}


if(isset($_GET['tdelete']))
                    
{

    $indicator_id = $_GET['tdelete'];
    $query = "DELETE FROM tindicator_tbl  where indicator_id = '$indicator_id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
 
        echo '<script>alert("Indicator Deleted!")</script>'; 
        echo '<script>window.location.assign("t_index.php")</script>';
    }
    else
    {
        echo '<script>alert("Indicator Not Deleted!")</script>';
    }
    
}

if(isset($_GET['mtdelete']))
                    
{

    $indicator_id = $_GET['mtdelete'];
    $query = "DELETE FROM mtindicator_tbl  where indicator_id = '$indicator_id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
 
        echo '<script>alert("Indicator Deleted!")</script>'; 
        echo '<script>window.location.assign("mt_index.php")</script>';
    }
    else
    {
        echo '<script>alert("Indicator Not Deleted!")</script>';
    }
    
}


?>