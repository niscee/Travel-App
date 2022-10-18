<?php
    // database connection.
    require_once('./controller/Dbconnection.php');
    require_once('./controller/CheckSession.php');
?>

<body id="body-container">
    <div class="main-container">
        <!-- navigation section start -->
        <div class="navbar">
            <section class="navbar-left-container">
                <img src="../static/image/logo.jpeg" class="logo" alt="site logo" />
                <p id="company-title">Travel Agency</p>
            </section>
            <section class="navbar-right-container">
                <i class="fa fa-heart" title="Dark Mode" id="mode-dark"></i>
                <i class="fa fa-heart" title="Light Mode" id="mode-light"></i>

                <?php if($isLogin) : ?>
                <a href="../dashboard.php"><button id="login-button" type="button" cursor="pointer" title="Sign In">
                        Dashboard
                    </button>
                </a>
                <?php else : ?>
                <a href="../login.php"><button id="login-button" type="button" cursor="pointer" title="Sign In">
                        Login
                    </button>
                </a>
                <?php endif; ?>
            </section>
        </div>

        <!-- page list section start -->
        <div class="page-list-container">
            <a href="./index.php">
                <p>Home</p>
            </a>
            <a href="./destination.php">
                <p>Destination</p>
            </a>
            <a href="./about.php">
                <p>About Us</p>
            </a>
            <a href="./contact.php">
                <p>Contact</p>
            </a>
        </div>