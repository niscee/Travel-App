<!-- This page is for admin/user dashboard  -->

<?php
    // database connection.
    require_once('./controller/Dbconnection.php');

    // get user session cookies.
    require_once('./controller/CheckSession.php');

    // check user session for authorization of the page. if login access this page else return to index.html.
    require_once('./controller/Authorize.php');

    // importing logout function.
    require_once('./controller/Logout.php');

    // import function that add the new destination data in the db only for usertype admin.
    require_once('./controller/Adddestination.php');

    // importing function that returns all destination order by created date.
    require_once('./controller/Alldestinations.php');

    // import function that returns user destination list. user can only view the destination list that they have added to the their cart.
    require_once('./controller/Usercartdestination.php');

    // import function that deletes the destination. authorized only for usertype admin.
    require_once('./controller/Deletedestination.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/css/dashboard.css" />
    <title>User Dashboard</title>
</head>

<body>
    <div class="container">
        <div class="upperdiv">
            <h3>Welcome, <?php echo $uname ?></h3>
            <form method="post">
                <button type="submit" name="logout">Logout</button>
            </form>
        </div>

        <?php if($error_msgs){?>
        <div class="error-message-container">
            <h4><b><?php echo $error_msgs ?></b></h4>
        </div>
        <?php } ?>

        <!-- if usertype is admin -->
        <?php if($utype == "admin") : ?>
        <div class="bodydiv">
            <section class="profilesidebar">
                <div>
                    <h3>My Profile</h3>
                </div>
                <div><img src="/static/image/profile.png" /></div>
                <div>
                    <p>Name: <?php echo $uname ?></p>
                    <p>Account Type: <?php echo $utype ?></p>
                </div>
                <div>
                    <a href="./index.php"><button>Back</button></a>
                </div>
            </section>
            <section class="tasksidebar">
                <div class="form-container">
                    <form method="post" enctype="multipart/form-data">
                        <label for="name">Destination Name:</label><br><br>
                        <input type="text" name="destination_name" placeholder="Destination Name" required><br><br><br>
                        <label for="details">Destination Details:</label><br><br>
                        <textarea type="text" name="destination_details" placeholder="Destination Details"
                            required></textarea><br><br><br>
                        <label for="Image">Image:</label><br><br>
                        <input type="file" name="uploadfile" value="" required></input><br><br><br>
                        <button type="submit" name="addDestination">Submit</button>
                    </form>
                </div>
            </section>
            <section class="tablecontainer">
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Details</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach($destinations as $destination){?>
                    <?php $image_path = "/static/image/uploads/".$destination["image"]  ?>
                    <tr>
                        <td><?php echo $destination["name"] ?></td>
                        <td><img src="<?php echo $image_path ?>"
                                style="height: 3.75rem; width: 3.75rem; border-radius: 50%" /></td>
                        <td><?php echo $destination["details"] ?></td>
                        <td>
                            <form method="post">
                                <input type="hidden" name="id" value=<?php echo $destination["id"] ?> />
                                <button class="delete-button" name="deletedestination" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </section>
        </div>

        <!-- if usertype is user -->
        <?php else : ?>
        <div class="bodydiv1">
            <section class="profilesidebar">
                <div>
                    <h3>My Profile</h3>
                </div>
                <div><img src="/static/image/profile.png" /></div>
                <div>
                    <p>Name: <?php echo $uname ?></p>
                    <p>Account Type: <?php echo $utype ?></p>
                </div>
                <div>
                    <a href="./index.php"><button>Back</button></a>
                </div>
            </section>
            <section class="tablecontainer">
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Details</th>
                    </tr>
                    <?php foreach($userdestinations as $destination){?>
                    <?php $image_path = "/static/image/uploads/".$destination["image"]  ?>
                    <tr>
                        <td><?php echo $destination["name"] ?></td>
                        <td><img src="<?php echo $image_path ?>"
                                style="height: 80px; width: 80px; border-radius: 50%" /></td>
                        <td><?php echo $destination["details"] ?></td>
                    </tr>
                    <?php } ?>
                </table>
            </section>
        </div>
        <?php endif; ?>
    </div>
</body>

</html>