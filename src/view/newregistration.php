<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include ("layouts/header.php");?>

<?php
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     echo "register submitted";
    // define variables and set to empty values
    $firstname = $lastname = $email = $username = $password = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(empty($_POST['firstname']) || empty($_POST['lastname']) ||
           empty($_POST['email']) || empty($_POST['password']) )
           {
                echo "Either one of the arguments Missing!";
                return false;
           } else {
              $firstname = $_POST["firstname"];
              $lastname = $_POST["lastname"];
              $email = $_POST["email"];
              $password = $_POST["password"];
            }
    }

    function insertIntoDatabase(){      
        // Create connection
        global $connection;
        $query = "INSERT INTO user ";
        $query .= "(firstname, lastname, email, password)";
        $query .= " VALUES (?, ?, ?, ?)";

        confirm_query($query);

        /* create a prepared statement */
        if ($stmt = $connection->prepare($query)) {
            global $firstname, $lastname, $email, $password;
            /* bind parameters for markers */
            $stmt->bind_param("ssss", $firstname, $lastname, $email, $password);
             
            /* execute query */
            if($stmt->execute()){
                echo "successfully executed";
            }else{
                echo "Failed to execute";
            }

        }
    }
    insertIntoDatabase();
}
?>

    <br>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" style="margin:0px auto;width:800px">
    	<div class="form-group">
        	<h4>FirstName:</h4> <input type="text" name="firstname" class="form-control input-lg" placeholder="FirstName">
    	</div>
        <div class="form-group">
            <h4>LastName:</h4> <input type="text" name="lastname" class="form-control input-lg" placeholder="LastName">
        </div>
    	<div class="form-group">
        	<h4>Email:</h4><input type="email" name="email" class="form-control input-lg" placeholder="Email">
    	</div>
    	<div class="form-group">
    		<h4>Username:</h4><input type="text" name="username" class="form-control input-lg" placeholder="UserName">
    	</div>
    	<div class="form-group">
    		<h4>Password:</h4><input type="password" name="password" class="form-control input-lg" placeholder="Password">
    	</div>
    	<div class="form-group">
    		<h4>Confirm Password:</h4><input type="password" name="confirm_password" class="form-control input-lg" placeholder="Confirm Password">
    	</div>
    	<div class="form-group">
        	<button type="submit" id="btnSubmit" value="Submit" class="btn btn-primary btn-lg btn-block" style="width: 19%;">Register</button>
        </div>
        <div class="form-group">
            <button type="reset" class="btn btn-primary btn-lg btn-block" style="width: 19%;">Reset</button>
    	</div>
	</form>

    <script src="js/form_validation.js"></script>
<!-- <div style="margin-left:140px;"><input type="submit" name="submit" value="Submit" id="submit" /></div> -->
   <!-- FOOTER Content-->
    <?php include ("layouts/footer.php")?>
