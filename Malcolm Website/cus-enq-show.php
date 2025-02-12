<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Lismore Photography</title>
</head>
<!--Username Retreival-->
<?php 
    $userID = $_GET['u_id'];
?>
<body class="timage-container w-100">
<!--add navigation bar-->
<div class="navbody w-100">
  <div class="bodylogin w-100">
    <ul class="nav nav-tabs space-between">
      <li class="nav-item new">
        <a class="nav-link" href="index.php" >Home</a>
      </li>
      <li class="nav-item new">
        <a class="nav-link" href="packages.php" >Packages</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutus.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gallery.php">Journal</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="customer-login.php">Enquaries</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cus-signup.php">Sign Up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contactus.php">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin-login.php">Admin</a>
      </li>


    </ul>
  </div>
</div>
<!--enq table-->
<table class="table w-100 mt-5">
            <thead>
                <tr>
                <td>enq ID</td>
                <td>user ID</td>
                <td>Email</td>
                <td>Tel No</td>
                <td>Date</td>
                <td>Time</td>
                <td>Location</td>
                <td>Status</td>
                </tr>
            </thead>

            <!--accept and delete button php part-->
            <?php 
              $sever_name = "localhost";
              $db_uname = "root";
              $db_pass = "";
              $db_name = "lismore_db";
          
          
              #DB connection srting
              $conn = mysqli_connect($sever_name, $db_uname,$db_pass,$db_name);
          
              if (!$conn){
                  die("Connection failed: " . mysqli_connect_error());
              }else{
          
                //$sql = "SELECT * FROM `enq_table` join ";
                $sql = "SELECT * FROM `enq_table` JOIN `login_table` on `enq_table`.`u_id` = `login_table`.`u_id` WHERE `login_table`.`u_id` = '$userID';";
        
                $result = $conn->query($sql);
        
                if($result->num_rows > 0){
        
                    while($row = $result->fetch_assoc()){

                      $status;
                      $enqID = $row["enqid"];

                      if($row["accepted_enq"] == 0){
                        $status = "Unaccepted";
                      }else{
                        $status = "Accepted";
                      }

                      echo"<tr>";
                      echo"<td>".$row["enqid"]."</td>";
                      echo"<td>".$row["u_id"]."</td>";
                      echo"<td>".$row["u_email"]."</td>";
                      echo"<td>".$row["u_tel"]."</td>";
                      echo"<td>".$row["date"]."</td>";
                      echo"<td>".$row["time"]."</td>";
                      echo"<td><a href='".$row["location"]."'>URL</a></td>";
                      echo"<td>$status</td>";
                      echo"
                      ";
                      echo"</tr>";
                    }
                  }
                }
            ?>
        </table>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" 
integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" 
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" 
integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" 
crossorigin="anonymous"></script>
</html>