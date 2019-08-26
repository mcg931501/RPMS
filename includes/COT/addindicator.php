<head>

</head>
<header>
<?php include 'header.php'; 

    
?>

</header>

<main>
    <?php require_once 'addindicator.php'; ?>
  
        <div class="container col-sm-8 my-4 bg-light ">
        <form action="processindicator.php" class="form-group sm" method="POST">
                <legend class="legend-control bg-success text-white ">COT Indicator for Teacher</legend>
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="level" class="control-label"><strong>Indicator No.</strong></label>
                            <input type="text" name="indicator_no" id="" class="form-control" width="500" required> 
                        </div>
                        <div class="col-sm-6">
                            <label for="level" class="control-label"><strong>Indicator Name</strong></label>
                            <textarea class="form-control" name="indicator_name" rows="5" required></textarea>
                        </div>
                    </div>
                    <div>
                            <button type="submit" class="btn-sm btn-success my-4" name="tsave">Save</button>
                            <input type="button" value="View" class="btn-sm btn-info my-4" onclick="window.location.href='t_index.php'" />

                        
                    </div>
        </form>
        </div>

        <div class="container col-sm-8 my-4 bg-light ">
        <form action="processindicator.php" class="form-group sm" method="POST">
                <legend class="legend-control bg-info text-white ">COT Indicator for Master Teacher  </legend>
                    <div class="row">
                       <div class="col-sm-6">
                            <label for="level" class="control-label"><strong>Indicator No</strong></label>
                            <input type="text" name="indicator_no" id="" class="form-control" width="500" required> 
                        </div>
                        <div class="col-sm-6">
                            <label for="level" class="control-label"><strong>Indicator Name</strong></label>
                            <textarea class="form-control" name="indicator_name" rows="5" required></textarea> 
                        </div>
                    </div>
                    <div>
                        
                            <button type="submit" class="btn-sm btn-success my-4" name="mtsave">Save</button>
                            <input type="button" value="View" class="btn-sm btn-info my-4" onclick="window.location.href='mt_index.php'" />

                    </div>
        </form>
        </div>
    
</main>
<footer>
</footer>