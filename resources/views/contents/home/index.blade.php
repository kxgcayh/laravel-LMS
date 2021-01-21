@extends('layouts.detached', ['title' => 'Dashboard'])

@section('css')
    <!-- Plugins css -->
    <link href="{{ asset('assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/selectize/selectize.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Dashboard</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        {{-- Content --}}
        <div class="row">
            <div class="col-lg-4">
                <div class="card-box project-box">
                    <div class="dropdown float-right">
                        <a href="#" class="dropdown-toggle card-drop arrow-none" data-toggle="dropdown"
                            aria-expanded="false">
                            <i class="mdi mdi-dots-horizontal m-0 text-muted h3"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" href="#">Delete</a>
                            <a class="dropdown-item" href="#">Add Members</a>
                            <a class="dropdown-item" href="#">Add Due Date</a>
                        </div>
                    </div> <!-- end dropdown -->
                    <!-- Title-->
                    <h4 class="mt-0"><a href="#" class="text-dark">
                            First Theatre Class
                        </a></h4>
                    <p class="text-muted text-uppercase"><i class="mdi mdi-account-circle"></i>
                        <small>
                            Angga Yudha Septian
                        </small>
                    </p>
                    <div class="badge bg-soft-danger text-danger mb-3">Pending</div>
                    <!-- Desc-->
                    <p class="text-muted font-13 mb-3 sp-line-2">
                        With supporting text below as a natural lead-in to additional contenposuere erat a ante...
                        <a href="javascript:void(0);" class="font-weight-bold text-muted">view more</a>
                    </p>
                    <!-- Task info-->
                    <p class="mb-1">
                        <span class="pr-2 text-nowrap mb-2 d-inline-block">
                            <i class="mdi mdi-format-list-bulleted-type text-muted"></i>
                            <b>78</b> Tasks
                        </span>
                        <span class="text-nowrap mb-2 d-inline-block">
                            <i class="mdi mdi-comment-multiple-outline text-muted"></i>
                            <b>214</b> Comments
                        </span>
                    </p>
                    <!-- Team-->
                    <div class="avatar-group mb-3">
                        <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top"
                            title="" data-original-title="Mat Helme">
                            <img src="{{ asset('assets/images/users/user-1.jpg') }}" class="rounded-circle avatar-sm"
                                alt="friend" />
                        </a>

                        <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top"
                            title="" data-original-title="Michael Zenaty">
                            <img src="{{ asset('assets/images/users/user-2.jpg') }}" class="rounded-circle avatar-sm"
                                alt="friend" />
                        </a>

                        <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top"
                            title="" data-original-title="James Anderson">
                            <img src="{{ asset('assets/images/users/user-3.jpg') }}" class="rounded-circle avatar-sm"
                                alt="friend" />
                        </a>

                        <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top"
                            title="" data-original-title="Mat Helme">
                            <img src="{{ asset('assets/images/users/user-4.jpg') }}" class="rounded-circle avatar-sm"
                                alt="friend" />
                        </a>

                        <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top"
                            title="" data-original-title="Username">
                            <img src="{{ asset('assets/images/users/user-5.jpg') }}" class="rounded-circle avatar-sm"
                                alt="friend" />
                        </a>
                    </div>
                </div> <!-- end card box-->
            </div>
            <div class="col-lg-4">
                <div class="card-box project-box">
                    <div class="dropdown float-right">
                        <a href="#" class="dropdown-toggle card-drop arrow-none" data-toggle="dropdown"
                            aria-expanded="false">
                            <i class="mdi mdi-dots-horizontal m-0 text-muted h3"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" href="#">Delete</a>
                            <a class="dropdown-item" href="#">Add Members</a>
                            <a class="dropdown-item" href="#">Add Due Date</a>
                        </div>
                    </div> <!-- end dropdown -->
                    <!-- Title-->
                    <h4 class="mt-0"><a href="#" class="text-dark">
                            Second Theatre Class
                        </a></h4>
                    <p class="text-muted text-uppercase"><i class="mdi mdi-account-circle"></i>
                        <small>
                            Angga Yudha Septian
                        </small>
                    </p>
                    <div class="badge bg-soft-success text-success mb-3">Finish</div>
                    <!-- Desc-->
                    <p class="text-muted font-13 mb-3 sp-line-2">
                        With supporting text below as a natural lead-in to additional contenposuere erat a ante...
                        <a href="javascript:void(0);" class="font-weight-bold text-muted">view more</a>
                    </p>
                    <!-- Task info-->
                    <p class="mb-1">
                        <span class="pr-2 text-nowrap mb-2 d-inline-block">
                            <i class="mdi mdi-format-list-bulleted-type text-muted"></i>
                            <b>78</b> Tasks
                        </span>
                        <span class="text-nowrap mb-2 d-inline-block">
                            <i class="mdi mdi-comment-multiple-outline text-muted"></i>
                            <b>214</b> Comments
                        </span>
                    </p>
                    <!-- Team-->
                    <div class="avatar-group mb-3">
                        <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top"
                            title="" data-original-title="Mat Helme">
                            <img src="{{ asset('assets/images/users/user-1.jpg') }}" class="rounded-circle avatar-sm"
                                alt="friend" />
                        </a>

                        <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top"
                            title="" data-original-title="Michael Zenaty">
                            <img src="{{ asset('assets/images/users/user-2.jpg') }}" class="rounded-circle avatar-sm"
                                alt="friend" />
                        </a>

                        <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top"
                            title="" data-original-title="James Anderson">
                            <img src="{{ asset('assets/images/users/user-3.jpg') }}" class="rounded-circle avatar-sm"
                                alt="friend" />
                        </a>

                        <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top"
                            title="" data-original-title="Mat Helme">
                            <img src="{{ asset('assets/images/users/user-4.jpg') }}" class="rounded-circle avatar-sm"
                                alt="friend" />
                        </a>

                        <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top"
                            title="" data-original-title="Username">
                            <img src="{{ asset('assets/images/users/user-5.jpg') }}" class="rounded-circle avatar-sm"
                                alt="friend" />
                        </a>
                    </div>
                </div> <!-- end card box-->
            </div>
            <div class="col-lg-4">
                <div class="card-box project-box">
                    <div class="dropdown float-right">
                        <a href="#" class="dropdown-toggle card-drop arrow-none" data-toggle="dropdown"
                            aria-expanded="false">
                            <i class="mdi mdi-dots-horizontal m-0 text-muted h3"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" href="#">Delete</a>
                            <a class="dropdown-item" href="#">Add Members</a>
                            <a class="dropdown-item" href="#">Add Due Date</a>
                        </div>
                    </div> <!-- end dropdown -->
                    <!-- Title-->
                    <h4 class="mt-0"><a href="#" class="text-dark">
                            Third Theatre Class
                        </a></h4>
                    <p class="text-muted text-uppercase"><i class="mdi mdi-account-circle"></i>
                        <small>
                            Angga Yudha Septian
                        </small>
                    </p>
                    <div class="badge bg-soft-danger text-danger mb-3">Pending</div>
                    <!-- Desc-->
                    <p class="text-muted font-13 mb-3 sp-line-2">
                        With supporting text below as a natural lead-in to additional contenposuere erat a ante...
                        <a href="javascript:void(0);" class="font-weight-bold text-muted">view more</a>
                    </p>
                    <!-- Task info-->
                    <p class="mb-1">
                        <span class="pr-2 text-nowrap mb-2 d-inline-block">
                            <i class="mdi mdi-format-list-bulleted-type text-muted"></i>
                            <b>78</b> Tasks
                        </span>
                        <span class="text-nowrap mb-2 d-inline-block">
                            <i class="mdi mdi-comment-multiple-outline text-muted"></i>
                            <b>214</b> Comments
                        </span>
                    </p>
                    <!-- Team-->
                    <div class="avatar-group mb-3">
                        <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top"
                            title="" data-original-title="Mat Helme">
                            <img src="{{ asset('assets/images/users/user-1.jpg') }}" class="rounded-circle avatar-sm"
                                alt="friend" />
                        </a>

                        <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top"
                            title="" data-original-title="Michael Zenaty">
                            <img src="{{ asset('assets/images/users/user-2.jpg') }}" class="rounded-circle avatar-sm"
                                alt="friend" />
                        </a>

                        <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top"
                            title="" data-original-title="James Anderson">
                            <img src="{{ asset('assets/images/users/user-3.jpg') }}" class="rounded-circle avatar-sm"
                                alt="friend" />
                        </a>

                        <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top"
                            title="" data-original-title="Mat Helme">
                            <img src="{{ asset('assets/images/users/user-4.jpg') }}" class="rounded-circle avatar-sm"
                                alt="friend" />
                        </a>

                        <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top"
                            title="" data-original-title="Username">
                            <img src="{{ asset('assets/images/users/user-5.jpg') }}" class="rounded-circle avatar-sm"
                                alt="friend" />
                        </a>
                    </div>
                </div> <!-- end card box-->
            </div>
        </div>

    </div> <!-- container -->
@endsection

@section('script')
    {{-- --}}
@endsection
