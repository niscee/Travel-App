<!-- This function stores users destination -->

<?php
    if (isset($_POST['addtocart'])){
        try{
          $uname = $conn -> real_escape_string(stripslashes(strip_tags($_POST["uname"])));
          $destination_id = $_POST["destination_id"];



          // store info return success msg.
          $sql = "INSERT INTO User_Destination (UNAME, DESTINATION_ID) VALUES ('$uname', '$destination_id');";
          if (!$conn->query($sql) === TRUE) {
            $error_msgs = "Something went wrong please try again later.";
            return;
          }

          $error_msgs = "Destination is added to you list.";
          $conn->close();
        }
        catch(Exception $e){
          $error_msgs = "Something went wrong, please try again later.";
        }
    }
?>