<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<title>Admin | @yield('title')</title>
<!-- Meta -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
@yield('css_content')
</head>

<body  class="hold-transition skin-green sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
     
      <a href="/" class="logo">
      
        <span class="logo-mini"><b>E</b>B</span>

        <span class="logo-lg"><b style="color:yellow">Event-Booking</b></span>
      </a>

      <nav class="navbar navbar-static-top">
     
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">

            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{asset('backend/my.jpg')}}" class="user-image" alt="User Image" style="width:35px;height:35px">
              <span class="hidden-xs"></span>
            </a>


              <ul class="dropdown-menu">
              
                <li class="user-header">
                <img src="{{asset('backend/my.jpg')}}" class="img-circle" alt="User Image">
                 <p> {{ Auth::user()->name }} </p>
                </li>
               
                  <li class="user-footer">
                    <div class="pull-right">
                      <a href="{{ route('admin.logout') }}"  class="btn btn-default btn-flat" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Sign out') }}</a>
                      <form id="logout-form" action="{{ route('admin.logout') }}" method="get" style="display: none;">@csrf</form>
                    </div>
                  </li>
                </ul>
              </li>
             
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>

      <aside class="main-sidebar">

        <section class="sidebar">

          <div class="user-panel">

            <div class="pull-left image">
            <img src="{{asset('backend/my.jpg')}}" class="img-circle" alt="User Image">
            </div>

            <div class="pull-left info">
              <p>{{ Auth::user()->name }}</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>


        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="@if(Route::current()->getName() == 'admin.dashboard') active @endif">
              <a href="{{ route('admin.dashboard') }}">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>

            <li class="@if(Route::current()->getName() == 'admin.add-event') active @endif @if(Route::current()->getName() == 'admin.show-events') active @endif treeview">
              <a href="#">
                <i class="fa fa-edit"></i>
                <span>Add Event</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="@if(Route::current()->getName() == 'admin.add-event') active @endif" title="Add new event"><a href="{{ route('admin.add-event') }}"><i class="fa fa-circle-o"></i> Add new post</a></li>
                <li class="@if(Route::current()->getName() == 'admin.show-events') active @endif"><a href="{{ route('admin.show-events') }}"><i class="fa fa-circle-o"></i> Event_Post_list</a></li>
              </ul>
            </li>



           <li class="@if(Route::current()->getName() == 'admin.add-blog') active @endif @if(Route::current()->getName() == 'admin.show-blog') active @endif treeview">
              <a href="#">
                <i class="fa fa-flag"></i>
                <span>Blog</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="@if(Route::current()->getName() == 'admin.add-blog') active @endif" title="Add new event"><a href="{{ route('admin.add-blog') }}"><i class="fa fa-circle-o"></i> Add blog post</a></li>
                <li class="@if(Route::current()->getName() == 'admin.show-blog') active @endif"><a href="{{ route('admin.show-blog') }}"><i class="fa fa-circle-o"></i> Show-Blog-post</a></li>
              </ul>
             </li>

       <li class="@if(Route::current()->getName() == 'admin.booking-list') active @endif  treeview">

        <a href="#">
          <i class="fa fa-list"></i>
          <span>Manage-Bookings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="@if(Route::current()->getName() == 'admin.booking-list') active @endif" title="booking-list"> <a href="{{ route('admin.booking-list') }}"><i class="fa fa-circle-o"></i>Booking-List</a></li></ul>
         </li>
     </ul>
      </section>
       </aside>




       @yield('main_content')





       <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b>No.1
        </div>
        <strong>Copyright &copy; <script>
          var CurrentYear = new Date().getFullYear()
          document.write(CurrentYear)
        </script> <a href="">Event Booking System</a>.</strong> All rights
        reserved.
      </footer>

      <aside class="control-sidebar control-sidebar-dark">

        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript:void(0)">
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript:void(0)">
                  <i class="menu-icon fa fa-user bg-yellow"></i>

                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                    <p>New phone +1(800)555-1234</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript:void(0)">
                  <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                    <p>Event-vooking-System@.com</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript:void(0)">
                  <i class="menu-icon fa fa-file-code-o bg-green"></i>

                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                    <p>Execution time 5 seconds</p>
                  </div>
                </a>
              </li>
            </ul>
            <!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript:void(0)">
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="label label-danger pull-right">70%</span>
                  </h4>

                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript:void(0)">
                  <h4 class="control-sidebar-subheading">
                    Update Resume
                    <span class="label label-success pull-right">95%</span>
                  </h4>

                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript:void(0)">
                  <h4 class="control-sidebar-subheading">
                    Laravel Integration
                    <span class="label label-warning pull-right">50%</span>
                  </h4>

                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript:void(0)">
                  <h4 class="control-sidebar-subheading">
                    Back End Framework
                    <span class="label label-primary pull-right">68%</span>
                  </h4>

                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                  </div>
                </a>
              </li>
            </ul>

          </div>
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>

          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input type="checkbox" class="pull-right" checked>
                </label>

                <p>
                  Some information about this general settings option
                </p>
              </div>
              <!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Allow mail redirect
                  <input type="checkbox" class="pull-right" checked>
                </label>

                <p>
                  Other sets of options are available
                </p>
              </div>
              <!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Expose author name in posts
                  <input type="checkbox" class="pull-right" checked>
                </label>

                <p>
                  Allow the user to show his name in blog posts
                </p>
              </div>


              <h3 class="control-sidebar-heading">Chat Settings</h3>

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Show me as online
                  <input type="checkbox" class="pull-right" checked>
                </label>
              </div>
              <!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Turn off notifications
                  <input type="checkbox" class="pull-right">
                </label>
              </div>
              <!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Delete chat history
                  <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                </label>
              </div>
              <!-- /.form-group -->
            </form>
          </div>
          <!-- /.tab-pane -->
        </div>
      </aside>

      <div class="control-sidebar-bg"></div>
    </div>


    <!-- Required Jquery -->
    @yield('js_content')

  </body>
  </html>