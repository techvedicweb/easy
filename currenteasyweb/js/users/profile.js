$(function() {
  
    // Setup form validation on the #profile complete -form element
    $("#profile-form").validate({
    
        // Specify the validation rules
        rules: {
            full_name: "required",
            email: {
                required: true,
                email: true
            },
            mobile_number: {
                minlength: 10,
                number: true
            }
        },
        
        // Specify the validation error messages
        messages: {
            full_name: "Please enter your Full Name",
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            email: "Please enter a valid email address"
            
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

  });

//script for show during upload in profile complete section 

    // code for show uploaded file
  var loadFile = function(event) {

    var output = document.getElementById('output');
    output.style.display="block";
    output.src = URL.createObjectURL(event.target.files[0]);
  };

// end Here