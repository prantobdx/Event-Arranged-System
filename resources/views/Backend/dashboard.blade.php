@extends('layouts.Backend_layout')

@section('title', 'Dashboard')
@section('css_content')
 
  <link rel="stylesheet" href="{{asset('backend/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  
  <link rel="stylesheet" href="{{asset('backend/bower_components/font-awesome/css/font-awesome.min.css')}}">
  
  <link rel="stylesheet" href="{{asset('backend/bower_components/Ionicons/css/ionicons.min.css')}}">
  
  <link rel="stylesheet" href="{{asset('backend/dist/css/AdminLTE.min.css')}}">
  
  <link rel="stylesheet" href="{{asset('backend/dist/css/skins/_all-skins.min.css')}}">
  
  <link rel="stylesheet" href="{{asset('backend/bower_components/morris.js/morris.css')}}">
  
  <link rel="stylesheet" href="{{asset('backend/bower_components/jvectormap/jquery-jvectormap.css')}}">
  
  <link rel="stylesheet" href="{{asset('backend/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  
  <link rel="stylesheet" href="{{asset('backend/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
  
  <link rel="stylesheet" href="{{asset('backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

@endsection

@section('main_content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3></h3>

              <p>Events</p>
            </div>
            <div class="icon">
              <i class="fa fa-calendar"></i>
            </div>
            <a href="{{ route('admin.show-events') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">
              <h3></h3>

              <p>...</p>
            </div>
            <div class="icon">
              <i class="fa fa-flag"></i>
            </div>
            <a href="" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3></h3>

              <p>Booking</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <a href="{{ route('admin.booking-list') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
          <div class="box box-primary">
            <div class="box-header">
              <i class="fa fa-book"></i>

              <h3 class="box-title">New Order Booking</h3>

              <div class="box-tools pull-right">
                <ul class="pagination pagination-sm inline">
                  
                </ul>
              </div>
            </div>
            
      <div class="box-body table-responsive">
              
        <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Date - Time</th>
                <th>More-info</th>
              </tr>
              </thead>
              <tbody>
              <?php $sl=1; ?>
              @foreach(App\Booking::orderBy('id', 'desc')->limit(3)->get() as $book)
              <tr>
                <td>{{$sl}}</td>
                <td>{{$book->booked_by_name}}</td>
                <td>{{$book->booked_by_email}}</td>
                <td>{{$book->phone}}</td>
                <td>{{$book->date}}- ({{ $book->start_time }}) to ({{ $book->end_time }})
                </td>
                <td><a href="{{ route('admin.booking-list') }}">Booking details</a></td>

              </tr>
              <?php $sl++; ?>
              @endforeach
              </tbody>
              <tfoot>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Date - Time</th>
                <th>More-info</th>
              </tr>
              </tfoot>
            </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix no-border">
            </div>
          </div>
          <!-- /.box -->
        </section>
       
        <section class="col-lg-5 connectedSortable">
          <!-- Calendar -->
          <div class="box box-solid bg-green-gradient">
            <div class="box-header">
              <i class="fa fa-calendar"></i>

              <h3 class="box-title">Calendar</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <!-- button with a dropdown -->
                <div class="btn-group">
                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bars"> </i> </button>
                  <ul class="dropdown-menu pull-right" role="menu">
                    <li><a href="#">Add new Event</a></li>
                    <li><a href="#">Clear Event</a></li>
                    <li class="divider"> </li>
                    <li><a href="#">View calendar</a></li>
                  </ul>
                </div>
                <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
              <!-- /. tools -->
            </div>

            <div class="box-body no-padding">
              <!--The calendar -->
              <div id="calendar" style="width: 100%"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </section>
        <!-- right col -->
      </div>
      

    </section>
    <!-- /.content -->
</div>

    
@endsection
@section('js_content')
    
    <script src="{{asset('backend/bower_components/jquery/dist/jquery.min.js')}}"></script>
    
    <script src="{{asset('backend/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
    
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    
    <script src="{{asset('backend/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    
    <script src="{{asset('backend/bower_components/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('backend/bower_components/morris.js/morris.min.js')}}"></script>
    
    <script src="{{asset('backend/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
    
    <script src="{{asset('backend/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{asset('backend/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    
    <script src="{{asset('backend/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
    
    <script src="{{asset('backend/bower_components/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('backend/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    
    <script src="{{asset('backend/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    
    <script src="{{asset('backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
    
    <script src="{{asset('backend/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    
    <script src="{{asset('backend/bower_components/fastclick/lib/fastclick.js')}}"></script>
   
    <script src="{{asset('backend/dist/js/adminlte.min.js')}}"></script>
   
    <script src="{{asset('backend/dist/js/pages/dashboard.js')}}"></script>
  
    <script src="{{asset('backend/dist/js/demo.js')}}"></script>
@endsection