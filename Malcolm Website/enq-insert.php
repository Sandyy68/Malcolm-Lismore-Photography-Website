<!--db handling -->
<?php 
    if(isset($_POST["userEmail"])){

        $userID = $_POST["uid"];
        $email = $_POST["userEmail"];
        $telno = $_POST["Telno"];
        $date = $_POST["Date"];
        $time = $_POST["Time"];
        $location = $_POST["Location"];

        $sever_name = "localhost";
        $db_uname = "root";
        $db_pass = "";
        $db_name = "lismore_db";
        

        $conn = mysqli_connect($sever_name, $db_uname, $db_pass, $db_name);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        } else {

            //insert quari join keyword ()
            $sql = "INSERT INTO enq_table (u_id, u_email, u_tel, date, time, location) 
            SELECT login_table.u_id, '$email', '$telno', '$date', '$time', '$location' 
            FROM login_table WHERE login_table.u_id = '$userID';";

            if ($conn->query($sql) === TRUE) {
                
                // Construct the URL with query parameters
                $redirectUrl = "add-enq.php?u_id=" . urlencode($userID);

                //header('Location: ' . $redirectUrl);
                echo"<script>window.location.href='$redirectUrl';alert('Enquiry Inserted Successfully !');</script>";
                exit;    
                
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        }
    }else{
        echo"User ID : $userID";
    }
?>