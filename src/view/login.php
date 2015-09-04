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
        $query = "SELECT user_role, email, password FROM user where email =  '$email'";
        echo $query;
        confirm_query($query);

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

        //if($_POST['email'] == $row["email"] && $_POST['password'] == $row["password"]){
        if($password == $pass){
            echo "login successful";
            authenticate_by_role($user_role);
        } else {
            // Failure
            echo "password doesn't not match!";
            $_SESSION["message"] = "Username/password not found.";
            redirect_to(index.php);
        }
    }

    function authenticate_by_role($user_role)
    {
        if ($user_role == "admin") {
            //session_start();
            $_SESSION['s_email'] = $_POST['email'];
            $_SESSION["s_user_role"] = "admin";
            redirect_to(admin_dashboard.php);
            //header("Location:admin_dashboard.php");
        } elseif ($user_role == "organizer"){
            //session_start(); // Start the session
            $_SESSION["s_user_role"] = "organizer";
            $_SESSION['s_email'] = $_POST['email'];
            redirect_to("organizer_dashboard.php");
        } elseif ($user_role == "normaluser"){
            //session_start();
            $_SESSION["s_user_role"] = "normaluser";
            redirect_to("home.php");
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