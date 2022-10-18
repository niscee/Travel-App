<!-- This function deals with the registration logic -->

<?php
    if (isset($_POST['register'])){
        try{
          $username = $conn -> real_escape_string(stripslashes(strip_tags($_POST["username"])));
          $email = $conn -> real_escape_string(stripslashes(strip_tags($_POST["email"])));
          $password = $conn -> real_escape_string(stripslashes(strip_tags($_POST["password"])));

          // check if the username is already in the database, username should be unique.
          $sql = "SELECT NAME from AppUsers where NAME = '$username'";

          // check if query execute or not.
          if (!$conn->query($sql) === TRUE) {
            $error_msgs = "Something Went Wrong!!";
            return;
          }

          // if there is a username already in the database, adding same username is prohibited.
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            $error_msgs = "Username is already used, please try different username.";
            return;
          }

          // register user and return success msg.
          $sql = "INSERT INTO AppUsers (NAME, EMAIL, PASSWORD, type) VALUES ('$username', '$email', '$password', 'user');";
          if (!$conn->query($sql) === TRUE) {
            $error_msgs = "Something went wrong please try again later.";
            return;
          }

          $error_msgs = "User is successfully created.";
          $conn->close();
        }
        catch(Exception $e){
          $error_msgs = "Something went wrong, please try again later.";
        }
    }
?>