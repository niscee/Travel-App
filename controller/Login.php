<!-- This function is for login logic -->

<?php
    if (isset($_POST['login'])){
        $username = $conn -> real_escape_string(stripslashes(strip_tags($_POST["username"])));
        $password = $conn -> real_escape_string(stripslashes(strip_tags($_POST["password"])));

        $sql = "SELECT * FROM AppUsers WHERE NAME = '$username' AND PASSWORD = '$password' LIMIT 1";

        if (!$conn->query($sql) === TRUE){
            $error_msgs = "Something Went Wrong!!";
            return;
        }

        $result = $conn->query($sql);

        if ($result->num_rows < 1){
            error_log("unsuccess");
            $error_msgs = "Sorry Wrong Credentials, Please enter correct credentials!!";
            return;
        }

        // fetch single value;
        $row = $result->fetch_assoc();
        $name = $row['NAME'];
        $type = $row['type'];

        // logging user details.
        error_log($name);

        // setting up cookies.
        setcookie("uname", $name);
        setcookie("utype", $type);

        header('Location: dashboard.php');
        exit();

    }
?>