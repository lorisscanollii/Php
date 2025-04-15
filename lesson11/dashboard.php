<!DOCTYPE html>
<html>
    <head>
    <style>
        
    </style>
    </head>
    <body>
        <form action="add.php" method="POST">
            <input type="text" name="name" placeholder="Name"></br>
            <input type="text" name="surname" placeholder="Surname"></br>
            <input type="email" name="email" placeholder="Email"></br>
            <button type="submit" name="submit">Add</button>
        </form>
        <?php
            include_once("config.php");
            $sql = "SELECT * FROM users";
            $getUsers = $conn->prepare($sql);

            $getUsers->execute();

            $users=$getUsers->fetchAll();
        ?>

        <thead>
            <table>
                <th>ID</th>
                <th>Username</th>
                <th>Surname</th>
                <th>Email</th>
            </table>
        </thead>
        <tbody>
            <?php
                foreach($users as $user){
            ?>
            <tr>
                <td><?=$user['id']?></td>
                <td><?=$user['name']?></td>
                <td><?=$user['surname']?></td>
                <td><?=$user['email']?></td>
                <td><?"<a href='delete.php?id=$user[id]'>Delete</a>"?></td>
            </tr>
            <?php } ?>
        </tbody>
        <a href="add.php">Add user</a>
    </body>
</html>