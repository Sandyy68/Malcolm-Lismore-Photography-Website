<?php
  session_start();
  if(!isset($_SESSION["username"]) && !isset($_SESSION["password"])){
    header('Location: customer-login.php'); // if session invalid
    exit;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
<body class="timage-container w-100">
<!--add navigation bar-->
<div class="navbody w-100">
  <div class="bodylogin w-100">
    <ul class="nav nav-tabs space-between">
      <li class="nav-item new">
        <a class="nav-link" onclick="alert('Please Logout First !');" >Home</a>
      </li>
      <li class="nav-item new">
        <a class="nav-link" onclick="alert('Please Logout First !');" >Packages</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" onclick="alert('Please Logout First !');">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" onclick="alert('Please Logout First !');">Journal</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" onclick="alert('Please Logout First !');">Enquaries</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" onclick="alert('Please Logout First !');">Sign Up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" onclick="alert('Please Logout First !');">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" onclick="alert('Please Logout First !');">Admin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Log Out</a>
      </li>


    </ul>
  </div>
</div>
<!--customer dash board-->
    <!--Username Retreival-->
    <?php 
        $userid = $_GET['userid'];
    ?>
<div class="cusdash">
  <div class="card">
    <img class="adiminimg" src="https://cdn-icons-png.flaticon.com/512/6570/6570292.png" class="card-img-top" alt="...">
    <button class="card-body btnbody">
      <?php 
        echo"<a href='add-enq.php?u_id=".urlencode($userid)."'>Add Enquaries</a>";
      ?>
    </button>
  </div>
  <div class="card">
    <img class="adiminimg" src="https://cdn-icons-png.flaticon.com/512/3527/3527506.png" class="card-img-top" alt="...">
    <button class="card-body btnbody">
      <?php 
        echo"<a href='cus-enq-show.php?u_id=".urlencode($userid)."'>View Added Enquaries</a>";
      ?>
    </button>
  </div>

</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" 
integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" 
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" 
integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" 
crossorigin="anonymous"></script>
</html>
</body>
</html>