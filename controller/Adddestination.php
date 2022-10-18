<!-- This function add new data to Destinations table -->

<?php
    if (isset($_POST['addDestination'])){

        try{
            $destination_name = $_POST["destination_name"];
            $destination_details = $_POST["destination_details"];

            // File upload path
            $targetDir = "./static/image/uploads/";
            $fileName = basename($_FILES["uploadfile"]["name"]);
            $targetFilePath = $targetDir . $fileName;
            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

            // Allow certain file formats
            $allowTypes = array('jpg','png','jpeg','gif','pdf');


            error_log($destination_name);
            error_log($destination_details);
            error_log($fileName);
            error_log($targetDir);

            if(in_array($fileType, $allowTypes)){
                if (move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $targetFilePath)) {
                    $sql = "INSERT INTO Destinations (NAME, DETAILS, IMAGE) VALUES ('$destination_name', '$destination_details', '$fileName');";

                    #check if query execute or not.
                    if (!$conn->query($sql) === TRUE) {
                        $error_msgs = "Something Went Wrong With Query!!";
                        return;
                    }

                    // $result = $conn->query($sql);
                    $error_msgs = "New Destinations is addded Successfully.";
                    header('Location: dashboard.php');
                    exit;
                }
                else{
                    $error_msgs = "Something went wrong, please try again later.";
                }
            }
            else{
                $error_msgs = "Please Upload Correct File Format.";
            }
        }
        catch(Exception $e){
            $error_msgs = "Something went wrong, please try again later.";
        }

    }
?>