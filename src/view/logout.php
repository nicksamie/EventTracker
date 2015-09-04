<?php
	session_start();
	if(session_destroy()) // Destroying All Sessions
	{
		header("Location: index.php"); // Redirecting To login page
	}
	/*$_SESSION["s_email"] = null;
	$_SESSION["firstname"] = null;
	redirect_to("index.php");*/
?>

<?php
	// v2: destroy session
	// assumes nothing else in session to keep
	// session_start();
	// $_SESSION = array();
	// if (isset($_COOKIE[session_name()])) {
	//   setcookie(session_name(), '', time()-42000, '/');
	// }
	// session_destroy(); 
	// redirect_to("login.php");
?>
