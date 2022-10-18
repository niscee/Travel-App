<!-- This function is for login logic, removes all cookies -->

<?php
    if (isset($_POST['logout'])){
        if(isset($_COOKIE['uname']) and isset($_COOKIE['utype'])) {
            setcookie("uname", "utype", time() - 3600);
        }
        header('Location: index.php');

    }
?>