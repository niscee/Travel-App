<!-- This function deletes the destination  -->
<?php
    if (isset($_POST['deletedestination'])){
        try{
          $id = $_POST["id"];

          error_log($id);

          // check if the username is already in the database, username should be unique.
          $sql = "DELETE FROM Destinations WHERE ID = '$id'";

          // check if query execute or not.
          if (!$conn->query($sql) === TRUE) {
            $error_msgs = "Something Went Wrong!!";
            return;
          }

          // if there is a username already in the database, adding same username is prohibited.
          $error_msgs = "Destination is successfully Deleted.";
          header('Location: dashboard.php');
          exit;
        }
        catch(Exception $e){
          $error_msgs = "Something went wrong, please try again later.";
        }
    }
?>