<!-- This function grabs all the available destinations on descending order and return to destination.html page -->

<?php
    $sql = "SELECT * FROM Destinations ORDER BY ID DESC LIMIT 3;";
    $result = $conn->query($sql);

    $destinations = [];

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            array_push($destinations, array("id"=>$row["ID"], "name"=>$row["NAME"], "details"=>$row["DETAILS"], "image" =>$row["IMAGE"]));
        }
    }
?>