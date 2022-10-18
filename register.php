<!-- This is login page -->

<?php include './includes/Header.php';?>
<?php include './includes/Navbar.php';?>

<?php
    // database connection.
    require_once('./controller/Dbconnection.php');
    require_once('./controller/Register.php');
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
            <label for="name">Name:</label><br><br>
            <input type="text" name="username" placeholder="John" required><br><br><br>
            <label for="email">Email:</label><br><br>
            <input type="email" name="email" placeholder="john@gmail.com" required><br><br><br>
            <label for="phone">Password:</label><br><br>
            <input type="password" name="password" placeholder="Smith" required><br><br><br>
            <button type="submit" name="register">Register</button>
        </form>
    </section>
</div>

<?php include './includes/Footer.php';?>