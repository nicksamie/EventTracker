<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include ("layouts/header.php");?>


<?php
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     echo "register submitted";
    // define variables and set to empty values
   // $firstname = $lastname = $user_role = $orgname = $email = $password = "";
    global $user_role;
    $role = $_POST["selectuser"];
    
    function check_empty($user_role){
      if($user_role == "normaluser"){
        if(empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['email']) || empty($_POST['password']) )
            return false;
      } else if ($user_role == "organizer") {
        if(empty($_POST['orgname']) || empty($_POST['email']) || empty($_POST['password']) )
            return false;
      } else {
        return true;
      }
    }

    if(check_empty($role)){  
       // global $user_role;           
               if($user_role == "normaluser"){
                  $firstname = $_POST["firstname"];
                  $lastname = $_POST["lastname"];
                  $orgname = null;
               } else if ($user_role == "organizer") {
                  $orgname = $_POST["orgname"];
                  $firstname = null;
                  $lastname = null;
               }           
              $email = $_POST["email"];
              $password = $_POST["password"];
          } else {
              echo "Either one of the arguments Missing!";
              return false;
          }

    function insertIntoDatabase(){  
        // Create connection
        global $connection;
        $query = "INSERT INTO user ";
        $query .= "(firstname, lastname, orgname, email, password, user_role)";
        $query .= " VALUES (?, ?, ?, ?, ?, ?)";

        confirm_query($query);
        /* create a prepared statement */
        if ($stmt = $connection->prepare($query)) {
            global $firstname, $lastname, $orgname, $email, $password, $user_role;
            /* bind parameters for markers */
            $stmt->bind_param("ssssss", $firstname, $lastname, $orgname, $email, $password, $user_role);
             
            /* execute query */
            if($stmt->execute()){
                echo "successfully executed";
            } else {
                echo "Failed to execute" .$connection->error;
            }
        }
    }

    insertIntoDatabase();
}
?>

    <br>
	<form  id="register-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" style="margin:0px auto;width:800px">
    	<div class="form-group">
            <h4>Register As:</h4> 
                <select id="selectBox" name="selectuser" class="form-control input-lg" placeholder="-- SELECT --">
                        <option value="normaluser">Normal User</option>
                        <option value="organizer">Organizer</option>
                </select>
        </div>
    <div id="normal_user">
        <div class="form-group">
        	<h4>FirstName:</h4> <input type="text" name="firstname" class="form-control input-lg" placeholder="FirstName">
    	</div>
        <div class="form-group">
            <h4>LastName:</h4> <input type="text" name="lastname" class="form-control input-lg" placeholder="LastName">
        </div>
    </div>
    <div id="organizer">
        <div class="form-group">
            <h4>Organizer's Name:</h4> <input type="text" name="orgname" class="form-control input-lg" placeholder="Organizer's Name">
        </div>
    </div>
    	<div class="form-group">
        	<h4>Email:</h4><input type="email" name="email" class="form-control input-lg" placeholder="Email">
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
            <button type="reset" id="resetForm" class="btn btn-primary btn-lg btn-block" style="width: 19%;">Reset</button>
    	</div>
	</form>

    <script src="js/custom_validate.js"></script>
<!-- <div style="margin-left:140px;"><input type="submit" name="submit" value="Submit" id="submit" /></div> -->
   <!-- FOOTER Content-->
    <?php include ("layouts/footer.php")?>
<script>
$(document).ready(function(){
    $("#organizer").hide();
     $('#selectBox').on('change', function() {
      if ( this.value == 'normaluser'){
        $("#normal_user").show();
        $("#organizer").hide();
      }
      else if (this.value == 'organizer') 
      {
        $("#organizer").show();
        $("#normal_user").hide();
      }
    });
});
</script>