<?php include 'header.php';?>
<?php

$conn = mysqli_connect('localhost', 'root', '' ,'rpms') or die(mysqli_error($conn));
$indicator_id = $_GET['tupdate'];
    $query = "SELECT * FROM tindicator_tbl where indicator_id = '$indicator_id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        while($row = mysqli_fetch_array($query_run))
        {


            ?>

<div class="container col-sm-8 my-4 bg-light ">
        <div class="container col-sm-8 my-4 bg-light ">
                <form action="processindicator.php" class="form-group sm" method="POST">
                    <input type="hidden" name="indicator_id" value="<?php echo $row['indicator_id']?>">
                        <legend class="legend-control bg-success text-white ">Update COT Indicator - Teacher</legend>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="level" class="control-label"><strong>Indicator No.</strong></label>
                                    <input type="text" name="indicator_no" value="<?php echo $row['indicator_no']?>" class="form-control" width="500" required> 
                                </div>
                                <div class="col-sm-6">
                                    <label for="level" class="control-label"><strong>Indicator Name</strong></label>
                                    <textarea class="form-control" name="indicator_name" rows="5" required><?php echo $row['indicator_name']?></textarea> 
                                </div>
                            </div>
                            <div>
                                    <button type="submit" class="btn-sm btn-success my-4" name="tupdate">Update</button>
                                    <input type="button" value="Cancel" class="btn-sm btn-danger my-4" onclick="window.location.href='t_index.php'" />
                            </div>
                </form>
        </div>
</div>
            <?php
        }

    }
    else
    {
        echo '<script>alert("No record found!")</script>';  
    }

?>