<?php
include "conn.php";
if (isset($_POST['input'])){

    $input = $_POST['input'];
    $querylive = "SELECT * FROM ems";

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
                $id = $row['id'];
                $name = $row['name'];
                $pseudo_id = $row['pseudo_id']; 
                $sale = $row['sale'];
                $date = $row['date'];
            }
            ?>
            <tr>
                <td><?php echo $id;?></td>
                <td><?php echo $name;?></td>
                <td><?php echo $pseudo_id;?></td>
                <td><?php echo $sale;?></td>
                <td><?php echo $date;?></td>
            </tr>
        </tbody>
        </table>
    
    <?php
    }else{
        echo "<div class='text-danger text-center mt-3'>No Data Found.</div>";
    }
}

?>