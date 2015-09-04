<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php  include ("layouts/header_admin.php");?>

<title>Add New Event</title>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Event Notifier</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
						<button type="button" class="btn btn-primary btn-md" style="margin-top:8px;">My Profile</button>
                    </li>
         			 <li>
						<button type="button" class="btn btn-primary btn-md" style="margin-top:8px;">Logout</button>
          			</li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<form id="addevent-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
	<div class="form-group">
        	<h4>Event Name:</h4> <input type="text" name="eventname" class="form-control input-lg" placeholder="Eventname">
    	</div>   
       <!--  <select name="eventtype" style="width:150px">
            <option value="Select Option">Select Option</option>
            <option value="Sports">Sports</option>
            <option value="Entertainment">Entertainment</option>
            <option value="Tourism">Tourism</option>
        </select> --> 
        <div class="form-group">
           <h4>Event Type:</h4> 
                <select id="eventtype" name="eventtype" class="form-control input-lg" >
                        <option value="">Select Event Type Option</option>
                        <option value="sports">Sports</option>
                        <option value="entertainment">Entertainment</option>
                        <option value="tourism">Tourism</option>
                </select>
        </div>
    <div class="form-group">
        	<h4>Date:</h4> <input type="date" name="date" class="form-control input-lg" placeholder="Date">
    	</div>
    <div class="form-group">
        	<h4>Time:</h4> <input type="time" name="time" class="form-control input-lg" placeholder="Time">
            <div class="container">
                <div class="row">
                    <div class='col-sm-6'>
                        <div class="form-group">
                            <div class='input-group date' id='datetimepicker3'>
                                <input type='text' class="form-control" />
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-time"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        $(function () {
                            $('#datetimepicker3').datetimepicker({
                                format: 'LT'
                            });
                        });
                    </script>
                </div>
            </div>
    	    </div>
    <div class="form-group">
        	<h4>Venue:</h4> <input type="text" name="venue" class="form-control input-lg" placeholder="Venue">
    	</div>
    <div class="form-group">
        	<h4>Description:</h4> <input type="text" name="description" class="form-control input-lg" placeholder="Description">
    	</div>
    <button type="submit" id="btnSubmit" value="Submit" class="btn btn-primary btn-lg btn-block" style="width: 19%;">Add Event</button>
</form>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="../script.js"></script>
<script type="text/javascript" src="jquery.validate.min.js"></script>

<script type="text/javascript">
(function($,W,D)
{
    var JQUERY4U = {};
 
    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
            //form validation rules
            $("#addevent-form").validate({
                rules: {
                    eventname: "required",
                    date: "required",
					time:"required",
					venue:"required",
					description:"required"
                },
                messages: {
                    eventname: "Please enter the event name",
                    date: "Please enter the date",
					time:"Enter the time",
					venue:"Please enter the venue",
					description:"Enter the description"
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        }
    }
 
    //when the dom has loaded setup form validation rules
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });
 
})(jQuery, window, document);
</script>

 <script src="js/bootstrap-datetimepicker.js"></script>
 
<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		global $connection; // Establishing Connection with Server
        if(empty($_POST['eventname']) || empty($_POST['date']) || empty($_POST['time']) || empty($_POST['venue']) ||  empty($_POST['description'])){
                echo "Either one of the arguments Missing!";
                return false;
        } else {
            // Fetching variables of the form which travels in URL
    		$eventname = $_POST['eventname'];
    		$date = $_POST['date'];
    		$time = $_POST['time'];
    		$venue = $_POST['venue'];
    		$description = $_POST['description'];
    		echo $eventname;
    		echo $date;
    		echo $time;
    		echo $venue;
    		echo $description;
    		//Insert Query of SQL
    		$addeventquery = "INSERT into event ";
    		$addeventquery .= "(event_name, event_date, event_time, event_venue, event_detail)";
    		$addeventquery .= "VALUES (?,?,?,?,?)";
    			
    			//"		('$eventname', '$date', '$time', '$venue','$description')";
    		//if($connection->query($sql)===TRUE){
    		if ($stmt = $connection->prepare($addeventquery)){
    			global $eventname, $date, $time ,$venue, $description;
    			$stmt->bind_param("sssss", $eventname, $date, $time, $venue, $description);
    			 /* execute query */
    	        if($stmt->execute()){
    				echo "Data Inserted successfully...!!";
    			}else{
    				echo "error: ". $addeventquery. "<br>".$connection->error;
    			}
    		}
        }
		//$connection->close(); // Closing Connection with Server
	}
?>