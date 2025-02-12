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
<body class="galbody">
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
<!--show gallery images-->
<div class="gall-container">
      <?php 
      $sever_name = "localhost";
      $db_uname = "root";
      $db_pass = "";
      $db_name = "lismore_db";
      

      $conn = mysqli_connect($sever_name, $db_uname, $db_pass, $db_name);
      
      if (!$conn){
        die("Connection failed: " . mysqli_connect_error());
      }else{
  
        $sql = "SELECT * FROM `gallery_table`";

        $result = $conn->query($sql);

        if($result->num_rows > 0){

            while($row = $result->fetch_assoc()){
              $imgLocation = $row["gal_location"];
              echo"<img src ='$imgLocation' alt = '$imgLocation' class = 'gallery-img'>";
            }
        }
      }

      ?>
    </div>

