@extends('layouts.master', ['title' => 'Class Detail'])

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
                            <li class="breadcrumb-item active">Class</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Class {{ $class->name }}</h4>
                </div>
            </div>
        </div>
        {{-- end page title --}}

        {{-- tasks panel --}}
        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card-box">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded-circle bg-light">
                                <i class="fe-list font-26 avatar-title text-primary"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <h3 class="text-dark mt-1">
                                    <span data-plugin="counterup">
                                        {{ $class->manyTask->count() }}
                                    </span>
                                </h3>
                                <p class="text-muted mb-1 text-truncate">Total Tasks</p>
                            </div>
                        </div>
                    </div>
                    {{-- end row --}}
                </div>
                {{-- end widget-rounded-circle --}}
            </div>
            {{-- end col --}}

            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card-box">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded-circle bg-light">
                                <i class="fe-check-square font-26 avatar-title text-success"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <h3 class="text-dark mt-1">
                                    @if ($class->manyTask->count() != 0)
                                        Congratulations
                                    @else
                                        <span data-plugin="counterup">
                                            $class->manyTask->count()
                                        </span>
                                    @endif
                                </h3>
                                <p class="text-muted mb-1 text-truncate">Total Tasks Completed</p>
                            </div>
                        </div>
                    </div>
                    {{-- end row --}}
                </div>
                {{-- end widget-rounded-circle --}}
            </div>
            {{-- end col --}}

            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card-box">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded-circle bg-light">
                                <a href="http://">
                                    <i class="fe-users font-26 avatar-title text-info"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <h3 class="text-dark mt-1"><span data-plugin="counterup">
                                        {{ $class->manyStudent->count() }}
                                    </span></h3>
                                <p class="text-muted mb-1 text-truncate">Total Students</p>
                            </div>
                        </div>
                    </div>
                    {{-- end row --}}
                </div>
                {{-- end widget-rounded-circle --}}
            </div>
            {{-- end col --}}

            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card-box">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded-circle bg-light">
                                <i class="fe-clock font-26 avatar-title text-warning"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <h3 class="text-dark mt-1"><span data-plugin="counterup">412</span></h3>
                                <p class="text-muted mb-1 text-truncate">Total Hours Spent</p>
                            </div>
                        </div>
                    </div>
                    {{-- end row --}}
                </div>
                {{-- end widget-rounded-circle --}}
            </div>
            {{-- end col --}}

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Student List</h4>
                        {{-- Datatable --}}
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)
                                        <tr>
                                            <td>{{ $student->id }}</td>
                                            <td>{{ $student->name }}</td>
                                            <td>{{ $student->email }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Task List</h4>
                        {{-- Datatable --}}
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tasks as $task)
                                        <tr>
                                            <td>{{ $task->id }}</td>
                                            <td>{{ $task->name }}</td>
                                            <td>{{ $task->description }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- container --}}
@endsection
@section('script')
    {{-- Plugins js --}}
    <script src="{{ asset('assets/libs/dragula/dragula.min.js') }}"></script>

    {{-- Page js --}}
    <script src="{{ asset('assets/js/pages/dragula.init.js') }}"></script>

    <script>
        //

    </script>
@endsection
