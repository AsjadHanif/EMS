<?php
include "conn.php";
session_start();
if(!isset($_SESSION["name"])){
    header("location: {$hostname}/login.php");

}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/3f4a0f7ca6.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>EMS</title>
    <style>
        #myInput {
            background-image: url('img/search_icon.png');
            background-position: 10px 10px;
            background-repeat: no-repeat;
            width: 20%;
            font-size: 16px;
            padding: 12px 20px 12px 50px;
            border: 2px solid #ddd;
            border-radius: 8px;
            margin: 0 0 12px 12px;
        }
    </style>
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
                    <?php if ($_SESSION['role'] == 1){?>
                    <li class="nav-item">
                        <a class="nav-link" id="addemp" href="add.php">Add Employee</a>
                    </li>
                    <?php } ?>
                </ul>
                <ul class="navbar-nav me-4 p-3 d-flex">
                    <li class="nav-item">
                        <a href="logout.php">
                            <button class="btn btn-outline-secondary" type="submit">Logout</button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div style="margin-top: 130px;">
    <h1 style="margin-bottom:30px;" class="text-center fw-bold">List of Employs</h1>    
    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
    <input type="text" id="myInput" class="form-control" name="input" placeholder="Search..">
    </form>
    <table id="table" class="table text-center table-bordered table-hover">
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
            <?php 
            $sql1 = "SELECT user_id,name,pseudo_id,sale,date,role FROM ems";
            $sql_run = mysqli_query($conn,$sql1) or die("sql_run failed");

            if (mysqli_num_rows($sql_run)>0){
                while($row = mysqli_fetch_assoc($sql_run)) {
            ?>
            <tr>
                <th scope="row"><?php echo $row['user_id'] ?></th>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['pseudo_id'] ?></td>
                <td><?php echo $row['sale'] ?></td>
                <td><?php echo $row['date'] ?></td>
                <td class="">
                    <?php
                    if($_SESSION['role'] == '1'){ ?>
                    <a class="btn btn-sm btn-danger " id="delBtn" href='delete-user.php?id=<?php echo $row["user_id"]; ?>'>Delete</a>
                    <?php
                    }
                    ?>
                </td>
            </tr>
            <?php
            }
                    }else {
                        echo "<h1 class='text-danger text-center'>No Employee Data Found.</h1>";
                    }
                    
            ?>
        </tbody>
        
    </table>
    </div> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function(){

        $("#myInput").keyup(function(){
            var input = $(this).val();
            // alert(input);
            if (input != "") {
                $.ajax({

                    url: "livesearch.php",
                    method: "POST",
                    data: {input: input},

                    success: function(data){
                        $("#table").html(data);
                        $("#table").css("display","block");

                    }
                });
            }else{
                $("#table").css("display","none");
            }
        });
    });


    </script>
</body>

</html>