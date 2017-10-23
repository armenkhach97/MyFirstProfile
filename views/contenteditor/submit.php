<?php
	$servername = "localhost";
	$username = "root";
	$password = "123456";
	$dbname = "mvc";

	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		/*$stmt = $conn->prepare("SELECT id, title, description FROM pageinfo WHERE id=3"); 
		$stmt->execute();*/
				
		// prepare sql and bind parameters
		$stmt = $conn->prepare("INSERT INTO pageinfo (pagename, title, description) 
		VALUES (:pagename, :title, :description)");
		$stmt->bindParam(':pagename', $pagename);
		$stmt->bindParam(':title', $title);
		$stmt->bindParam(':description', $description);

		// insert a row
		$pagename = $_GET["pagename"];
		$title = $_GET["title"];
		$description = $_GET["description"];
		$stmt->execute();

		echo "New records created successfully";

		/*$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

		
		foreach($stmt->fetchAll() as $k)
			echo '</br><h3>' . $k['title'] . '</h3>'. '</br>' . $k['description'] . '</br>';
			*/
	}
	catch(PDOException $e) {
		echo "Error: " . $e->getMessage();
	}
	$conn = null;
?>  