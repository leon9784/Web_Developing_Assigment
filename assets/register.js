// JavaScript Validation For Registration Page

$('document').ready(function()
{ 		 		
		 // name validation
		  var nameregex = /^[a-zA-Z0-9]+$/;
		 
		 $.validator.addMethod("validname", function( value, element ) {
		     return this.optional( element ) || nameregex.test( value );
		 }); 
			
		 //first name
		 // /^[A-Za-z-, ]{3,20}?=.*\d)/;
		 //
		 var firstnameregex = /^[a-zA-Z ]{3,30}$/;
		 $.validator.addMethod("validfirstname", function( value, element ) {
		     return this.optional( element ) || firstnameregex.test( value );
		 });
		 
		 var lastnameregex = /^[a-zA-Z ]{3,30}$/;
		 $.validator.addMethod("validlastname", function( value, element ) {
		     return this.optional( element ) || lastnameregex.test( value );
		 });
			
		 // password validation
		 //password between 7 to 16 characters which contain only 
		 //characters, numeric digits, underscore and first character 
		 //must be a letter
		 var passwordregex = /^[A-Za-z0-9]\w{7,14}$/; 
		 $.validator.addMethod("validpassword", function( value, element ) {
		     return this.optional( element ) || passwordregex.test( value );
		 });
		 
		 // valid email pattern
		 var eregex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		 
		 $.validator.addMethod("validemail", function( value, element ) {
		     return this.optional( element ) || eregex.test( value );
		 });
		 
		 $("#register-form").validate({
					
		  rules:
		  {
				name: {
					required: true,
					validname: true,
					minlength: 4
				},
				
				firstname: {
					required: true,
					validfirstname: true,
					minlength: 3,
					maxlength: 30
				},
				
				lastname: {
					required: true,
					validlastname: true,
					minlength: 3,
					maxlength: 30
				},
				
				email: {
					required: true,
					validemail: true
				},
				password: {
					required: true,
					minlength: 7,
					maxlength: 14
				},
				cpassword: {
					required: true,
					equalTo: '#password'
				},
		   },
		   messages:
		   {
				name: {
					required: "Please Enter User Name",
					validname: "Name must contain only alphabets,numbers and no space",
					minlength: "Your Name is Too Short"
					  },
					  
				firstname: {
					required: "Please Enter First Name",
					validfirstname: "Name must contain only alphabets and space",
					minlength: "Your First Name is Too Short"
				},
				
				lastname: {
					required: "Please Enter Last Name",
					validlastname: "Name must contain only alphabets and space",
					minlength: "Your Last Name is Too Short"
				},
					  
			    email: {
					  required: "Please Enter Email Address",
					  validemail: "Enter Valid Email Address"
					   },
				password:{
					required: "Please Enter Password",
					minlength: "Password at least have 7 characters/Uppercase for 1<sup>st</sup> letter"
					},
				cpassword:{
					required: "Please Retype your Password",
					equalTo: "Password Did not Match !"
					}
		   },
		   errorPlacement : function(error, element) {
			  $(element).closest('.form-group').find('.help-block').html(error.html());
		   },
		   highlight : function(element) {
			  $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
		   },
		   unhighlight: function(element, errorClass, validClass) {
			  $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
			  $(element).closest('.form-group').find('.help-block').html('');
		   },
		   
		   		submitHandler: function(form){
					
					alert('Congratulations! Your Account Has Been Successfully Created.');
					form.submit();
					//var url = $('#register-form').attr('action');
					//location.href=url;
					
				}
				
				/*submitHandler: function() 
							   { 
							   		alert("Submitted!");
									$("#register-form").resetForm(); 
							   }*/
		   
		   }); 
		   
		   
		   /*function submitForm(){
			 
			   
			   /*$('#message').slideDown(200, function(){
				   
				   $('#message').delay(3000).slideUp(100);
				   $("#register-form")[0].reset();
				   $(element).closest('.form-group').find("error").removeClass("has-success");
				    
			   });
			   
			   alert('form submitted...');
			   $("#register-form").resetForm();
			      
		   }*/
});