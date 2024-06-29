<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>He</title>
  </head>
  <body>

  <?php
include "conn.php";
session_start();
if (isset($_POST['input'])){

    $input = $_POST['input'];
    $querylive = "SELECT * FROM ems WHERE user_id LIKE '{$input}%' OR name LIKE '{$input}%' OR pseudo_id LIKE '{$input}%' OR sale LIKE '{$input}%' OR date LIKE '{$input}%' LIMIT 5";

    $resultlive = mysqli_query($conn, $querylive) or die("Couldn't connect to");

    if (mysqli_num_rows($resultlive) > 0) {?>
    
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
            while ($row = mysqli_fetch_assoc($resultlive)){
                $id = $row['user_id'];
                $name = $row['name'];
                $pseudo_id = $row['pseudo_id']; 
                $sale = $row['sale'];
                $date = $row['date'];
            ?>
            <tr>
                <td><?php echo $id;?></td>
                <td><?php echo $name;?></td>
                <td><?php echo $pseudo_id;?></td>
                <td><?php echo $sale;?></td>
                <td><?php echo $date;?></td>
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
            ?>
        </tbody>
        </table>
    
    <?php
    }else{
        echo "<div class='text-danger text-center mt-3'>No Data Found.</div>";
    }
}

?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
