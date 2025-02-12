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
<!--hometitle-->
  <div class="hometitle1">
    <h1>Our Packages</h1>
  </div>

  </div>
    <?php 
    function getPackData($myID,$dataRequired){
      $sever_name = "localhost";
      $db_uname = "root";
      $db_pass = "";
      $db_name = "lismore_db";
    
      $conn = mysqli_connect($sever_name, $db_uname, $db_pass, $db_name);

      $sql = "SELECT * FROM `packages-table` WHERE `pack_id` = '$myID';";

      $result = $conn->query($sql);

      if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
          $packName = $row["pack_Name"];
          $packPrice = $row["pack_Price"];

          if($dataRequired == "Name"){
            echo"<b>$packName</b>";
          } elseif($dataRequired == "Price"){
            echo"<h3 style='color:red'>Price $:$packPrice</h3>";
          }
        }
      }
      $conn->close();
    }
    ?>

<!--Package details-->
<div class="packdetails">
    <div class="accordion bg-dark" data-bs-theme="dark" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <?php getPackData('1','Name'); ?>
        </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
        <div class="accordion-body">
        <img  class="pacimg" src="images/gallery/wedimg.png" alt="">
            <p style="color:gray">"Capture your special day with our exquisite Wedding Photography Package. Our expert photographers will document every beautiful moment, from the bride's graceful entrance to the heartfelt vows and the joyous celebrations. With a combination of candid shots and posed portraits, we'll create a timeless collection of images that will cherish your love story forever. Book now to make your wedding memories last a lifetime."</p>
            <?php getPackData('1','Price'); ?>
        </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        <?php getPackData('2','Name'); ?>
        </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">
        <img  class="pacimg" src="images/gallery/wedimg2.jpg" alt="">
        <p style="color:gray">Elevate your personal story with our Portrait Photography Package. Our skilled photographers specialize in creating captivating portraits that reflect your unique personality and style. Whether it's a family, individual, or professional portrait, we'll capture your essence with artistry and precision. With a blend of natural light and studio settings, we'll craft stunning images that resonate with your character. Book now to immortalize your individuality.</p>
        <?php getPackData('2','Price'); ?>
    </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        <?php getPackData('3','Name'); ?>
        </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">
        <img  class="pacimg" src="images/gallery/wedimg3.jpeg" alt="">    
        <p style="color:gray">Make your events unforgettable with our Event Photography Package. Our experienced photographers will be there to capture every significant moment, from corporate conferences and trade shows to social gatherings and parties. We have the expertise to document the atmosphere and emotions, ensuring your event is remembered for years to come. Secure your booking now to preserve the memories of your special occasions.</p>
            <?php getPackData('3','Price'); ?>
        </div>
        </div>
    </div>
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
