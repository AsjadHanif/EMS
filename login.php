<?php
include "conn.php";
session_start();
if(isset($_SESSION["name"])){
    header("location: {$hostname}/home.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>EMS Login</title>
</head>
<body  style="background-color:#eff0f4;">
<div class="container">
    <div class="row">
        <div class="col-md-offset-4 col-md-4" style="margin-left: 34%;margin-top:50px;">
            <img class="logo" style="width: 250px;height:150px;margin-left: 80px;" src="img/ems-logo.png">
            <h3 class="heading my-3">Login</h3>
            <!-- Form Start -->
            <form style="border-radius:10px;background-color:white" action="<?php $_SERVER['PHP_SELF']; ?>" method ="POST">
                <div class="form-group pt-3 ps-3 pe-3">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control mt-2" placeholder="John e.t.c" required>
                </div>
                <div class="form-group pt-3 ps-3 pe-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control mt-2" placeholder="John23#!@4.." required>
                </div>
                <input type="submit" name="login" class="my-3 ms-3 btn btn-primary" value="login" />
            </form>
            <!-- /Form  End -->
            <?php
            if(isset($_POST['login'])) {

                $name = mysqli_real_escape_string($conn,$_POST['name']);
                $password = $_POST['password'];

                $sql = "SELECT user_id, name, role FROM ems WHERE name = '{$name}' AND password = '{$password}'";
                $result = mysqli_query($conn,$sql) or die("Login Query Failed.");
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        
                        $_SESSION["name"] = $row['name'];
                        $_SESSION["user_id"] = $row['user_id'];
                        $_SESSION["role"] = $row['role'];
                        header("location: {$hostname}/home.php");
                    }
                }else{
                    echo '<div class="alert alert-danger">Username and Password are not matched.</div>';
                }
            }
            ?>
            
        </div>
    </div>
            </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>
</html>