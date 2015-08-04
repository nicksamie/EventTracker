<?php	
		$dbhost = 'localhost:3306';
		$dbuser = 'root';
		$dbpass = 'root';
		$dbname = "phewa";

		// Create connection
		$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}
	
	
	function getDataFromDatabase($sqlQuery){
		//connect_mysql();

		$result = $conn->query($sqlQuery);
		return $result;
	}

	function insertIntoDatabase(){
		$dbhost = 'localhost:3306';
		$dbuser = 'root';
		$dbpass = 'root';
		$dbname = "phewa";

		// Create connection
		$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}
		// prepare and bind
		$stmt = $conn->prepare("INSERT INTO student (name, address,batch, email,password) VALUES (?, ? , ?, ?,?)");
		$stmt->bind_param('sssss', $name,$address,$batch,$email,$password);
		$stmt->execute();

		echo "New records created successfully";
	
		$stmt->close();
		$conn->close();
	}
?>