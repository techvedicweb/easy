
//start  here show hide for login and forgot password
$("#click_to_hide").click(function(){
      $("#click").hide();
        $("#password").show();


});
$("#cancel").click(function(){
    
         $("#click").show();
        $("#password").hide();
});
$(document).ready(function() {

//end here show hide for login and forgot password
 
 // script for checking signup email exists or not 

    var search = $("#signup_email");
        search.keyup(function() {

            if (search.val() !='') {
                
                $.ajax({
                  type:"POST",
                 url:"../classes/Check.php",
                 data:{search:search.val(),search_type:'email'},

                 success:function(data){
                 $("#email_result").html(data);
                 //alert(search.val());
                 },
                  
                });

                //alert(search.val());
            }

          });

// for checking username during signup 

   var search_username = $("#signup_username");
        search_username.keyup(function() {
            if (search_username.val() !='') {
                
                $.ajax({
                  type:"POST",
                 url:"../classes/Check.php",
                 data:{search:search_username.val(),search_type:'username'},

                 success:function(data){
                 $("#username_result").html(data);
                 //alert(search.val());
                 },
                  
                });



                //alert(search.val());
            }

        });

// script for update password in profile

           var old_pass_check = $("#current_password");
           var newpass = $("#new_password");
            var repeatpass = $("#repeat_password");
        $("#update_password").click(function() {
            if (old_pass_check.val() !='' && newpass.val() !='') {

                if(newpass.val()!=repeatpass.val()){
                    $("#pass_update_result").text('Confirm password did not match');
                    return false;
                }
               
                $.ajax({
                  type:"POST",
                 url:"../classes/Update_password.php",
                 data:{oldpass:old_pass_check.val(),new_pass:newpass.val()},

                 success:function(data){
                 $("#pass_update_result").html(data);
                
                 },
                  
                });


            }

        });


// script for send en email to forgot password user

$("#forgot_password").click(function(){
var forgot_password=$("#forgot_password_email");
            if (forgot_password.val() !='') {      
                $.ajax({
                  type:"POST",
                 url:"../classes/Check.php",
                 data:{search:forgot_password.val(),search_type:'forgot_password'},

                 success:function(data){
                 $("#forgot_password_result").html(data);
                 //alert(search.val());
                 },
                  
                });



                //alert(search.val());
            }

});


});
