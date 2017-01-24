<?php require_once('header.php');?>
    
    
    
    <!-- Being Page Title -->
    <div class="container">
        <div class="page-title clearfix">
            <div class="row">
                <div class="col-md-12">
                    <h6><a href="index.html">Home</a></h6>
                    <h6><a href="courses.html">Signup</a></h6>
                  
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">

            <!-- Here begin Main Content -->

         <div class="row margin-top-10 margin-bottom-5" style="margin-left: 0; margin-right: 0">

              <div class="padding-bottom-10">
                              <div class="modal-body">
                            
                            <div class="row">
<?php 
if(isset($_POST['Register'])){
  $register_result=new Register($_POST['firstname'],$_POST['username'],$_POST['password'],$_POST['email']); 
}
?> 
     <form action="" method="post" class="margin-top-20 checkList">

            <div class="col-md-8 col-sm-8 col-xs-12 form-group">
                                    <label  for="username">Name</label>
                                 <input type="text" name="firstname" class="form-control" placeholder="First Name" required />
                                </div>


     <div class="col-md-8 col-sm-8 col-xs-12 form-group">
                                    <label  for="username">Email</label>
                               <input id="signup_email" type="email"  name="email" class="form-control margin-bottom-20" placeholder="Your e-mail address" required />
                              
                                </div>
   <p id="email_result"></p>

                                     <div class="col-md-8 col-sm-8 col-xs-12 form-group">
                                    <label  for="username">Username</label>
                                <input id="signup_username" type="text" name="username" class="form-control" placeholder="UserName" required />
                               
                                </div>
 <p  id="username_result"></p>

                          <div class="col-md-8 col-sm-8 col-xs-12 form-group">
                                    <label  for="username">Password</label>
                                  <input type="password" name="password" class="form-control" placeholder="password" required />
                                </div>



          
      
     <div class="col-md-8 col-sm-8 col-xs-12 form-group">
          <input type="submit" name="Register" class="btn btn-primary noBorderRadius margin-bottom-20" value="Register">
            &nbsp;
           
 have an account , <a href="login.php">  Login</a>
              </div>

          </form>
                                
                                </div>


                            </div>

                        </div>
                        <div class="modal-footer">
                        <!--   <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button> -->
                         <!--  <button type="button" class="btn btn-primary">Login</button> -->
                        </div>

                      
                  
              </div>
          </div>

              

            </div> <!-- /.col-md-8 -->


    
        </div> <!-- /.row -->
    </div> <!-- /.container -->

<?php require_once('footer.php');?>