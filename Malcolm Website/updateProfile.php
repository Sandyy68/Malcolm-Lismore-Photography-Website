<!--db handling for accepting enquaries-->
<?php 
    if(isset($_POST["uname"])){

        $username = $_POST["uname"];
        $password = $_POST["upass"];

        $sever_name = "localhost";
        $db_uname = "root";
        $db_pass = "";
        $db_name = "lismore_db";
        

        $conn = mysqli_connect($sever_name, $db_uname, $db_pass, $db_name);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        } else {

            //insert quari join keyword
            $sql = "UPDATE `login_table` SET `u_name`='$username',`u_psw`='$password' WHERE `u_id`='1'";

            if ($conn->query($sql) === TRUE) {
                
                echo "<script>window.location.href='admin-dashboard.php';alert('Account Updated Successfully!');</script>";
                exit;    
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        }
    }else{
        echo"Error";
    }
?>