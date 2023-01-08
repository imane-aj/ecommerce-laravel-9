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
              <h4 class="card-title"><code>None confirmed users</code></h4>
              {{-- <h4 class="card-title">Users <code>.Confirmed</code></h4> --}}
              {{-- <p class="card-description"> Add class</p> --}}
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Picture</th>
                      <th>Created_at</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($users as $user)
                      <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->userName}}</td>
                        <td>{{$user->email}}</td>
                        <td class='imgD'><img src="{{($user->image)? '/assets/img/' . $user->image:'/assets/img/avatar.png'}}" alt="" class="photoHeader">
                        </td>
                        <td>{{$user->created_at}}</td>
                        <td>
                            <form method="POST" action="{{ route('admin.update', $user->id) }}">
                                @csrf
                                @method("PUT")
                                <button type="submit" class='unset'><i class="fa fa-check" aria-hidden="true"></i></button>
                            </form>
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
