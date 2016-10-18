<?php
	session_start(true);
	require "connect.php";
?>
<html>
	<head>
	<!--
		@link to Custom Stylesheet in /css/
		@disc Minor customizations for styling
	-->
		<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
	</head>
	
	<body>
		<!--Form to insert record-->
		<form method="POST" action="process.php" class="formAlt" role="userInput">
			<label>Enter a Title:</label> 
<br>
			<input type="text" name="title" placeholder="Your title is awesome!">
<br>					
			<label>Enter your note: </label>
<br>
			<textarea name="note" row="5" col="15" placeholder="What a great thing to remember!"></textarea>	
<br>
			<input type="submit" value="submit" class="btn btn-primary btn-sm" id="create">
		</form>	
		<!--Form to destroy records-->
		
		<!--Output records-->
		<?php

			$sql = "SELECT * FROM post";

			$result = $conn->query($sql);
			$i = 0;
				if($result->num_rows > 0){
					while($rows = $result->fetch_assoc()){
						$i++;
						echo "<pre>";
						print_r($rows);
						echo "</pre>";
						echo "<form method='POST' action='destroy.php'>";
						echo "<input type='submit' value='destroy' name='destroyId'>";
						echo "</form>";
					}}
		?>
		
		
	</body>
</html>		