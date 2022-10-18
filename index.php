<!-- This is main landing page -->

<?php include './includes/Header.php';?>
<?php include './includes/Navbar.php';?>

<?php include './controller/Latestdestinations.php';?>

<div class="content">
    <div class="content-image">
        <p id="content-text">
            Find flights that will take you to the most <br />loved places.
        </p>
    </div>
</div>

<div class="content">
    <h3 style="letter-spacing: 0.1rem; text-decoration: underline;">Recently Added Destinations you can travel to now
    </h3>
    <section class="destination-container">
        <?php foreach($destinations as $destination){?>
        <?php $image_path = "/static/image/uploads/".$destination["image"]  ?>
        <a href="./destination.php">
            <div class="card1">
                <img src="<?php echo $image_path ?>" alt="Avatar" />
                <div class="container">
                    <h4><b><?php echo $destination["name"] ?></b></h4>
                </div>
            </div>
        </a>
        <?php } ?>
    </section>
</div>
</div>

<?php include './includes/Footer.php';?>