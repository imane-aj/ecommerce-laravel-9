@extends('layouts.dashboardStyle')
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
                    <div class="row">
                        <div class="col-xl-9 stretch-card grid-margin">
                            <div class="card">
                                <div class="card-body">
                                      <div class="card">
                                        <div class="card-body">
                                            @if(session()->has('error'))
                                            <div class="alert alert-warning">
                                                {{ session()->get('error') }}
                                            </div>
                                        @endif
                                        <div class="app-card-body px-4 w-100">
                                            <div class="item-ad border-bottom py-3">
                                                <form method='POST' action="{{ route('profileUpdate', $admin->id) }}" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="row justify-content-between align-items-center">
                                                    <div class="col-auto">

                                                        <div class="item-data"><img class="profile-image" src="{{($admin->image)? '/assets/img/' . $admin->image:'/assets/img/avatar.png'}}" alt=""></div>
                                                    </div><!--//col-->
                                                    <div class="col text-right">
                                                        <div class="item-label mb-2"><div class="wrapper">
                                                            <div class="file-upload">
                                                                <input type="file" name='image'>
                                                              <i class="fa fa-arrow-up"></i>
                                                            </div>
                                                          </div></div>
                                                          <button type="submit" class="btn-sm subAd">Change</button>
                                                    </div><!--//col-->
                                                </div><!--//row-->
                                                </form>
                                            </div><!--//item-->
                                            <div class="item border-bottom py-3">
                                                <form method='POST' action="{{ route('profileUpdate', $admin->id) }}">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="row justify-content-between align-items-center">
                                                        <div class="col-auto">

                                                            <div class="item-data"> <input type="email" name="email" value={{ old('email', $admin->email) }} class="form-control"></div>
                                                        </div><!--//col-->
                                                        <div class="col text-right">

                                                            <button type="submit" class="btn-sm subAd">Change</button>
                                                        </div><!--//col-->
                                                    </div><!--//row-->
                                                    </form>
                                            </div><!--//item-->

                                            <form method='POST' action="{{ route('profileUpdate', $admin->id) }}">
                                                @csrf
                                                @method('PUT')
                                            <div class="item py-3">
                                                    <div class="row justify-content-between align-items-center">
                                                        <div class="col-auto">

                                                            <div class="item-data"> <input type="password" name="oldPassword" placeholder="enter old password" class="form-control"></div>
                                                        </div><!--//col-->
                                                        <div class="col text-right">


                                                        </div><!--//col-->
                                                    </div><!--//row-->

                                            </div><!--//item-->

                                            <div class="item py-3">
                                                <div class="row justify-content-between align-items-center">
                                                    <div class="col-auto">

                                                        <div class="item-data"> <input type="password" name="password" placeholder="enter new password" class="form-control"></div>
                                                    </div><!--//col-->
                                                    <div class="col text-right">

                                                    </div><!--//col-->
                                                </div><!--//row-->

                                        </div><!--//item-->

                                        <div class="item py-3">
                                            <div class="row justify-content-between align-items-center">
                                                <div class="col-auto">

                                                    <div class="item-data"> <input type="password" name="password_confirmation" placeholder="confirm new password" class="form-control"></div>
                                                </div><!--//col-->
                                                <div class="col text-right">

                                                    <button type="submit" class="btn-sm subAd">Change</button>
                                                </div><!--//col-->
                                            </div><!--//row-->

                                    </div><!--//item-->
                                        </form>
                                        </div>
                                        </div>
                                      </div>
                                </div>
                              </div>
                        </div>
                    </div>




                </div>

                <!-- plugins:js -->
            @endsection
