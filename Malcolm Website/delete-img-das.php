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
<div style="background-color: #030303b3; width: 1000px; margin: auto; margin-top: 40px; padding:50px; border-radius: 20px;  text-align: center; -webkit-box-shadow: 0px 0px 24px 7px rgba(0,0,0,0.66); -moz-box-shadow: 0px 0px 24px 7px rgba(0,0,0,0.66);box-shadow: 0px 0px 24px 7px rgba(0,0,0,0.66);">
    <form action="delete-images.php" method="post"  enctype ="multipart/form-data"  style="display:flex;flex-wrap:wrap;justify-content:space-evenly;height:200px;">
    <select name="imgDel" id="imgDel" class="delform">
              <option value="0">-- Select Image to Delete --</option>
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
                        $imgID = $row["gal_id"];
                        echo"<option value ='$imgLocation'>$imgLocation</option>";
                      }
                  }
                }

              ?>
          </select>
          <button class=" delbtn btn btn-danger" type="submit" >Delete</button>         
    </form>
</div>
