<?php session_start();?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>The Lighters - Log In</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="../assets/signup-form.css" type="text/css" />
</head>

<body>

	<div class="container">

    <div class="signup-form-container">
    
         <!-- form start -->
         <form method="post" role="form" id="register-form" autocomplete="off" action="processlogin.php">
         
         <div class="form-header">
         	<h3 class="form-title"><i class="fa fa-user"></i> Log In </h3>
                      
         <div class="pull-right">
             <h3 class="form-title"><span class="glyphicon glyphicon-pencil"></span></h3>
         </div>
                      
         </div>
                  
         <div class="form-body">
         <!--
         	  <div class="alert alert-info" id="message" style="display:none;">
              Congratulations! Account Created Successfully.
              </div>
             -->         
         	  <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                   <input name="name" type="text" class="form-control" placeholder="Username">
                   </div>
                   <span class="help-block" id="error"></span>
              </div>
			  
			  <!--
			  <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                   <input name="firstname" type="text" class="form-control" placeholder="First Name">
                   </div>
                   <span class="help-block" id="error"></span>
              </div>
			  
			  <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                   <input name="lastname" type="text" class="form-control" placeholder="Last Name">
                   </div>
                   <span class="help-block" id="error"></span>
              </div>
                        
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                   <input name="email" type="text" class="form-control" placeholder="Email">
                   </div> 
                   <span class="help-block" id="error"></span>                     
              </div>
              -->
			  
			  <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                   <input name="password" id="password "type="password" class="form-control" placeholder="Password">
                   </div> 
                   <span class="help-block" id="error"></span>                     
              </div>
			  <!--
			  <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                   <input name="password" id="password "type="password" class="form-control" placeholder="Password">
                   </div> 
                   <span class="help-block" id="error"></span>                     
              </div>
			  
			  
              <div class="row">
                        
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                        <input name="password" id="password" type="password" class="form-control" placeholder="Password">
                        </div>  
                        <span class="help-block" id="error"></span>                    
                   </div>
                 
				 
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                        <input name="cpassword" type="password" class="form-control" placeholder="Retype Password">
                        </div>  
                        <span class="help-block" id="error"></span>                    
                   </div>
                            
             </div>
			 -->
                        
                        
            </div>
            
            <div class="form-footer">
                 <button type="submit" class="btn btn-info">
                 <span class="glyphicon glyphicon-log-in"></span> Log Me In !
                 </button>
				 
				 <!--
				 <input type="button" 
				 value="Go Back From Whence You Came!" 
				 onclick="history.back(-1)" />
				 -->
				 
				 <button type="button" class="btn btn-info" onclick="history.back(-1)">
                 <span class="glyphicon glyphicon-menu-left"></span> Back
                 </button>
				 
				 <a href="testvalidation.php">
				 <button type="button" class="btn btn-info">
                 <span class="glyphicon glyphicon-log-in"></span> Not a member? Sign Up
                 </button>
				 </a>
				 
				 <div><p style="text-align:center">Copyright &copy; 2017 The Lighters.</p>
				 </div>
            </div>

			
            </form>
            
           </div>

	</div>
    
    <script src="../js/bootstrap.min.js"></script>
    <script src="../assets/jquery-1.11.2.min.js"></script>
    <script src="../assets/jquery.validate.min.js"></script>


</body>
</html>
