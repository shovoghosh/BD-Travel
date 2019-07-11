function firstNameValidation()
            {
              var a = document.getElementById('firstname').value;
                //console.log(a);
                
                if(a==="" || a.length <3 )
                    {
                        document.getElementById('firstNameMsg').innerHTML= "minimum 3 characters";
                    }
					else
					document.getElementById('firstNameMsg').innerHTML= " &#10003";
                
              
            }
            function lastNameValidation()
            {
                var a = document.getElementById('lastname').value;
                
                if(a===""|| a.length <3)
                    {
                        document.getElementById('lastNameMsg').innerHTML= "minimum 3 characters";
                    }
					else
						document.getElementById('lastNameMsg').innerHTML= " &#10003";
                
              
            }
             function phoneValidation()
            {   
                 
                var a = document.getElementById('phone').value;
    
                if(parseInt(a))
                    {
                        document.getElementById('phoneMsg').innerHTML= "&#10003";
                    }
                    else{
                        console.log( 'asdasd');
                        document.getElementById('phoneMsg').innerHTML= " Please give a valid phone no.";
                    }
                
              
            }

            function userNameValidationReg()
            {
                var a = document.getElementById('usernameReg').value;
                
                
                if(a==="" || a.length <5)
                    {
                        document.getElementById('userNameRegMsg').innerHTML= "minimum 5 characters";
                    }
                    else {
                        var xhttp = new XMLHttpRequest();
              
                        xhttp.open("GET", '/admin/getuser/'+a, true);
                        xhttp.send();
          

                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                        alert(this.responseText);
                         document.getElementById("userNameRegMsg").innerHTML = 'Username has Taken.Please try another one';
                        }   
                    };
                }
              
            }
            function ValidateEmail() 
            {
                    var a = document.getElementById('emailid').value;
                    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{3})+$/;
                    if(a.match(mailformat))
                    {
                    
                    document.getElementById('emailValidation').innerHTML= " &#10003";
                    }
               else
                document.getElementById('emailValidation').innerHTML= "invalid";
            }
            function passWordStrength()
            {
                            
                        var a = document.getElementById('password').value;
                         
                    if(a==="" || a.length <8 )
                    {
                        document.getElementById('passWordStrength').innerHTML= "minimum 8 characters";
                    }
                else if(/\d/.test(a) &&/[a-z]/.test(a) && /[A-Z]/.test(a) || /[a-z]/.test(a) && /[A-Z]/.test(a)&&  /\W/.test(a) || /[A-Z]/.test(a)&&  /\W/.test(a)  && /\d/.test(a) ||  /\d/.test(a) &&/[a-z]/.test(a) &&  /\W/.test(a))
                   {
                        if(  a!=="" && /\d/.test(a) &&/[a-z]/.test(a) && /[A-Z]/.test(a)&&  /\W/.test(a))
                              {
                                  document.getElementById('passWordStrength').innerHTML= "Password Strength : Strong";
                              }
                    else
                       document.getElementById('passWordStrength').innerHTML= "Password Strength : Medium";
                   }
               else 
                  document.getElementById('passWordStrength').innerHTML= "Password Strength : Weak";
                
                        

                           
            }
            
            
            function validateForm()
            {

            	var firstname = document.getElementById('firstname').value;
            	var lastname = document.getElementById('lastname').value;
            	var username = document.getElementById('username').value;
            	var emailid = document.getElementById('emailid').value;
            	var password = document.getElementById('password').value;
                var phoneno = document.getElementById('phone').value;
            	//var confirmpassword = document.getElementById('confirmpassword').value;
            	//uniid = document.getElementById('uniid').value;
            	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{3})+$/;
            	//var idformat = /^[0-9]{2}-[0-9]{5}-[1-3]{1}/;
            	if(firstname.length <3)
            	{

            		document.getElementById('firstNameMsg').innerHTML= "minimum 3 characters";
            		return false;


            	}
            	else if(lastname.length <3)
            	{

            		document.getElementById('lastNameMsg').innerHTML= "minimum 3 characters";
            		return false;


            	}
            	else if(username.length <5)
            	{
                   document.getElementById('userNameMsg').innerHTML= "minimum 5 characters";
            		return false;
            	}
     //        	else if(username.length >5)
     //        	{
     //        			var xhttp = new XMLHttpRequest();
			  
					// 	xhttp.open("GET", '../controller/userNameCheck.php?username='+a, true);
					// 	xhttp.send();
          

					// xhttp.onreadystatechange = function() {
					//     if (this.readyState == 4 && this.status == 200) {
					     
					//      if(this.responseText==='in use')
					//      {
					//      	document.getElementById("userNameMsg").innerHTML = this.responseText;
					//      	return false;
					//      }
                   
     //        			}
     //        		};
     //    		}
        		else if(!emailid.match(mailformat))
        		{

                       document.getElementById('emailValidation').innerHTML= "invalid";
                       return false;
        		}
        		else if(password.length < 8)
        		{
        			document.getElementById('passWordStrength').innerHTML= "minimum 8 characters";
        			return false;
        		}
        		
                else if(!parseInt(phoneno))
                {
                    document.getElementById('phoneMsg').innerHTML= "invalid";
                     return false;
                }

            }