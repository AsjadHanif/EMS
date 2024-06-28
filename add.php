<?php
include "conn.php";
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>EMS</title>
</head>

<body style="background-color:#eff0f4;">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top"
        style="background-color:white;border-bottom:2px black solid;box-shadow: 0 0 10px rgba(0, 0, 0, 0.7); ">
        <div class="container-fluid">
            <a class="navbar-brand my-0 ms-3" href="home.php">
                <img class="pe-1" src="img/ems-logo.png" alt="" width="90" height="72"
                    class="d-inline-block align-text-center">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="add.php">Add Employee</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div style="margin-top: 100px;">
    <?php
    
if (isset($_POST['add_record'])) {
    $user_id = $_POST["user_id"];
    $name = $_POST["name"];
    $pseudo_id = $_POST["pseudo_id"];
    $role = $_POST["role"];
    $sales = $_POST["sales"];
    $password = $_POST["password"];

    $qurey = "INSERT INTO ems (user_id,name,pseudo_id,sale,password,role)
    VALUES ('$user_id','$name', '$pseudo_id','$$sales','$password','$role')";
    $qurey_run = mysqli_query($conn, $qurey);
    if ($qurey_run) {
        header("location:{$hostname}/home.php");
    } else {
        echo '<div class="alert alert-danger" style="margin:0;padding:30px;">ID are already exsist.</div>';
    }
    
    
}
        // if(isset($_POST['add_record'])) {
        //     $user_id = mysqli_real_escape_string($conn,$_POST['user_id']);
        //     $name = mysqli_real_escape_string($conn,$_POST['name']);

        //     $sql = "SELECT user_id, username FROM ems WHERE user_id = '{$user_id}' AND name = '{$name}'";
        //     $result = mysqli_query($conn,$sql) or die("result Query Failed.");
        //     if(mysqli_num_rows($result) > 0){
        //         while($row = mysqli_fetch_assoc($result)){
                    
        //             $_POST["name"] = $row['name'];
        //             $_POST["user_id"] = $row['user_id'];
        //             header("location: {$hostname}/home.php");
        //         }
        //     }else{
        //         echo '<div class="alert alert-danger">Username and Password are not matched.</div>';
        //     }
        // }
        ?>  
    <form style="margin-right:20%;margin-left:20%" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" class="addemp-form">
    <h1 style="padding-top: 5px;" class="text-center fw-bold">Add Employee</h1>    
    <div class="mb-3">
        <label class="form-label">ID</label>
            <input type="text" class="form-control" style="border-radius:8px;" placeholder="John321.." name="user_id" id="user_id">
    </div>
    <div class="mb-3">
        <label class="form-label">Name</label>
            <input type="text" class="form-control" style="border-radius:8px;" placeholder="John e.t.c" name="name" id="name">
    </div>
    <div class="mb-3">
        <label class="form-label">Pseudo Id</label>
            <input type="text" class="form-control" style="border-radius:8px;" placeholder="Jacob" name="pseudo_id" id="pseudo_id">
    </div>
    <div class="mb-3">
        <label class="form-label">Role</label>
            <select class="form-select" style="border-radius:8px;" placeholder="Jacob" name="role" id="role">
                <option value="1">Admin</option>
                <option value="0">User</option>
            </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Sales</label>
            <input type="number" class="form-control" style="border-radius:8px;" placeholder="325 (auto $)" name="sales" id="sales">
    </div>
    <div class="mb-3">
        <label class="form-label">Password</label>
            <input type="password" style="border-radius:8px;" class="form-control" id="password" name="password" placeholder="John23#!@4..">
    </div>
    <button type="submit" name="add_record" value="add_record" class="btn btn-primary">Add</button>
    </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>