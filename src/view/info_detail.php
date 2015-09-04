<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include ("layouts/header_admin.php");?>
<?php 
    $info = $_GET['id'];
    echo $info;
    global $connection;
    $info_organizers= "select * from user where user_id ='$info'";
    $result = mysqli_query($connection, $info_organizers);
     if (mysqli_num_rows($result) < 0) {
          echo "Event Data Not Available in database";
    } else {
           while ($row = $result->fetch_assoc()) {
                echo "<tr>";
               // echo "<td>";
                echo "<td><strong>Org_ID</strong></td><td>".$row["user_id"]."</td></tr>";
                echo "<tr><td><strong>Org Name</strong></td></tr>".$row["orgname"]."</td></tr>";
                echo "<tr><td><strong>Email</strong></td></tr>".$row["email"]."</td></tr>";
                echo "<tr><td><strong>Events</strong></td></tr>".$row["orgname"]."</td></tr>";

                //echo "<td><strong>Email</strong>".$row["email"]."</td>";
                //echo "<td><strong>Events</strong>".$row["email"]."</td>";
                //echo "<td>";
                //echo "</tr>";
              }
            }
?>