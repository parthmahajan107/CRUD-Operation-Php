<!DOCTYPE html>
<html>
    <head>
        <title>Create</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h2>Create</h2>
            <form action="" method="POST">
                Full Name: <br>
                <input type="text" name="full_name"> <br>
                Email: <br>
                <input type="email" name="email"> <br>
                City: <br>
                <input type="text" name="city"> <br>
                Country: <br>
                <input type="text" name="country"> <br>

                <input type="submit" name="submit" value="submit">
            </form>
        </div>
    </body>
</html>

<?php
    include "config.php";
    if (isset($_POST['submit'])) {
        $name = $_POST['full_name'];
        $email = $_POST['email'];
        $city = $_POST['city'];
        $country = $_POST['country'];

        $sql = "Insert into users (full_name, email, city, country) values ('$name', '$email', '$city', '$country')";

        $result = $conn->query($sql);

        if ($result==true) {
            echo "New record created succesfully!";
        }
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
?>