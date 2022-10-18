<!-- This is login page -->

<?php include './includes/Header.php';?>
<?php include './includes/Navbar.php';?>

<?php
    // database connection.
    require_once('./controller/Dbconnection.php');
    require_once('./controller/Login.php');
?>

<!-- container for displaying server response. -->
<?php if($error_msgs){?>
<div class="error-message-container">
    <h4><b><?php echo $error_msgs ?></b></h4>
</div>
<?php } ?>

<div class="content">
    <section class="form-container">
        <form method="post">
            <label for="fname">Name:</label><br><br>
            <input type="text" name="username" placeholder="enter your username...."><br><br><br>
            <label for="password">Password:</label><br><br>
            <input type="password" name="password" placeholder="enter your password...."><br><br><br>
            <div>
                <h5>Not Registered ? &nbsp;&nbsp;<a href="./register.php" style="color: red;">Click here to Register</a>
                </h5>
            </div><br><br>
            <button type="submit" name="login">Login</button>
        </form>
    </section>
</div>
</div>

<?php include './includes/Footer.php';?>