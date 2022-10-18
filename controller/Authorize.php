<!-- This function checks whether the user is authorize to access this page or not. -->

<?php
    if(!isset($_COOKIE['uname']) or !isset($_COOKIE['utype'])) {
        header('Location: index.php');
    }
?>