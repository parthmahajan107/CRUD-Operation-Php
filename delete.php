<?php

    include 'config.php';

    if (isset($_GET['user_id'])) {
        $user_id = $_GET['user_id'];

        $sql = "Delete from users where user_id = '$user_id'";

        $result = $conn->query($sql);

        if ($result == TRUE) {
            echo "Record deleted successfully.";
        }
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

?>