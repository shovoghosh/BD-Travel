<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin </title>

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
                     
                      <li><a href="index.html">Dashboard</a></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-users"></i> Users <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="addnewuser.html">Add New</a></li>
                      <li><a href="allmember.html">Members</a></li>
                      <li><a href="hotelmanager.html">Hotel Managers</a></li>
                      <li><a href="transportmanager.html">Transport Managers</a></li>
                      <li><a href="guides.html">Guides</a></li>
                     
                    </ul>
                  </li>
                  <li><a><i class="fa fa-check-square"></i> Booking <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      
                      
                      <li><a href="pendingbooking.html">Pending</a></li>
                      <li><a href="booked.html">Booked</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-map-marker"></i> Places <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="addnewplace.html">Add New</a></li>
                      <li><a href="allplaces.html">Show All</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> History<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      
                      <li><a href="bookinghistory.html">Booking History</a></li>
                      <li><a href="transactionhistory.html">Transaction History</a></li>
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
                    
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>{{session('username')}}</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>{{session('username')}}</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>{{session('username')}}</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>{{session('username')}}</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

       
       
        <!-- page content -->
        
        
        
        <div class="right_col" role="main">
          <div class="">
          
        <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                           
                         
                          <th>Id</th>
                          <th >User Name</th>
                          <th>Email</th>
                          <th>Place Name</th>
                            <th>Place Image</th>

                            <th>Hotel Price</th>
                            <th>Transport Price</th>
                            <th>Guide Price</th>

                            <th>Total</th>
                          
                          
                          <th style="width: 20%">Operation</th>
                        </tr>
                      </thead>
                      <tbody>
                       
                       
                        
                        <tr>
                          <td>1</td>
                          
                          <td>
                            <a>{{session('username')}}</a>
                            
                          </td>
                          <td >
                            <p>{{session('username')}}@gmail.com</p>
                          </td>
                          
                          <td >
                            <p>Lalbag</p>
                          </td>
                          
                          <td>
                            <ul class="list-inline">
                              <li>
                                <img src="images/user.png" class="avatar" alt="Avatar">
                              </li>
                              
                            </ul>
                          </td>
                          
                          
                          <td >
                            <p>2000tk</p>
                          </td>
                          
                          <td >
                            <p>700tk</p>
                          </td>
                          
                          <td >
                            <p>1000tk</p>
                          </td>
                          
                          <td >
                            <p>3700tk</p>
                          </td>
                          
                          
                          <td>
                            
                            
                            <a data-toggle="modal" data-target="#myModal" href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> View </a>
                            
                            
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                        </tr>
                        
               
                        
                      </tbody>
                    </table>
                    <!-- end project list -->
            
            </div>
          </div>
        
        
        <!-- buy modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">All Booking Info</h4>
			</div><!-- / modal-header -->
			<div class="modal-body">
        		<form action="#" method="post" id="#">
        			<div class="form-group">
        				<label for="order_name">Username</label>
        				
        			</div>
        			<div class="form-group">
        				<label for="order_email">Email Address</label>
        				
        			</div>
        			<div class="form-group">
        				<label for="order_mobile">Phone Number</label>
        				
        			</div>
        			
        			<div class="form-group">
        				<label for="order_pincode">Image</label>
        				
        			<div class="form-group">
        				<label for="order_address">Address</label>
        				
        			</div>
        			
        			
        		
      		</div>
      		<!-- / modal body -->
      		
      		<div class="modal-footer">
      			<div id="order_message" class="float-left text-20 text-bold"></div>
        		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        		
      		</div> <!-- /modal footer -->
      		
      		</form> 
		</div> <!-- / modal content -->
	</div> <!-- / modal-dialog -->
</div> <!-- / modal -->
<!-- / buy modal -->
        
        
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
	
  </body>
</html>
