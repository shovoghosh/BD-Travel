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
       <div class="container" style="background-color: #e1e5ed; border:1px solid #cecece;color:black;padding-bottom: 205px">
    <br>
    <div class="row" >
      <!-- email,inbox,sent -->
      <div class="col-lg-3">
        
      </div>
      <div class="col-lg-1">
        <table>
          <tr>
            <td class="align-middle"><button class="btn btn-danger" data-toggle="modal" data-target="#newemailModal">New Email</button><br/></td>
          </tr>
          <tr>
            <td class="align-middle"><span  style="font-size: 16px;text-align: center;"><i class="fa fa-envelope" style="margin-right: 10px"></i>Inbox</span><br></td>
          </tr>
          <tr>
            <td class="align-middle"><span  style="font-size: 16px;text-align: center;"><i class="fa fa-paper-plane" style="margin-right: 10px"></i>Sent</span></td>
          </tr>
        </table>
        
        
        
      </div>
      <!-- table -->
      <div class="col-lg-6">
        <table class="table table-bordered table-hover" style="background-color: white" >
          <tr>
            <th>#</th>
            <th>From</th>
            <th>Subject</th>
            <th>time</th>
          </tr>
          @foreach($message as $m)
          <tr class="forModal" data-toggle="modal" data-target="#myModal" id="{{$m->id}}">
            <td>{{$m->id}}</td>
            <td>{{$m->name}}</td>
            <td>{{$m->subject}}</td>
            <td>{{$m->time}}</td>
          </tr>
          @endforeach
        </table>
      </div>
      
    </div>
    <!-- modal -->
    <div class="modal" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalFrom">From : </h5>
            <button class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="subject" >Subject : </label>
                <p id="modalSubject"></p>
              </div>
              <div class="form-group">
                <label for="message" >Message : </label>
                <p id="modalMessage"></p>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button  id="repBtn" class="btn btn-success repBtn" data-toggle="modal" data-target="#repModal" data-dismiss="modal">Reply</button>
            <button id="delBtn" class="btn btn-danger delBtn" data-dismiss="modal">Delete</button>
            <button class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- reply modal -->
    <div class="modal" id="repModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalrepTo">To: </h5>
            <button class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="subject" >Subject : </label>
                <p id="modalrepSubject"></p>
              </div>
              <div class="form-group">
                <label for="message" >Message : </label>
                <textarea id="modalrepMessage" class="form-control form-rounded" rows="3" required></textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button class="btn btn-danger" data-dismiss="modal">Close</button>
            <button id="sendBtn" class="btn btn-primary" data-dismiss="modal">Send</button>
          </div>
        </div>
      </div>
    </div>
  </div>
      <!-- new email modal -->
      <div class="modal" id="newemailModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header ">
            <form method="post" id="newemailForm">
            <h5 class="modal-title" >To: </h5>
            <button class="close" data-dismiss="modal">&times;</button>
            <input id="newemailTo" type="text" name='mto' class="form-control" required>
          </div>
          <div class="modal-body">
              <div class="form-group">
                <label for="subject" >Subject : </label>
                <input id="newemailSubject" name='subject' type="text" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="message" >Message : </label>
                <textarea id="newemailMessage" name='message' class="form-control form-rounded" rows="3" required></textarea>
              </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-dismiss="modal">Close</button>
            
            <!-- <button type="submit" id="sendBtn" class="btn btn-primary" data-dismiss="modal">Send</button> -->
            <input type="submit" id="newemailSubmit" class="btn btn-primary"  name="" value="send"/>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
        
        
        
        <!-- /page content -->

        <!-- footer content -->
        
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
  <script src="js/mailModal.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
     $('#sentMessage').fadeOut(2000, function() {
        $(this).empty().show();
    });
       
});

  </script>
	
  </body>
</html>
