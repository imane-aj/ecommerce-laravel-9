@extends('layouts.dashboardStyle')
@section('content')
    <div class="container-scroller">
        @include('admin.inc.sidebar')
        <div class="container-fluid page-body-wrapper">
            @include('admin.inc.headerBar')
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">

                    </div>
                    <div class="grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="card">
                                    <div class="card-body">
                                        <p class="card-description"><code>Rating Projects: </code>
                                            <span style="color: green">Done</span> | <span style="color: orange"> after 50%
                                            </span>| <span style="color: red"> After deadline</span>
                                        </p>
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Project name</th>
                                                        <th>Employee</th>
                                                        <th>Progress</th>
                                                        <th>Deadline</th>
                                                        <th>Add Priority</th>
                                                        {{-- <th>RemainingTime</th>
                      <th>TimeOut</th> --}}

                                                    </tr>
                                                </thead title="1">
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
                                                                @elseif ($project->progress < 80 && $project->progress > 50)
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
                                                            <td>{{ $project->time_final }}
                                                            <td>

                                                                <form method='post'
                                                                    action="{{ route('updatePriority', $project->id) }}"
                                                                    style="display: flex;">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="rating-css" style="padding-top: 6px;">
                                                                        <div class="star-icon">
                                                                            <label class="rating-label">
                                                                                <input name="priority"
                                                                                    class="rating" max="5"
                                                                                    oninput="this.style.setProperty('--value', `${this.valueAsNumber}`)"
                                                                                    step="1" style="--value:1.5"
                                                                                    type="range"
                                                                                    value="{{ old('priority', $project->priority) }}">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <button type="submit"
                                                                        style="border:unset; background-color:unset;"><i
                                                                            class="fa fa-check" aria-hidden="true" style="padding: 4px;
                            border-radius: 50%;
                            font-size: 0.8em;"></i></button>
                                                                </form>
                                                            </td>
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
                </div>
                @endsection
