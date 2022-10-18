<!-- This is destination page -->

<?php include './includes/Header.php';?>
<?php include './includes/Navbar.php';?>

<?php include './controller/Alldestinations.php';?>
<?php include './controller/Adduserdestination.php';?>

<!-- container for displaying server response. -->
<?php if($error_msgs){?>
<div class="error-message-container">
    <h4><b><?php echo $error_msgs ?></b></h4>
</div>
<?php } ?>

<div class="content">
    <section class="destination-container">
        <?php foreach($destinations as $destination){?>
        <?php $image_path = "/static/image/uploads/".$destination["image"]  ?>
        <div class="card-destination">
            <div class="card">
                <img src="<?php echo $image_path ?>" alt="Avatar" />
                <div class="container">
                    <h4><b><?php echo $destination["name"] ?></b></h4>
                    <?php if($utype == "user") : ?>
                    <form method="post">
                        <input type="hidden" name="destination_id" value=<?php echo $destination["id"] ?> />
                        <input type="hidden" name="uname" value=<?php echo $uname ?> />
                        <button type="submit" name="addtocart">Add</button>
                    </form>
                    <?php endif; ?>
                </div>
            </div>
            <section class="destination-container-add">
                <h5><?php echo $destination["details"] ?></h5>
            </section>
        </div>
        <?php } ?>
    </section>
</div>
</div>

<?php include './includes/Footer.php';?>