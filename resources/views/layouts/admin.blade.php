<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
     @yield('title')
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" href="fm.selectator.jquery.css"/>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="{{asset('bassets/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{asset('bassets/css/now-ui-dashboard.css?v=1.5.0')}}" rel="stylesheet" />
  <!-- BOOTSTRAP Files -->

  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('bassets/demo/demo.css')}}" rel="stylesheet" />
    {{-- <link rel="stylesheet" href="{{asset('assets/css/dataTables.min.css')}}"> --}}
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.css">

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">


</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo text-center">
        <a href="http://www.creative-tim.com" class="simple-text">
          Mithrasoft
        </a>

      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="{{'dashboard'== request()->path() ? 'active' : ''}}">
            <a href="{{url('dashboard')}}">
              <i class="now-ui-icons design_app"></i>
              <span> Dashboard</span>
            </a>
          </li>

          <li class="{{'designation'== request()->path() ? 'active' : ''}}">
            <a href="{{url('designation')}}">
                <i class="now-ui-icons education_atom"></i>
              <span> Designation</span>
            </a>
          </li>
          <li class="{{'department'== request()->path() ? 'active' : ''}}">
            <a href="{{url('department')}}">
                <i class="now-ui-icons files_single-copy-04"></i>
              <span> Department</span>
            </a>
          </li>
          <li class="panel panel-default" id="dropdown">
            <a data-toggle="collapse" class="nav-link " href="#dropdown-lvl0115">

                <i class="now-ui-icons shopping_box"></i>
                <span class="text">Employees<i class="now-ui-icons arrows-1_minimal-down float-right"></i></span>
            </a>
            <!-- Dropdown level 1 -->
            <div id="dropdown-lvl0115" class="panel-collapse collapse">
                <div class="panel-body pl-4">
                    <ul class="nav navbar-nav">
                        <li class="{{'employee'== request()->path() ? 'active' : ''}} sub-link"><a href="{{url('employee')}}">Add Employee</a></li>

                        <li class="{{'viewemp'== request()->path() ? 'active' : ''}} sub-link"><a href="{{url('viewemp')}}">View Employee</a></li>

                    </ul>
                </div>
            </div>
          </li>
               </ul>
      </div>



    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">@yield('titletop')</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">

              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">

      </div>

      <div class="content">

        @yield('content')

      </div>

    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{asset('bassets/js/core/jquery.min.js')}}"></script>
  <script src="{{asset('bassets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('bassets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('bassets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>

  <!--  Notifications Plugin    -->
  <script src="{{asset('bassets/js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('bassets/js/now-ui-dashboard.min.js')}}?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{asset('bassets/demo/demo.js')}}"></script>

<script src="jquery-1.11.0.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
@yield('scripts')
</body>

</html>
