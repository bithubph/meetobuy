<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <!-- Themify -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css">
    <!--Ionic-->
    <link rel="stylesheet" type="text/css" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="/lib/bootstrap/css/bootstrap.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Darker+Grotesque|Montserrat&display=swap" rel="stylesheet">
    <!-- custom css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/dash_src/app.css')}}">
    <title>Dashboard </title>
</head>

<body>
    <div class="loader-container" id="myloader">
        <div id="loader1"></div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <nav id="nav-sidebar" class="bg-faded">
                    <div>
                        <div class="sidebar-content hidden-sm-down">
                            <span class="sidebar-expand hidden-md-up">
                                <i class="ti-close"></i>
                            </span>
                            <div class="sidebar-brand">
                                <ul class="nav nav-pills flex-column">
                                    <li class="nav-item ">
                                        <a class="nav-link isActive" href="index"> <i class="ti-blackboard"></i> Dashboard <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link isActive" href="index.html"> <i class="ti-blackboard"></i> Requests <span class="badge badge-danger">new</span></span></a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link isActive" href="/api/services/create"> <i class="ti-blackboard"></i> Add/Create Service </a>
                                    </li>
                                    <li>
                                </ul>
                            </div>
                        </div>
                </nav>
            </div>
            <main class="">
                <!--Navbar -->
                <nav class="navbar navbar-expand topbar ">
                    <!-- Sidebar Toggle (Topbar) -->
                    <a class="navbar-brand" href="#"> <span class="sidebar-expand hidden-md-up">
                            <i class="ti-line-double"></i>
                        </span></a>
                    Meetobuy
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <span class="bal nav-link">bal: <em>₦</em> 2,478</span>
                        </li>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle  hide_arrow" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small user">Benjamin</span>
                                <span class="ti-user"></span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="profile.html">
                                    Profile
                                </a>
                                <a class="dropdown-item" href="profile-settings.html">
                                    Profile Settings
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/">
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
           @yield('admin')
    </main>
    </div>
    </div>
    <script type="text/javascript" src="{{asset('lib/jquery/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}""></script>
    <script type="text/javascript" src="{{asset('dash_src/app.js')}}"></script>
</body>

</html>