@extends('layouts.detached', ['title' => 'Tasks Listing'])

@section('css')
    {{-- Plugins css --}}
    <link href="{{ asset('assets/libs/quill/quill.min.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('content')
    {{-- Start Content --}}
    <div class="container-fluid">

        {{-- start page title --}}
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">LearningManagementSystem </a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Enrolled</a></li>
                            <li class="breadcrumb-item active">Tasks</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Tasks</h4>
                </div>
            </div>
        </div>
        {{-- end page title --}}

        {{-- tasks panel --}}
        <div class="row">
            <div class="col-xl-8">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                {{-- cta --}}
                                <div class="row">
                                    <div class="col-sm-3">
                                        <a href="#" class="btn btn-primary waves-effect waves-light"><i
                                                class='fe-plus mr-1'></i>Add New</a>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="float-sm-right mt-3 mt-sm-0">

                                            <div class="d-inline-block mb-3 mb-sm-0 mr-sm-2">
                                                <form class="search-bar form-inline">
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control" placeholder="Search...">
                                                        <span class="mdi mdi-magnify"></span>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-light dropdown-toggle" type="button"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="mdi mdi-filter-variant"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Due Date</a>
                                                    <a class="dropdown-item" href="#">Added Date</a>
                                                    <a class="dropdown-item" href="#">Assignee</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-4" data-plugin="dragula"
                                    data-containers='["today-list", "upcoming-list"]'>
                                    <div class="col">
                                        @todayList
                                        {{-- end .collapse --}}

                                        {{-- Upcoming Tasks --}}
                                        @upcoming
                                        {{-- End of Upcoming Tasks
                                        --}}
                                    </div>
                                    {{-- end col --}}
                                </div>
                                {{-- end row --}}


                            </div>
                            {{-- end card-body --}}
                        </div>
                        {{-- end card --}}
                    </div>
                    {{-- end col --}}
                </div>
                {{-- end row --}}
            </div>
            {{-- end col --}}
        </div>

    </div>
    {{-- container --}}
@endsection
@section('script')
    {{-- Plugins js --}}
    <script src="{{ asset('assets/libs/dragula/dragula.min.js') }}"></script>
    <script src="{{ asset('assets/libs/quill/quill.min.js') }}"></script>

    {{-- Page js --}}
    <script src="{{ asset('assets/js/pages/dragula.init.js') }}"></script>
    <script src="{{ asset('assets/js/pages/task.init.js') }}"></script>
@endsection
