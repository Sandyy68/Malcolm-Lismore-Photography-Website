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
<!--feed form-->
<div class="feedbody">
    <div style="background-color: #030303b3; width: 325px; margin: auto; margin-top: 40px; padding:50px; border-radius: 20px;  text-align: center; -webkit-box-shadow: 0px 0px 24px 7px rgba(0,0,0,0.66); -moz-box-shadow: 0px 0px 24px 7px rgba(0,0,0,0.66);box-shadow: 0px 0px 24px 7px rgba(0,0,0,0.66);">
        <form action="feed-insert.php" method="POST" >
        <input type="text" name="emailtxt" id="emailtxt" placeholder="Add your Email here" class="w-100 mb-1">
        <input type="text" name="feedtxt" id="feedtxt" placeholder="Add your feedback here" class="fdtext">
        <br><br>
        <button class="btn btn-success w-100" onclick="AdminLoginConfirm()">Submit</button>
        <br><br>
        </form>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>
