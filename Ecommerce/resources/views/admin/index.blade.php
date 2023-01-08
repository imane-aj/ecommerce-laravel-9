@extends('master')
@push('styles')
<link rel="stylesheet" href="{{asset('assets/dashAdmin_assets/css/style.css')}}" />
@endpush
    @section('content')
    <div class="container-scroller">
        @include('admin.inc.sidebar')
        <div class="container-fluid page-body-wrapper">
            @include('admin.inc.headerBar')

            <div class="main-panel">
                <div class="content-wrapper pb-0">
                    <div class="page-header flex-wrap">
                        <h3 class="mb-0"> Hi, welcome back! <span
                                class="pl-0 h6 pl-sm-2 text-muted d-inline-block">Your web analytics dashboard.</span>
                        </h3>
                    </div>
                    {{-- <div class="row">
                        <div class="col-xl-3 col-lg-12 stretch-card grid-margin">
                            <div class="row">
                                <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
                                    <div class="card bg-warning">
                                        <div class="card-body px-3 py-4">
                                            <a href="">
                                                <div class="d-flex justify-content-between align-items-start">
                                                    <div class="color-card">
                                                        <p class="mb-0 color-card-head">Users</p>
                                                        <h2 class="text-white">
                                                            {{ $users->where('confirm', 1)->count() }}</span>
                                                            1
                                                        </h2>
                                                    </div>
                                                    <i
                                                        class="card-icon-indicator mdi mdi-account-circle bg-inverse-icon-warning"></i>
                                                </div>
                                            </a>
                                            <h6 class="text-white">Confirmed users</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
                                    <div class="card bg-danger">
                                        <div class="card-body px-3 py-4">
                                            <a href="{{ route('nonConfirmedUsers') }}">
                                                <div class="d-flex justify-content-between align-items-start">
                                                    <div class="color-card">
                                                        <p class="mb-0 color-card-head">Users</p>
                                                        <h2 class="text-white">
                                                            {{ $usersConf->where('confirm', 0)->count() }}</span>
                                                        </h2>
                                                    </div>
                                                    <i
                                                        class="card-icon-indicator mdi mdi-account-circle bg-inverse-icon-danger"></i>
                                                </div>
                                            </a>
                                            <h6 class="text-white">None confirmed users</h6>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3 pb-lg-0 pb-xl-3">
                                    <div class="card bg-primary">
                                        <div class="card-body px-3 py-4">
                                            <a href="{{ route('finishedProject') }}">
                                                <div class="d-flex justify-content-between align-items-start">
                                                    <div class="color-card">
                                                        <p class="mb-0 color-card-head">Projects</p>
                                                        <h2 class="text-white">
                                                            {{ $projects->where('progress', 100)->count() }}</span>
                                                        </h2>
                                                    </div>
                                                    <i
                                                        class="card-icon-indicator mdi mdi-briefcase-outline bg-inverse-icon-primary"></i>
                                                </div>
                                            </a>
                                            <h6 class="text-white">Projects finished</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-md-6 stretch-card pb-sm-3 pb-lg-0">
                                    <div class="card bg-success">
                                        <div class="card-body px-3 py-4">
                                            <a href="{{route('projectInProg')}}">
                                            <div class="d-flex justify-content-between align-items-start">
                                                <div class="color-card">
                                                    <p class="mb-0 color-card-head">Projects</p>
                                                    <h2 class="text-white">
                                                        {{ $projects->where('progress', '!=', 100)->count() }}</h2>
                                                </div>
                                                <i
                                                    class="card-icon-indicator mdi mdi-briefcase-outline bg-inverse-icon-success"></i>
                                            </div>
                                        </a>
                                            <h6 class="text-white">Projects in progress</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 stretch-card grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card">
                                        <div class="card-body">
                                            <p class="card-description"><code>Projects progress:</code>
                                                <span style="color: green">Done</span> | <span style="color: orange"> after
                                                    50% </span>| <span style="color: red"> After deadline</span>
                                            </p>
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Project name</th>
                                                            <th>Employee</th>
                                                            <th>Progress</th>
                                                            <th>Deadline</th>

                                                        </tr>
                                                    </thead title="4">
                                                    <tbody>
                                                        @foreach ($projects as $project)
                                                            <tr>
                                                                <td>{{ $project->projectName }}</td>
                                                                <td>{{ $project->user->userName }}</td>
                                                                <td>
                                                                    @if ($project->progress == 100)
                                                                        <div class="progress">
                                                                            <div class="progress-bar" role="progressbar"
                                                                                style="width: {{ $project->progress }}%;background-color:green;"
                                                                                aria-valuenow="{{ $project->progress }}"
                                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                                        </div>
                                                                    @elseif ($project->negativeDate != 0)
                                                                        <div class="progress">
                                                                            <div class="progress-bar" role="progressbar"
                                                                                style="width: {{ $project->progress }}%;background-color:red;"
                                                                                aria-valuenow="{{ $project->progress }}"
                                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                                        </div>
                                                                    @elseif ($project->progress < 70 && $project->progress > 50)
                                                                        <div class="progress">
                                                                            <div class="progress-bar" role="progressbar"
                                                                                style="width: {{ $project->progress }}%;background-color:orange;"
                                                                                aria-valuenow="{{ $project->progress }}"
                                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                                        </div>
                                                                        @elseif ($project->progress < 50)
                                                                        <div class="progress">
                                                                            <div class="progress-bar" role="progressbar"
                                                                                style="width: {{ $project->progress }}%;background-color:blue;"
                                                                                aria-valuenow="{{ $project->progress }}"
                                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                                        </div>
                                                                    @endif

                                                                </td>
                                                                <td>{{ $project->time_final }}</td>
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
                    </div> --}}




                </div>

                <!-- plugins:js -->
            @endsection
