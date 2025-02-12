<!--db handling for accepting enquaries-->
<?php 
    if(isset($_POST["enqIDtoAccept"])){

        $enqID = $_POST["enqIDtoAccept"];

        $sever_name = "localhost";
        $db_uname = "root";
        $db_pass = "";
        $db_name = "lismore_db";
        

        $conn = mysqli_connect($sever_name, $db_uname, $db_pass, $db_name);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        } else {

            //insert quari join keyword
            $sql = "UPDATE `enq_table` SET `accepted_enq`='1' WHERE `enqid`='$enqID'";

            if ($conn->query($sql) === TRUE) {
                
                header('Location: enq-show.php');
                exit;    
                
                //echo"<script>alert('Your Name : $username');</script>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        }
    }else{
        echo"Uname : $username";
    }
?>