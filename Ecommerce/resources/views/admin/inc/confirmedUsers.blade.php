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
              <h4 class="card-title"><code>Confirmed</code></h4>
              {{-- <h4 class="page-title">Confirmed users</h4> --}}
              {{-- <h4 class="card-title">Users <code>.Confirmed</code></h4> --}}
              {{-- <p class="card-description"> Add class</p> --}}
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Picture</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Created</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($users as $user)
                      <tr>
                        <td class="py-1">
                          <img src="{{($user->image)? '/assets/img/' . $user->image:'/assets/img/avatar.png'}}" alt="" class="photoHeader">

                        </td>
                        <td>{{$user->userName}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>
                            <form method="POST"
            action="{{ route('confirmedUsers.destroy', $user->id) }}"
            id="delForm_{{ $user->id }}">
            @csrf
            @method('DELETE')
            <button type="button"
                onclick="delePrjt('#delForm_{{ $user->id }}')"
                class='unset'><i class="fa fa-trash"
                    aria-hidden="true"></i></button>
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
