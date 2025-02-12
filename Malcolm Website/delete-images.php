<!--db handling for deleting images-->
<?php 
    if(isset($_POST["imgDel"])){

        $imgLocation = $_POST["imgDel"];

        $sever_name = "localhost";
        $db_uname = "root";
        $db_pass = "";
        $db_name = "lismore_db";
        

        $conn = mysqli_connect($sever_name, $db_uname, $db_pass, $db_name);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        } else {

            //insert quari join keyword
            $sql = "DELETE FROM `gallery_table` WHERE `gal_location` = '$imgLocation'";

            if ($conn->query($sql) === TRUE) {

                // Check if the selected image file exists
                if (file_exists($imgLocation)) {
                    // Attempt to delete the image file
                    if (unlink($imgLocation)) {
                        echo "<script>alert('Image  has been successfully deleted.');</script>";
                    } else {
                        echo "<script>alert('Failed to delete the image.');</script>";
                    }
                } else {
                    echo "<script>alert('The selected image does not exist.');</script>";
                }
                
                echo"<script>window.location.href='admin-dashboard.php';</script>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        }
    }else{
        echo"Error";
    }
?>