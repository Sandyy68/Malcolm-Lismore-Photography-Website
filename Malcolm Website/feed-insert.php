<?php 
    if(isset($_POST["feedtxt"])){
      $sever_name = "localhost";
      $db_uname = "root";
      $db_pass = "";
      $db_name = "lismore_db";

      $userEmail = $_POST["emailtxt"];
      $ftext = $_POST["feedtxt"];

      $conn = mysqli_connect($sever_name, $db_uname, $db_pass, $db_name);
    
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      } else {

          //insert quari  keyword
          $sql = "INSERT INTO `feed_table`(`u_email`, `feed_text`) values ('$userEmail','$ftext');";

          if ($conn->query($sql) === TRUE) {
            
            echo"<script>window.location.href='index.php';alert('Feedback Created Success!');</script>";
            //header('Location: index.php');
            exit;    
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        }
    }else{
        echo"error";
    }
    ?>