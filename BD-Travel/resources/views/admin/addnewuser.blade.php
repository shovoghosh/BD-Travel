<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Panel </title>

    <!-- Bootstrap -->
    <link href=" {{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href=" {{asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href=" {{asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href=" {{asset('vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
	
   
    <!-- bootstrap-progressbar -->
    <link href=" {{asset('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href=" {{asset('vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href=" {{asset('vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href=" {{asset('build/css/custom.min.css')}}" rel="stylesheet">
  </head>
  @if(session('message'))
    <h4 align="center">{{session('message')}}</h4>
  @endif
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><span>Admin Panel</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{session('username')}}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
             <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                     
                      <li><a href="{{route('admin.home')}}">Dashboard</a></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-users"></i> Users <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('admin.addnewuser')}}">Add New</a></li>
                      <li><a href="{{route('admin.adduserimage')}}">Add New Image</a></li>
                      <li><a href="{{route('admin.allmember')}}">Members</a></li>
                      <li><a href="{{route('admin.hotelmanager')}}">Hotel Managers</a></li>
                      <li><a href="{{route('admin.transportmanager')}}">Transport Managers</a></li>
                      <li><a href="{{route('admin.guides')}}">Guides</a></li>
                     
                    </ul>
                  </li>
                  <li><a><i class="fa fa-check-square"></i> Booking <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      
                      
                      <li><a href="{{route('admin.pendingbooking')}}">Pending</a></li>
                      <li><a href="{{route('admin.booked')}}">Booked</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-map-marker"></i> Places <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('admin.addnewplace')}}">Add New</a></li>
                      <li><a href="{{route('admin.allplaces')}}">Show All</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> History<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      
                      <li><a href="{{route('admin.bookinghistory')}}">Booking History</a></li>
                      <li><a href="{{route('admin.transactionhistory')}}">Transaction History</a></li>
                    </ul>
                  </li>
                  
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->

            
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">{{session('username')}}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    
                    <li><a href="/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="{{route('admin.inbox')}}"  aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

       
       
        <!-- page content -->
        
        <div class="right_col" role="main">
         <div class="col-md-6 col-sm-12 col-xs-12">
          <div class=" ">
       <div class="x_content">

                    <form method='post' onsubmit="return validateForm()" class="form-horizontal form-label-left input_mask">
                      {{@csrf_field()}}
                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input name="firstname" required="required" type="text" class="form-control has-feedback-left" id="firstname" placeholder="First Name" onkeyup="firstNameValidation()" onblur="document.getElementById('firstNameMsg').innerHTML= '';">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                        <p id="firstNameMsg"></p>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input name="lastname" required="required" type="text" class="form-control" id="lastname" placeholder="Last Name" onkeyup="lastNameValidation()" onblur="document.getElementById('lastNameMsg').innerHTML= '';" >
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        <p id="lastNameMsg"></p>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input name="email" required="required" type="text" class="form-control has-feedback-left" id="emailid" placeholder="Email" onkeyup="ValidateEmail()" onblur="document.getElementById('emailValidation').innerHTML= '';" >
                        <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                        <p id="emailValidation"></p>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input name="phone" required="required" type="text" class="form-control" id="phone" placeholder="Phone" id="phone" onkeyup="phoneValidation()" onblur="document.getElementById('phoneMsg').innerHTML= '';">
                        <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                        <p id="phoneMsg"></p>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">User Name<span class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input name="username" required="required" type="text" class="form-control" placeholder="User Name" id="username"  onblur="document.getElementById('userNameMsg').innerHTML= '';">
                          <p id="userNameMsg"></p>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Password<span class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input name="password" required="required" type="password" class="form-control" placeholder="Password" id="password" onkeyup="passWordStrength()" onblur="document.getElementById('passWordStrength').innerHTML= '';">
                          <p id="passWordStrength"></p>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Address  <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea name="address" required="required" class="form-control" rows="3"  placeholder='House, Area, City, Country  
[ type in this order ]'></textarea> 
                        </div>

                      </div>
                      
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="button" class="btn btn-primary">Cancel</button>
						   <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
            </div>
            </div>
            
          </div>
        
        
        
        
        <!-- /page content -->

        <!-- footer content -->
        <footer>
         
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
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
    <!-- Chart.js -->
    <script src=" {{asset('vendors/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- gauge.js -->
    <script src=" {{asset('vendors/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src=" {{asset('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('vendors/iCheck/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src=" {{asset('vendors/skycons/skycons.js')}}"></script>
    <!-- Flot -->
    <script src=" {{asset('vendors/Flot/jquery.flot.js')}}"></script>
    <script src=" {{asset('vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src=" {{asset('vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src=" {{asset('vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src=" {{asset('vendors/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src=" {{asset('vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src=" {{asset('vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src=" {{asset('vendors/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src=" {{asset('vendors/DateJS/build/date.js')}}"></script>
    <!-- JQVMap -->
    <script src=" {{asset('vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src=" {{asset('vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src=" {{asset('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src=" {{asset('vendors/moment/min/moment.min.js')}}"></script>
    <script src=" {{asset('vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src=" {{asset('build/js/custom.min.js')}}"></script>
    <script src="{{asset('js/dregistration.js')}}"></script>
    <script src="{{asset('js/userNameSearchReg.js')}}"></script>

  </body>
</html>
