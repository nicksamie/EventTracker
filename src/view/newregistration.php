<?php include 'layout/header.php';?>

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
        	<button type="submit" class="btn btn-primary btn-lg btn-block" style="width: 19%;">Register</button>
        </div>
        <div class="form-group">
            <button type="reset" class="btn btn-primary btn-lg btn-block" style="width: 19%;">Reset</button>
    	</div>
	</form>

   <!-- FOOTER Content-->
    <?php include ("layout/footer.php")?>

<?php require_once("db_connection.php"); ?>
<?php

    // define variables and set to empty values
$firstname = $lastname = $email = $username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $email = $_POST["email"];
  $password = $_POST["password"];
}


function insertIntoDatabase(){
       
        // Create connection
        global $connection;
     
        // prepare and bind
        $stmt = $conn->prepare("INSERT INTO user (firstname, lastname, email, password) VALUES (?, ? , ?, ?)");
        $stmt->bind_param('ssss', $firstname, $lastname, $email, $password);
        $stmt->execute();

        echo "New records created successfully";
    
        $stmt->close();
        $conn->close();
    }
    ?>