<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include ("layouts/header_admin.php");?>

<?php

session_start();
if(isset($_SESSION['email']) && $_SESSION['s_user_role'] == 'admin') {

}
?>

<h1>Organizer List</h1>
 <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="datatable_org_list">
                                        <thead>
                                            <tr>
                                            <!-- <th>User_id</th> -->
                                                <th>Organizer's Name</th>
                                                <th>Email</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                 global $connection;
                                                 $list_organizers = "select user_id,orgname, email from user where user_role = 'organizer'";
                                                 $result = mysqli_query($connection, $list_organizers);
                                                 if (mysqli_num_rows($result) < 0) {
                                                    echo "Value not available in database";
                                                  } else {

                                                while ($row = $result->fetch_assoc()) {
                                                  $u_id = $row["user_id"];
                                                echo "<tr>";
                                                //echo "<td>".$u_id."</td>";
                                                echo "<td>"
                                            ?><a href='info_detail.php?id=<?php echo $u_id ?>'><?php echo $row['orgname'];?></a><?php "</td>";
                                                echo "<td>".$row["email"]."</td>";
                                                echo "</tr>";
                                            }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
 </div>

<br>
<h1> Event List</h1>
 <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="datatable_event_list">
                                        <thead>
                                            <tr>
                                                <th>Event Name</th>
                                                <th>Event Date</th>
                                                <th>Event Time</th>
                                                <th>Event Venue</th>
                                                <th>Popular</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                 global $connection;
                                                 $list_events = "select event_id,event_name, event_date, event_time, event_venue, event_detail from event";
                                                 $result = mysqli_query($connection, $list_events);
                                                 if (mysqli_num_rows($result) < 0) {
                                                    echo "Event Data Not Available in database";
                                                  } else {

                                                    while ($row = $result->fetch_assoc()) {
                                                       echo "<tr>";
                                                       echo "<td>"
                                                       //echo "<td>".$row["event_name"]."</td>";
                                            ?><a href='info_detail.php?id=<?php echo $row['event_id'];?>'><?php echo $row["event_name"];?></a>.<?php "</td>";
                                                       echo "<td>".$row["event_date"]."</td>";
                                                       echo "<td>".$row["event_time"]."</td>";
                                                       echo "<td>".$row["event_venue"]."</td>";
                                                       echo "<td>"
                                            ?>
                                                       <form id = "popular_event" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                                          Popular: <input type="checkbox" id = "popular_check"value= "true">
                                                          <input type="submit" id="btnsavepopular" value="save">
                                                        </form>
                                                         <!-- <button><a href='organiser.php?id=<?php echo $List_organizers['orgid'];?>'><?php echo $List_organizers['Name']; ?></a>View Detail</button> -->
                                                  <?php
                                                       "</td>";

                                                       echo "</tr>";
                                                    }
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>


    <script src="js/dataTables/jquery.dataTables.js"></script>

    <script src="js/dataTables/dataTables.bootstrap.js"></script>

        <script>
            $(document).ready(function () {
                $('#datatable_org_list').dataTable();
                $('#datatable_event_list').dataTable();
            });
    </script>
    <script>
$(document).ready(function(){
    $("#btnsavepopular").hide();
     $('#popular_check').on('click', function() {
      if ( this.checked){
         $("#btnsavepopular").show();
      }
      else 
      {
        $("#btnsavepopular").hide();
      }
    });
});
</script>

