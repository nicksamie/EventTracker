(function($,W,D)
{
    var JQUERY4U = {};
 
    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
           // form.reset();
            //form validation rules
            $("#register-form").validate({
                rules: {
                    firstname: "required",
                    lastname: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    orgname: "required",
                    password: {
                        required: true,
                        minlength: 3
                    },
                    agree: "required"
                },
                messages: {
                    firstname: "Please enter your firstname",
                    lastname: "Please enter your lastname",
                    orgname: "Please enter Organization's Name",
                    password: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 3 characters long"
                    },
                    email: "Please enter a valid email address",
                    agree: "Please accept our policy"
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
            /*resetForm : function()
            {
                //reset function
              $('#resetForm').click(function(){
                    $('#reset')[0].reset();
              });
            }*/
            
        }
    }
 
    //when the dom has loaded setup form validation rules
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });
 
})(jQuery, window, document);