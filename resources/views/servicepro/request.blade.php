@extends('layouts.admin')
@section('admin')

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
    <!--/.Navbar -->
    <section class="dashboard">
        <div class="dashboard_header">
            <h1 class="title">Hi, Benjamin</h1>
            <p class="sub">You have the following requets</p>
        </div>
        <div class="dashboard_body">
            <div class="row">
                <div class="col-md-4">
                    <div class="service_request">
                        <div class="content">
                            <div>
                                <h6>You have a new service request name</h6>
                                <p><span>Name:</span> Tammy Benjamin</p>
                                <p><span>Phone:</span> 0902 261 8844</p>
                                <p><span>Service Requested:</span> Fix Plumbing</p>
                                <div class="activity">
                                    <span><i class="ti-map-alt"></i> Alakahia</span>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <a href="#" class="btn btn-sm btn-success has_shadow">Accept</a>
                            <a href="#" class="btn btn-sm btn-danger has_shadow">Reject</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service_request">
                        <div class="content">
                            <div>
                                <h6>You have a new service request name</h6>
                                <p><span>Name:</span> Tammy Benjamin</p>
                                <p><span>Phone:</span> 0902 261 8844</p>
                                <p><span>Service Requested:</span> Fix Plumbing</p>
                                <div class="activity">
                                    <span><i class="ti-map-alt"></i> Alakahia</span>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <a href="#" class="btn btn-sm btn-success has_shadow">Accept</a>
                            <a href="#" class="btn btn-sm btn-danger has_shadow">Reject</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service_request">
                        <div class="content">
                            <div>
                                <h6>You have a new service request name</h6>
                                <p><span>Name:</span> Tammy Benjamin</p>
                                <p><span>Phone:</span> 0902 261 8844</p>
                                <p><span>Service Requested:</span> Fix Plumbing</p>
                                <div class="activity">
                                    <span><i class="ti-map-alt"></i> Alakahia</span>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <a href="#" class="btn btn-sm btn-success has_shadow">Accept</a>
                            <a href="#" class="btn btn-sm btn-danger has_shadow">Reject</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive has_shadow">
                <table class="table table-borderless">
                    <div class="table_header ">
                        <h4>Recent Services</h4>
                    </div>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Date</th>
                            <th scope="col"> Ref. </th>
                            <th scope="col">Amount </th>
                            <th scope="col">Service offered to </th>
                            <th scope="col" class="text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>18 - Aug - 2019</td>
                            <td>uwegw28923ge</td>
                            <td>₦ 200</td>
                            <td>Tammy Okoro</td>
                            <td class="text-center"><span class="badge badge-danger">Canceled</span></td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>18 - Aug - 2019</td>
                            <td>uwegw28923ge</td>
                            <td>₦ 200</td>
                            <td>Tammy Okoro</td>
                            <td class="text-center"><span class="badge badge-success">Completed</span></td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>18 - Aug - 2019</td>
                            <td>uwegw28923ge</td>
                            <td>₦ 200</td>
                            <td>Tammy Okoro</td>
                            <td class="text-center"><span class="badge badge-warning">Pending</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
</div>
</div>
</section>
@endsection