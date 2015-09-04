<?php require_once("../includes/db_connection.php"); ?>
<?php include ("layouts/header_admin.php");?>
<?php
    /**
     * Created by PhpStorm.
     * User: gunner
     * Date: 8/28/2015
     * Time: 11:26 PM
     */
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $org_name = $_POST('orgname');
        $org_email = $_POST('email');
        global $connection;
        $profile_values = "select orgname, email from user where user_role = 'organizer'";
        $result = mysqli_query($connection, $profile_values);
        if (mysqli_num_rows($result) < 0) {
            echo "Value not available in database";
        } else {
            while ($row = $result->fetch_assoc()) {
                $orgname = $row["orgname"];
                $email = $row["email"];
                //echo "Oraganizer's Name ".$row["orgname"]."<br>";
                //echo "Email ".$row["email"];
            }
        }
        function updateDatabase(){
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
        $updateQuery =  "update user set orgname = '$org_name', email = 'org_email' where orgname= 'orgname'; ";
        mysqli_query($connection, $profile_values);

    }
?>

  <button id="edit">EDIT </button>


<div id="select_mode">
    <div id="normal_mode">
        <div class="form-group">
            <h4>Org Name:</h4> <?php echo $orgname ?>
        </div>
        <div class="form-group">
            <h4>Email:</h4> <?php echo $email ?>
        </div>
    </div>

    <div id="edit_mode">
        <form  id="edit_profile" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
            <div class="form-group">
                <h4>Org Name:</h4> <input type="text" name="orgname"  placeholder= "<?php echo $orgname ?>">
            </div>
            <div class="form-group">
                <h4>Email:</h4> <input type="text" name="email" placeholder="<?php echo $email ?>">
            </div>
            <button type="submit" value="Update">Update </button>
        </form>
    </div>
</div>
<script>
    $(document).ready(function(){
        $("#normal_mode").show();
        $("#edit_mode").hide();
        $('#edit').on('click', function() {
            $("#edit_mode").show();
            $("#normal_mode").hide();
        });
    });
</script>