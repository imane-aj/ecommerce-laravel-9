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
                <span style="color: green">Done</span> | <span style="color: orange"> after 50% </span>| <span style="color: red"> After deadline</span>
              </p>
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Project name</th>
                      <th>Employee</th>
                      <th>Progress</th>
                      <th>TimeInitial</th>
                      <th>Deadline</th>
                      <th>Remaining</th>
                      <th>TimeOut</th>
                      {{-- <th>RemainingTime</th>
                      <th>TimeOut</th> --}}

                    </tr>
                  </thead title="3">
                  <tbody>

                    @foreach ($projectsPriority as $project)
                        <tr>
                          <td>{{$project->projectName}}</td>
                          <td>{{$project->user->userName}}</td>
                          <td>
                            @if ($project->progress == 100)
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: {{$project->progress}}%;background-color:green;" aria-valuenow="{{$project->progress}}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            @elseif ($project->negativeDate != 0)
                            <div class="progress">
                              <div class="progress-bar" role="progressbar" style="width: {{$project->progress}}%;background-color:red;" aria-valuenow="{{$project->progress}}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            @elseif ($project->progress < 70 && $project->progress > 50)
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: {{$project->progress}}%;background-color:orange;" aria-valuenow="{{$project->progress}}" aria-valuemin="0" aria-valuemax="100"></div>
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
                          <td>{{$project->time_initial}}</td>
                          <td>{{$project->time_final}}</td>
                          <td>
                            @if ($project->negativeDate == '0' && $project->progress != 100)
                            <?php $date =  $project->dateLeft;
                            $splate = (explode(" ",$date));?>
                            <?php echo $splate[0] ?> days  <?php echo $splate[1] ?> hours
                          @else
                            0
                          @endif
                        </td>
                          <td>
                          @if ($project->dateLeft == '0' && $project->progress != 100)
                            <?php $date =  $project->negativeDate;
                            $splate = (explode(" ",$date));?>
                            <?php echo $splate[0] ?> days  <?php echo $splate[1] ?> hours
                          @else
                            0
                          @endif
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
