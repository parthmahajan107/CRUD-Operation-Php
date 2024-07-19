<?php
    include "config.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Read</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h2>Details</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>City</th>
                        <th>Country</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "Select * from users";
                        $result = $conn->query($sql);
                        if ($result->num_rows>0) {
                            while ($row = $result->fetch_assoc()) {

                    ?>
                    <tr>
                        <td><?php echo $row['user_id'] ?></td>
                        <td><?php echo $row['full_name'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['city'] ?></td>
                        <td><?php echo $row['country'] ?></td>
                        <td>
                            <a href="update.php?user_id=<?php echo $row['user_id']; ?>" class="btn btn-info">Update</a>
                            <a href="delete.php?user_id=<?php echo $row['user_id']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>