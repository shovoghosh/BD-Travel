<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>

    <!-- Bootstrap -->
    <link href=" {{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href=" {{asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href=" {{asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href=" {{asset('vendors/animate.css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href=" {{asset('build/css/custom.css')}}" rel="stylesheet">
  </head>

  <body class="login">
    <div>
     
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <a class="hiddenanchor" id="lostpass"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="post" action="{{route('loginValidation')}}">
              {{@csrf_field() }}
              <h1>Login Form</h1>
              <div>
                <input required="required" type="text" class="form-control" placeholder="Username" name="username" />
              </div>
              <div>
                <input required="required" type="password" class="form-control" placeholder="Password" name="password"  />
              </div>
              <div>
                <input type="submit" class="btn btn-default" value="login" name="" style="margin-left:-1px; ">
                <p>{{session('message')}}</p>
                <a class="to_lostpass" href="#lostpass" style="margin-right:150px ">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                
              </div>
            </form>
          </section>
        </div>
        
        <div id="lostpass" class="animate form lostpass_form">
          <section class="login_content">
            <form>
              {{@csrf_field()}}
              <h1>Forgot Password</h1>
              <div>
                <input type="text" class="form-control" placeholder="Type Your Email" required="" />
              </div>
              
              <div>
                <a class="btn btn-default submit" href="#">Send</a>
                <a class="reset_pass" href="#signin">Back To Login?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                
              </div>
            </form>
          </section>
        </div>
        

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form method='post'  action="{{route('registration')}}">
              {{@csrf_field()}}
              <h1>Create Account</h1>
              
              <div>
                <input name="firstname" required="required" type="text" class="form-control " id="firstname" placeholder="First Name" onkeyup="firstNameValidation()" onblur="document.getElementById('firstNameMsg').innerHTML= '';"/>
                <p id="firstNameMsg"></p>
              </div>
              
              <div>
                <input name="lastname" required="required" type="text" class="form-control" id="lastname" placeholder="Last Name" onkeyup="lastNameValidation()" onblur="document.getElementById('lastNameMsg').innerHTML= '';" >
                <p id="lastNameMsg"></p>
              </div>
              
              <div>
               <input name="username" required="required" type="text" class="form-control" placeholder="User Name" id="username"  onblur="document.getElementById('userNameMsg').innerHTML= '';">
                <p id="userNameMsg"></p>
              </div>
              <div>
                 <input name="email" required="required" type="text" class="form-control " id="emailid" placeholder="Email" onkeyup="ValidateEmail()" onblur="document.getElementById('emailValidation').innerHTML= '';" >
                 <p id="emailValidation"></p>
              </div>
              
              <div>
                <input name="phone" required="required" type="text" class="form-control" id="phone" placeholder="Phone" id="phone" onkeyup="phoneValidation()" onblur="document.getElementById('phoneMsg').innerHTML= '';">
                <p id="phoneMsg"></p>
              </div>
              
              
              <div>
                <input name="password" required="required" type="password" class="form-control" placeholder="Password" id="password" onkeyup="passWordStrength()" onblur="document.getElementById('passWordStrength').innerHTML= '';">
                <p id="passWordStrength"></p>
              </div>
              
              <div>
                <input type="text-area" class="form-control" placeholder="Address" required="required" name="address"/>
                <p></p>
              </div>
              
              <div >
                <input type="submit" class="btn btn-default" name="" style="margin-left: 140px;margin-top: 20px"><br><br><br>
                
              </div>
              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
     <!-- jQuery -->
    <script src=" {{asset('vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src=" {{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src=" {{asset('vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src=" {{asset('vendors/nprogress/nprogress.js')}}"></script>
    <!-- validator -->
    <script src=" {{asset('validator/validator.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src=" {{asset('build/js/custom.min.js')}}"></script>
    <script src=" {{asset('js/dregistration.js')}}"></script>
    <script src=" {{asset('js/userNameSearchReg.js')}}"></script>
  </body>
</html>
