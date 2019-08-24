<?php




$mysqli = new mysqli('localhost', 'root', '' ,'rpms') or die(mysqli_error($mysqli));

if(isset($_POST['save'])){
    $rubric_lvl  = $_POST['rubric_lvl'];
    $level_name = $_POST['level_name'];
    $rubric_description = $_POST['rubric_description'];


    $mysqli->query("INSERT INTO trubric_tbl(rubric_lvl,level_name,rubric_description) VALUES ('$rubric_lvl','$level_name','$rubric_description')") or die($mysqli->error);

    
    header('location:../tRubric.php?notif=added');
    echo '<script>window.alert("Rubric Level Added!")</script>'; 

}

?>
