<!-- This function grabs all available destinations and returns to index.html page  -->

<?php
    $sql = "SELECT D.NAME, D.IMAGE, D.DETAILS FROM Destinations AS D INNER JOIN User_Destination AS UD ON D.ID = UD.DESTINATION_ID AND UD.UNAME = '$uname'";
    $result = $conn->query($sql);

    $userdestinations = [];

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            array_push($userdestinations, array("id"=>$row["ID"], "name"=>$row["NAME"], "details"=>$row["DETAILS"], "image" =>$row["IMAGE"]));
        }
    }
?>