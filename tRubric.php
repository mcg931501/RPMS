<header>
<?php include 'header.php'; 
    if(isset($_GET['notif'])){
        if($_GET['notif'] == "added"){
            echo '<script class="alert-info">window.alert("Rubric Added") </script>';
        }else{
            echo "";
        }
    }
    
?>

</header>

<main>
    <?php require_once 'includes/processtrubric.php'; ?>
  
        <div class="container col-sm-8 my-4 bg-light ">
        <form action="includes/processtrubric.php" class="form-group sm" method="POST">
                <legend class="legend-control bg-success text-white ">Rubric Level Summary for Teacher</legend>
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="level" class="control-label"><strong>Rubric Level</strong></label>
                            <input type="number" name="rubric_lvl" id="" class="form-control" width="500"> 
                        </div>

                        <div class="col-sm-6">
                            <label for="level-name" class="control-label"><strong>Level Name</strong></label>
                            <input type="text" name="level_name" id=level-name" class="form-control" width="500"> 
                        </div>
                    </div>
                    
                    <div>
                            <label for="description" class="control-label w-25 "><strong>Description</strong></label>
                            <textarea name="rubric_description" id="policy-content" cols="5" rows="5" class="form-control"></textarea>
                        </div>  
                        <div>
                            <button type="submit" class="btn-sm btn-success my-4" name="save">Save</button>
                        </div>
        </form>
        </div>
    

</main>

<footer>

</footer>