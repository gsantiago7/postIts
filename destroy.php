<?php
	require "connect.php";
	error_reporting(1);
	ini_set('display_errors', 'On');
	session_start(true);

		
		
		if(isset($_POST['destroyId']) != null){

			$id = $_REQUEST['id'];

			$dst = "DELETE FROM post WHERE 'id' = 6 ";

			$delete = $conn->query($dst);

			header("Location: index.php");
		}
		

		// http://stackoverflow.com/questions/11032456/php-mysql-delete-row

		// http://stackoverflow.com/questions/11357844/cross-referencing-tables-in-a-mysql-query
		