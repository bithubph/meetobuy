


@extends('layouts.admin')
@section('admin')
         <!--/.Navbar -->
         <section class="dashboard">
            <div class="dashboard_header">
                <h1 class="title">Hi, Benjamin</h1>
                <p class="sub">Welcome back, how are you today?</p>
            </div>
            <div class="dashboard_body">
                <div class="row">
                    <div class="col-md-6 mt-5">
                        <div class="card has_shadow h-200 py-2 no-border">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="icon-holder">
                                            <span class="mb-2 ti-receipt "></span>
                                        </div>
                                        <div class="text-xs font-weight-bold text-uppercase mb-1">Wallet Balance</div>
                                    </div>
                                    <div class="col-auto holder ">
                                        <p class="h3">₦ 2,478</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-5">
                        <div class="card has_shadow h-200 py-2 no-border">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="icon-holder">
                                            <span class="mb-2 ti-check-box"></span>
                                        </div>
                                        <div class="text-xs font-weight-bold text-uppercase mb-1">Completed Services</div>
                                    </div>
                                    <div class="col-auto holder ">
                                        <p class="h3"> 18</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table">
                    <div class="table-responsive has_shadow">
                        <table class="table table-borderless">
                            <div class="table_header">
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
                    <nav aria-label="..." class="mt-4">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active">
                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="table">
                    <div class="table-responsive has_shadow">
                        <table class="table table-borderless">
                            <div class="table_header ">
                                <h4>Payment History</h4>
                            </div>
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Date</th>
                                    <th scope="col"> Ref. </th>
                                    <th scope="col">Amount </th>
                                    <th scope="col" class="text-center">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>18 - Aug - 2019</td>
                                    <td>uwegw28923ge</td>
                                    <td>₦ 200</td>
                                    <td class="text-center"><span class="badge badge-danger">Failed</span></td>
                                </tr>
                                <th scope="row">2</th>
                                <td>18 - Aug - 2019</td>
                                <td>uwegw28923ge</td>
                                <td>₦ 200</td>
                                <td class="text-center"><span class="badge badge-success">Completed</span></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>18 - Aug - 2019</td>
                                    <td>uwegw28923ge</td>
                                    <td>₦ 200</td>
                                    <td class="text-center"><span class="badge badge-warning">Pending</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <nav aria-label="..." class="mt-4">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active">
                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
</div>
</div>
</section>
@endsection