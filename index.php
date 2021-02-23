 <?php
// CRUD PHP App
require_once 'settings/db_connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - PHP8 - App</title>
    <style>
        th, td {
            padding: 10px;
        }

        th {
            background: #606060;
            color: #fff;
        }

        td {
            background: #b5b5b5;
        }
    </style>
</head>
<body>
    <h1>CRUD - PHP8 - App / Phone Book</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone</th>
            <th>Description</th>
            <th>View</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

        <?php
            $query = "SELECT * FROM `phonebook`";
            $result = mysqli_query($connection, $query);
            $records = mysqli_fetch_all($result);
            foreach ($records as $row) {
                ?>

                <tr>
                    <td><?= $row[0] ?></td>
                    <td><?= $row[1] ?></td>
                    <td><?= $row[2] ?></td>
                    <td><?= $row[3] ?></td>
                    <td><?= $row[4] ?></td>
                    <td> <a href="view.php?id=<?= $row[0] ?>">View</a></td>
                    <td> <a href="update.php?id=<?= $row[0] ?>">Edit</a></td>
                    <td> <a style="color: red;" href="vendor/delete.php?id=<?= $row[0] ?>">Delete</a></td>
                </tr>

                <?php
            }
        ?>

    </table>
    
    <h2>Add new record to Phonebook !</h2>
    <form action="vendor/create.php" method="post">
        <p>First Name</p>
        <input type="text" name="fname">
        <p>Last Name</p>
        <input type="text" name="lname">
        <p>Phone Number</p>
        <input type="number" name="phone">
        <p>Description</p>
        <textarea name="description" cols="30" rows="5"></textarea><br>
        <button type="submit">Add new record</button>
    </form>

</body>
</html>
