<!--db handling for deleting feedback-->
<?php 
    if(isset($_POST["feedID"])){

        $feedID = $_POST["feedID"];

        $sever_name = "localhost";
        $db_uname = "root";
        $db_pass = "";
        $db_name = "lismore_db";
        

        $conn = mysqli_connect($sever_name, $db_uname, $db_pass, $db_name);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        } else {

            //insert quari join keyword
            $sql = "DELETE FROM `feed_table` WHERE `feed_id` = '$feedID'";

            if ($conn->query($sql) === TRUE) {
                
                header('Location: view_feedback.php');
                exit; 
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        }
    }
?>