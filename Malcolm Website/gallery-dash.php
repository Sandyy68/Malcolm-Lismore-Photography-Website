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
      <li class="nav-item">
        <a class="nav-link" href="admin-dashboard.php">Back</a>
      </li>


    </ul>
  </div>
</div>
<!--image delete form-->
<div style="background-color: #030303b3; width: 325px; margin: auto; margin-top: 40px; padding:50px; border-radius: 20px;  text-align: center; -webkit-box-shadow: 0px 0px 24px 7px rgba(0,0,0,0.66); -moz-box-shadow: 0px 0px 24px 7px rgba(0,0,0,0.66);box-shadow: 0px 0px 24px 7px rgba(0,0,0,0.66);">
    <form action="uplod-images.php" method="post"  enctype ="multipart/form-data"  style="display:flex;flex-wrap:wrap;justify-content:space-evenly;height:200px;">
        <input type="file" name="ppic" id="ppic" class="w-60"  style="height:30%;">
        <select name="galType" id="galType" class="form-control w-40" style="height:20%;">
        <option value="landscape">Landscape</option>
        <option value="wildlife">Wildlife</option>
        <option value="birds">Birds</option>
        </select>
        <button class="btn btn-success w-100" type="submit" style="margin:0px 300px;height:20%;">Upload</button>
    </form>
</div>
