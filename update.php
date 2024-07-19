<?php
    include "config.php";

    if(isset($_POST['update'])) {
        $user_id = $_POST['user_id'];
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $city = $_POST['city'];
        $country = $_POST['country'];

        $sql = "Update users set full_name = '$full_name', email = '$email', city = '$city', country = '$country' where user_id = '$user_id'";

        $result = $conn->query($sql);

        if ($result == TRUE) {
            echo "Record updated successfully!";
        }
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    if (isset($_GET['user_id'])) {
        $user_id = $_GET['user_id'];
        $sql = "Select * from users where user_id = $user_id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $user_id = $row['user_id'];
                $full_name = $row['full_name'];
                $email = $row['email'];
                $city = $row['city'];
                $country = $row['country'];
            }

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Update</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h2>Create</h2>
            <form action="" method="POST">
                <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                Full Name: <br>
                <input type="text" name="full_name" value="<?php echo $full_name; ?>"> <br>
                Email: <br>
                <input type="email" name="email" value="<?php echo $email; ?>" > <br>
                City:
                <input type="text" name="city" value="<?php echo $city; ?>" > <br>
                Country: <br>
                <input type="text" name="country" value="<?php echo $country; ?>" > <br>

                <input type="submit" name="update" value="update">
            </form>
        </div>
    </body>
</html>
<?php

        }
    }
?>