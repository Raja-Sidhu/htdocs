<?php
require_once('Config/connect.php');
$query="SELECT * FROM empdetails";
$result=mysqli_query($con,$query)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Fetch Date from Database in Php</title>
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">  
                    <div class="card-header">
                        <h2 class="display-6 text-center">Fetch Data from Database in Php</h2>
</div>
<div class="card-body">
    <table class="table table-bordered text-center">
        <tr class="bg-dark text-white">
            <td> Employee ID </td>
            <td> Employee Name </td>
            <td> Gender </td>
            <td> Department </td>
            <td> Address </td>
            <td> Date of Joining </td>
        <tr>
        <tr>
            <?php
              while($row=mysqli_fetch_assoc($result))
              {
            ?>
             <td><?php echo $row['emp_id']; ?></td>
             <td><?php echo $row['emp_name']; ?></td>
             <td><?php echo $row['gender']; ?></td>
             <td><?php echo $row['dep']; ?></td>
             <td><?php echo $row['addr']; ?></td>
             <td><?php echo $row['doj']; ?></td>

              </tr>
            <?php    
              }
            ?>
        <tr>
</table>
</div>
</div>
</div>
</div>
</div>
</body>


    
</body>
</html>