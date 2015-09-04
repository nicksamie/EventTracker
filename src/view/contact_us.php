<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php  include ("layouts/header.php");?>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // create email body and send it
        $send_email_to = 'sameer.shrestha@deerwalk.edu.np'; // PUT YOUR EMAIL ADDRESS HERE
        $email_subject = "Modern Business Contact Form:  $name"; // EDIT THE EMAIL SUBJECT LINE HERE
        $email_body = "You have received a new message from your website's contact form.\n\n" . "Here are the details:\n\nName: $name\n\nPhone: $phone\n\nEmail: $email_address\n\nMessage:\n$message";
        $headers = "From: noreply@your-domain.com\n";
        $headers .= "Reply-To: $email_address";
        mail($to, $email_subject, $email_body, $headers);

        function send_email($fname, $lname, $email, $email_subject, $email_message)
        {
            global $send_email_to;

            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
            $headers .= "From: " . $email . "\r\n";
            $message = "<strong>Email = </strong>" . $email . "<br>";
            $message .= "<strong>First Name = </strong>" . $fname . "<br>";
            $message .= "<strong>Last Name = </strong>" . $lname . "<br>";
            $message .= "<strong>Message = </strong>" . $email_message . "<br>";
            @mail($send_email_to, $email_subject, $message, $headers);
            return true;
        }

// check if fields passed are empty
        if (empty($_POST['fname']) ||
            empty($_POST['lname']) ||
            empty($_POST['email']) ||
            empty($_POST['subject']) ||
            empty($_POST['message']) ||
            !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)
        ) {
            echo "No arguments Provided!";
            return false;
        } else {


        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $subject = $_POST['subject'];

        $return_array = validate($fname, $lname, $email, $message, $subject);
        if ($return_array['success'] == '1') {
            send_email($fname, $lname, $email, $subject, $message);
        }

    }
    }
?>
<div class="container">
    <div class="row-fluid">
        <div class="span12">
            <div class="page-header">
                <div class="row-fluid">
                    <div class="span12">
                        <h1> Contact</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row-fluid contact">
        <div class="span4">
            <ul class="bordered-list">
                <li class="img-location"><b>Location:</b> Sifal, ktm, Deerwalk Institute of Technology</li>
                <li class="img-phone"><b>Phone:</b>01-4485429</li>
                <li class="img-url"><b>URL:</b> www.eventtracker.com</li>
            </ul>
        </div>
        <div class="span6">
            <div class="wpcf7" id="wpcf7-f75-t1-o1">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
                        <div class="formcol">
                            <label for="fname"> First Name</label><br>
                            <input type="text" name="firstname" id="fname" size="40" /><br>
                            <label for="lname"> Last Name</label><br>
                            <input type="text" name="lastname" id="lname" size="40" /><br>
                            <label for="email"> Email Address</label><br>
                            <input type="text" name="email" id="email"  size="40" /><br>
                            <label for="subject"> Subject</label><br>
                            <input type="text" name="subject" id="subject"  size="40" /><br>
                        </div>
                    <label for="message"> Message</label><br>
                    <textarea name="message" id="message" cols="50" rows="10"></textarea><br>
                    <input type="submit" id="send-message" value="Send" class="btn btn-success" />
                </form>
            </div>
        </div>
    </div>
</div>

<!--<form  id="register-form" action="<?php /*echo htmlspecialchars($_SERVER["PHP_SELF"]);*/?>" method="post" style="margin:0px auto;width:800px">
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
</form>-->

<script src="js/custom_validate.js"></script>
<script src="js/custom.js" type="text/javascript"></script>
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
