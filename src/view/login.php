<?php session_start(); ?>
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
    $query = "SELECT user_role, email, password FROM user where email =  '$email'";
    echo $query;
    confirm_query($query);
   //if ($result = $connection->query($query)) {
    $result = mysqli_query($connection, $query);
    if (mysqli_num_rows($result) > 0) {
        
        while ($row = mysqli_fetch_assoc($result)) {
            $user_role =  $row["user_role"];
            $email = $row["email"];
            $pass = $row["password"];
        }
    } else{
      echo "No results matched";
    }
    mysqli_close($connection);
  //$check_valid_user = attempt_login($email, $password);
  if($password == $pass){
      // Success...Mark user as logged in
      //session_start(); // Start the session
      $_SESSION["s_email"] = '$email';
      $_SESSION["s_firstname"] = $firstname;
      authenticate_by_role($user_role);
      echo "Session Value Email is  !" . $_SESSION["s_email"] ;
      //redirect_to("home.php");
    } else {
      // Failure
      $_SESSION["message"] = "Username/password not found.";
      echo "password doesn not match!";
    }
  }

function authenticate_by_role($user_role){
  if ($user_role = "organizer")
    redirect_to ("organizer_dashboard.php");
  elseif ($user_role = "normaluser")
    redirect_to("home.php");
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