<header>
<?php include 'header.php';?>

</header>

<main>
<div class="container col-sm-8 my-4 bg-light ">
        <div class="control-label">
        <legend class="legend-control bg-success text-white ">COT Indicator - Teacher</legend>
        
        </div>
       
    </div>
<?php
$conn = mysqli_connect("localhost","root","","rpms");
$db = mysqli_select_db($conn,"rpms");

$query = "SELECT * FROM tindicator_tbl";
$query_run = mysqli_query($conn, $query);
?>
<div class="container col-sm-8 my-4 bg-light ">
<input type="button" value="Add Indicator" class="btn-sm btn-primary my-4" style="margin-left:88%;" onclick="window.location.href='addindicator.php'" />
<table class="table table-bordered" style="background-color: white; table-layout: 10;">
    <thead class="legend-control bg-success text-white " >
        <tr>
            <th>Indicator No</th>
            <th>Indicator Name</th>
            <th width=200;><center>Action</center></th>
            
            
        </tr>
    </thead>

<?php

    if($query_run){
        while($row = mysqli_fetch_array($query_run))
        {
            ?>
                <tbody>
                    <tr>
                        <th><?php echo $row['indicator_no'];?></th>
                        <th><?php echo $row['indicator_name'];?></th>
                        <form action="t_edit.php" method="post">
                            <input type="hidden" name="indicator_id" value ="<?php echo $row['indicator_id']?>">
                            <th>
                                <center>

                                <a class="btn-sm btn-success my-4" href="t_edit.php?tupdate=<?php echo $row['indicator_id'];?>">Edit</a>
                                    
                        </form>
                                    <a class="btn-sm btn-danger my-4" onclick="return confirm('Delete Record?'); "href="processindicator.php?tdelete=<?php echo $row['indicator_id'];?>">Delete</a>
                                <center>

                            </th>
            
                    </tr>    
                </tbody>
            
            <?php
            
        }

    }
    else
    {
        echo "No record found";

    }

?>


</table>
</div>

</main>