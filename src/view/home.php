<?php include ("layouts/header.php");?>

<h1> welcome </h1>
<?php
      // 
echo "Email from session" ;
 htmlentities($_SESSION["s_email"]);
echo "Firstname from session" . $_SESSION["s_firstname"];
?>