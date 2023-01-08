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
                      <th>Delet</th>

                    </tr>
                  </thead title="2">
                  <tbody>

                    @foreach ($projects as $project)
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
        <td> <form method="POST"
            action="{{ route('adminDeletProject', $project->id) }}"
            id="delForm_{{ $project->id }}">
            @csrf
            @method('DELETE')
            <button type="button"
                onclick="delePrjt('#delForm_{{ $project->id }}')"
                class='unset'><i class="fa fa-trash"
                    aria-hidden="true"></i></button>
        </form></td>
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
        <script>
            function delePrjt(id) {
                swal({
                        title: "Are you sure?",
                        text: "Once deleted, you will not be able to recover this project!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {

                            $(id).submit()
                            swal("Poof! The project has been deleted!", {
                                icon: "success",
                            });
                        } else {
                            swal("Your project is safe!");
                        }
                    });
            }
        </script>
@endsection
