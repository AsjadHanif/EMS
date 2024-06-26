<?php

include "conn.php";

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
    // if ($qurey_run) {
    //     echo "Done";
    // } else {
    //     echo "NOT Done";
    // }
    
    
}
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

<body>
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
                        <a class="nav-link" href="add.php">Add Employ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <h1 style="margin-top: 130px;margin-bottom:30px;" class="text-center fw-bold">List of Emploies</h1>    
    <table class="table text-center table-bordered table-hover">
        <thead>
            <tr class="bg-primary text-light">
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Pseudo_Id</th>
                <th scope="col">Sales</th>
                <th scope="col">Date</th>
                <th scope="col">Operation</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td class="">
                    <a class="btn btn-sm btn-success me-2">Edit</a>
                    <a class="btn btn-sm btn-danger">Delete</a></a>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>@fat</td>
                <td>
                    <a class="btn btn-sm btn-success me-2">Edit</a>
                    <a class="btn btn-sm btn-danger">Delete</a></a>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry the Bird</td>
                <td>Bird</td>
                <td>@twitter</td>
                <td>@twitter</td>
                <td>
                    <a class="btn btn-sm btn-success me-2">Edit</a>
                    <a class="btn btn-sm btn-danger">Delete</a></a>
                </td>
            </tr>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>