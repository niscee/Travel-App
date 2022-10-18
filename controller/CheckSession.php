<!-- This function checks 2 cookies 'uname' & 'utype' which is used for login session and if any one of them is not in the browser storage
then it removes the remaining cookie and if both cookies are present then creates 3 variables to store the cookies value. -->

<?php
    if(isset($_COOKIE['uname']) and isset($_COOKIE['utype'])) {
        $isLogin = True;
        $uname = $_COOKIE['uname'];
        $utype = $_COOKIE['utype'];
    }
    else{

        // setting cookie empty if any of the cookie is not present.
        setcookie("uname", "");
        setcookie("utype", "");

        $isLogin = False;
        $uname = "";
        $utype = "";
    }

    error_log($uname);
?>