<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php //require_once("../includes/validation_functions.php"); ?>

<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    echo $email . $password;
    global $connection;
    /* retrieve all rows from myCity */
    $query = "SELECT email, password FROM user where email =  '$email'";
    echo $query;
    confirm_query($query);
   //if ($result = $connection->query($query)) {
    $result = mysqli_query($connection, $query);
    if (mysqli_num_rows($result) > 0) {
        
        while ($row = mysqli_fetch_assoc($result)) {
            $email = $row["email"];
            $pass = $row["password"];
        }
    } else{
      echo "No results matched";
    }
    mysqli_close($connection);
  //$check_valid_user = attempt_login($email, $password);
  if($password == $pass){
    //success
    echo "Validated !";
      redirect_to("home.php");
      } else {
        echo "password doesn not match!";
    }
  
}

?>
<!--   // validations
 /* $required_fields = array("username", "password");
  validate_presences($required_fields);
  
  if (empty($errors)) {
    // Attempt Login

		
		
		$found_admin = attempt_login($username, $password);

    if ($found_admin) {
      // Success
			// Mark user as logged in
			$_SESSION["admin_id"] = $found_admin["id"];
			$_SESSION["username"] = $found_admin["username"];
      redirect_to("admin.php");
    } else {
      // Failure
      $_SESSION["message"] = "Username/password not found.";
    }
  }
} else {
  // This is probably a GET request
  
} // end: if (isset($_POST['submit']))*/
 -->