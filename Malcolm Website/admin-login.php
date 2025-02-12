<?php 
    session_start();
?>
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
<!--login form-->
<div class="lgbody">
  <div style="background-color: #030303b3; width: 325px; margin: auto; margin-top: 100px; padding:50px; border-radius: 20px;  text-align: center; -webkit-box-shadow: 0px 0px 24px 7px rgba(0,0,0,0.66); -moz-box-shadow: 0px 0px 24px 7px rgba(0,0,0,0.66);box-shadow: 0px 0px 24px 7px rgba(0,0,0,0.66);">
    <form action="admin-login.php" method="POST" >
      <h1 style="color:white">Admin Login</h1>
      <input type="text" name="uname" id="uname" placeholder="Username" class="dectext">
      <input type="password" name="upass" id="upass"placeholder="Password" class="dectext">
      <br><br>
      <div>
          <a href="#"></a>
      </div>
      <button class="btn btn-success w-100" onclick="return AdminLoginConfirm()">Login</button>
      <br><br>
    </form>
  </div>
</div>
<!--Admin login data base handle-->
<?php 
if(isset($_POST["uname"])){

    $unme = $_POST["uname"];
    $upsw = $_POST["upass"];

    $sever_name = "localhost";
    $db_uname = "root";
    $db_pass = "";
    $db_name = "lismore_db";


    // DB connection srting
    $conn = mysqli_connect($sever_name, $db_uname,$db_pass,$db_name);

    if (!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }else{

        $sql = "SELECT * From login_table where u_name='". $unme . "' and u_psw='" . $upsw . "' and u_id='1'";

        $result = $conn->query($sql);

        if($result->num_rows > 0){

            while($row = $result->fetch_assoc()){

              $_SESSION["username"] = $unme;
              $_SESSION["password"] = $upsw;

                echo"<script>window.location.href='admin-dashboard.php';</script>";
                exit;
            }
        }else{
            echo "<script>window.location.href='admin-login.php';alert('Wrong username or password.');</script>";
            
            exit;
        }

        $conn->close();
    }
}
?>
</body>
<!--admin login confirm-->
<script>
      function AdminLoginConfirm(){
        const upass = document.getElementById('upass');

        if(upass.value.length > 10){
            alert("Your password is longer than 10 digits!");
            return false;
        }else{return true;}
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" 
integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" 
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" 
integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" 
crossorigin="anonymous"></script>
</html>
