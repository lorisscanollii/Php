<?php

	include_once('config.php');

	if(isset($_POST['submit']))
	{

        $username = $_POST['username'];
	    $name = $_POST['name'];
		$surname = $_POST['surname'];
		$password = $_POST['password'];
		$email = $_POST['email'];


			$insertSql->bindParam(':name', $name);
			$insertSql->bindParam(':surname', $surname);
			$insertSql->bindParam(':password', $password);
			$insertSql->bindParam(':email', $email);

			$insertSql->execute();

			echo "The user has been added successfully";

			echo "<br>";

			echo "<a href='dashboard.php'>Dashboard</a>";

	}


?>