<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RPMS</title>
    <link rel="stylesheet" href="\COT\css\bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
</head>
<body>
    <header>
    <div class="container-fluid bg-dark">
        <div class="row">
            <div class="col-md-6">
                
                    <nav>
                        <ul class="nav">
                            <li class="nav-item">
                                <a href="#" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">More</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 ">
                        <?php 
                        if(isset($_SESSION['idUsers'])){
                            echo '<form action="includes/logout.inc.php" method="post">
                                <button name="logout-submit" class="btn btn-outline-danger btn-sm">Log out</button>
                            </form>';
                          }
                          else{
                            echo '<div class="mx-2">
                                    <form action="includes/login.inc.php"  class="form-inline" method="POST">
                                        <div class="form-control-sm ">
                                            <input type="text" name="userMail" placeholder="Enter username...">
                                            <input type="password" name="pwd" placeholder="Enter password...">
                                            <button name="login-submit" class="btn btn-primary btn-sm p-1-lg">Login</button> 
                                            <a href="signup.php" >Sign up</a> 
                                        </div>
                                    </form>
                                </div>';
                            }
                        ?>            
                    </div>
                </nav>
            
        </div>
    </div>
</div>
</header>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<script src="js/bootstrap.min.js"></script>


</body>
</html>
