<!-- This function grabs all available destinations and returns to index.html page  -->

<?php
    // database connection.
    require_once('./controller/Dbconnection.php');

    $sql = "SELECT * FROM Destinations ORDER BY ID DESC";
    $result = $conn->query($sql);

    $destinations = [];

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            array_push($destinations, array("id"=>$row["ID"], "name"=>$row["NAME"], "details"=>$row["DETAILS"], "image" =>$row["IMAGE"]));
        }
    }
?>