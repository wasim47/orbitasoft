    @extends('admin.layouts.app')
    @section('title', 'Dashboard')
    @section('content')
    <div class="app-wrapper">
        @include('admin.layouts.sidebar')
        <main class="app-main">
            <div class="app-content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">Dashboard</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Dashboard
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="app-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box"> <span class="info-box-icon text-bg-primary shadow-sm"> <i class="bi bi-gear-fill"></i> </span>
                                <div class="info-box-content"> <span class="info-box-text">Client</span> <span class="info-box-number">
                                        152</span> </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box"> <span class="info-box-icon text-bg-danger shadow-sm"> <i class="bi bi-hand-thumbs-up-fill"></i> </span>
                                <div class="info-box-content"> <span class="info-box-text">Portfolio</span> <span class="info-box-number">41,410</span> </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box"> <span class="info-box-icon text-bg-success shadow-sm"> <i class="bi bi-cart-fill"></i> </span>
                                <div class="info-box-content"> <span class="info-box-text">Products</span> <span class="info-box-number">760</span> </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box"> <span class="info-box-icon text-bg-warning shadow-sm"> <i class="bi bi-people-fill"></i> </span>
                                <div class="info-box-content"> <span class="info-box-text">Service</span> <span class="info-box-number">2,000</span> </div>
                            </div>
                        </div>
                        

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Top Clients</h3>
                                    <div class="card-tools"> <span class="badge text-bg-danger">
                                            8 New Doctors
                                        </span> <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"> <i data-lte-icon="expand" class="bi bi-plus-lg"></i> <i data-lte-icon="collapse" class="bi bi-dash-lg"></i> </button> <button type="button" class="btn btn-tool" data-lte-toggle="card-remove"> <i class="bi bi-x-lg"></i> </button> </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="row text-center m-1">
                                        <div class="col-3 p-2"> <img class="img-fluid rounded-circle" src="{{ asset('assets/img/user1-128x128.jpg') }}" alt="User Image"> <a class="btn fw-bold fs-7 text-secondary text-truncate w-100 p-0" href="#">
                                                Alexander Pierce
                                            </a>
                                            <div class="fs-8">Today</div>
                                        </div>
                                        <div class="col-3 p-2"> <img class="img-fluid rounded-circle" src="{{ asset('assets/img/user1-128x128.jpg') }}" alt="User Image"> <a class="btn fw-bold fs-7 text-secondary text-truncate w-100 p-0" href="#">
                                                Norman
                                            </a>
                                            <div class="fs-8">Yesterday</div>
                                        </div>
                                        <div class="col-3 p-2"> <img class="img-fluid rounded-circle" src="{{ asset('assets/img/user7-128x128.jpg') }}" alt="User Image"> <a class="btn fw-bold fs-7 text-secondary text-truncate w-100 p-0" href="#">
                                                Jane
                                            </a>
                                            <div class="fs-8">12 Jan</div>
                                        </div>
                                        <div class="col-3 p-2"> <img class="img-fluid rounded-circle" src="{{ asset('assets/img/user6-128x128.jpg') }}" alt="User Image"> <a class="btn fw-bold fs-7 text-secondary text-truncate w-100 p-0" href="#">
                                                John
                                            </a>
                                            <div class="fs-8">12 Jan</div>
                                        </div>
                                        <div class="col-3 p-2"> <img class="img-fluid rounded-circle" src="{{ asset('assets/img/user2-160x160.jpg') }}" alt="User Image"> <a class="btn fw-bold fs-7 text-secondary text-truncate w-100 p-0" href="#">
                                                Alexander
                                            </a>
                                            <div class="fs-8">13 Jan</div>
                                        </div>
                                        <div class="col-3 p-2"> <img class="img-fluid rounded-circle" src="{{ asset('assets/img/user5-128x128.jpg') }}" alt="User Image"> <a class="btn fw-bold fs-7 text-secondary text-truncate w-100 p-0" href="#">
                                                Sarah
                                            </a>
                                            <div class="fs-8">14 Jan</div>
                                        </div>
                                        <div class="col-3 p-2"> <img class="img-fluid rounded-circle" src="{{ asset('assets/img/user4-128x128.jpg') }}" alt="User Image"> <a class="btn fw-bold fs-7 text-secondary text-truncate w-100 p-0" href="#">
                                                Nora
                                            </a>
                                            <div class="fs-8">15 Jan</div>
                                        </div>
                                        <div class="col-3 p-2"> <img class="img-fluid rounded-circle" src="{{ asset('assets/img/user3-128x128.jpg') }}" alt="User Image"> <a class="btn fw-bold fs-7 text-secondary text-truncate w-100 p-0" href="#">
                                                Nadia
                                            </a>
                                            <div class="fs-8">15 Jan</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-center"> <a href="javascript:" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">View All Users</a> </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Latest Project</h3>
                                    <div class="card-tools"> <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"> <i data-lte-icon="expand" class="bi bi-plus-lg"></i> <i data-lte-icon="collapse" class="bi bi-dash-lg"></i> </button> <button type="button" class="btn btn-tool" data-lte-toggle="card-remove"> <i class="bi bi-x-lg"></i> </button> </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table m-0">
                                            <thead>
                                                <tr>
                                                    <th>Project ID</th>
                                                    <th>Project Name</th>
                                                    <th>Project Start</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td> <a href="pages/examples/invoice.html" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">OR9842</a> </td>
                                                    <td>Dr. Zillur Rahman</td>
                                                    <td>Sunday, 02 Dec 2024, 08:30 PM - 10:00 PM</td>
                                                    <td> <span class="badge text-bg-success">Success</span> </td>
                                                </tr>
                                                <tr>
                                                    <td> <a href="pages/examples/invoice.html" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">OR9842</a> </td>
                                                    <td>Dr. Zillur Rahman</td>
                                                    <td>Sunday, 02 Dec 2024, 08:30 PM - 10:00 PM</td>
                                                    <td> <span class="badge text-bg-success">Success</span> </td>
                                                </tr>
                                                <tr>
                                                    <td> <a href="pages/examples/invoice.html" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">OR9842</a> </td>
                                                    <td>Dr. Zillur Rahman</td>
                                                    <td>Sunday, 02 Dec 2024, 08:30 PM - 10:00 PM</td>
                                                    <td> <span class="badge text-bg-success">Success</span> </td>
                                                </tr>
                                                <tr>
                                                    <td> <a href="pages/examples/invoice.html" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">OR9842</a> </td>
                                                    <td>Dr. Zillur Rahman</td>
                                                    <td>Sunday, 02 Dec 2024, 08:30 PM - 10:00 PM</td>
                                                    <td> <span class="badge text-bg-success">Success</span> </td>
                                                </tr>
                                                <tr>
                                                    <td> <a href="pages/examples/invoice.html" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">OR9842</a> </td>
                                                    <td>Dr. Zillur Rahman</td>
                                                    <td>Sunday, 02 Dec 2024, 08:30 PM - 10:00 PM</td>
                                                    <td> <span class="badge text-bg-success">Success</span> </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> <!-- /.table-responsive -->
                                </div> <!-- /.card-body -->
                                <div class="card-footer clearfix"> <a href="javascript:void(0)" class="btn btn-sm btn-primary float-start">
                                        New Project
                                    </a> <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-end">
                                        View All Projects
                                    </a> </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </main>
        @include('admin/layouts.footer')
    </div>

    @endsection