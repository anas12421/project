@extends('website.master')
@section('title')
    Profile
@endsection
@section('body')
    <div class="checkout-wrapper section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="list-group">
                        <a href="{{ route('customer.dashboard') }}" type="button"
                            class="list-group-item list-group-item-action active">Dashboard</a>
                        <a href="{{ route('customer.profile') }}" type="button"
                            class="list-group-item list-group-item-action">Profile</a>
                        <a href="{{ route('customer.order') }}" type="button"
                            class="list-group-item list-group-item-action">My Order</a>
                        <a href="{{ route('customer.changePassword') }}" type="button"
                            class="list-group-item list-group-item-action">Change Password</a>
                        {{-- <form action="{{ route('customer.changePassword') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="text" hidden name="id" value="{{ Session::get('customer_id') }}">
                            <button class="list-group-item list-group-item-action">Change Password</button>
                        </form> --}}
                        <a href="{{ route('customer.logout') }}" type="button"
                            class="list-group-item list-group-item-action">Log Out</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card card-body">
                        <h1 class=" text-center">Change Password</h1>
                        @include('sweetalert::alert')
                        @if (Session('messege'))
                            <div class="text-danger text-center  alert-danger p-3">{{ Session('messege') }}</div>
                        @endif
                        <section class="checkout-wrapper section">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <div class="checkout-steps-form-style-1">
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active">
                                                    <div class="row">
                                                        <form action="{{ route('change.password') }}" method="POST"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="text" hidden name="id"
                                                                value="{{ Session::get('customer_id') }}">
                                                            <div class="col-md-12">
                                                                <div class="single-form form-default">
                                                                    <div class="col-md-12 form-input form">

                                                                        <label style="color:black;font-size:15px">Old
                                                                            Password:</label>
                                                                        <i class="fa-regular fa-eye"></i>
                                                                        <i class="bi bi-eye-fill"></i>
                                                                        <input type="password" name="old_password"
                                                                            class="form-control @error('old_password') is-invalid @enderror"
                                                                            value="{{ old('old_password') }}"
                                                                            placeholder="Old Password" id="myInput1" />
                                                                        @error('old_password')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="single-form form-default">
                                                                    <div class="col-md-12 form-input form">
                                                                        <label style="color:black;font-size:15px">New
                                                                            Password:</label>
                                                                        <input type="password" name="new_password"
                                                                            class="form-control @error('new_password') is-invalid @enderror"
                                                                            value="{{ old('new_password') }}"
                                                                            placeholder="New Password" id="myInput2" />
                                                                        @error('new_password')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="single-form form-default">
                                                                    <div class="col-md-12 form-input form">
                                                                        <label style="color:black;font-size:15px">Confirm
                                                                            Paswword:</label>
                                                                        <input type="password" name="confirm_password"
                                                                            class="form-control @error('confirm_password') is-invalid @enderror"
                                                                            value="{{ old('confirm_password') }}"
                                                                            placeholder="Confirm Paswword" id="myInput" />
                                                                        @error('confirm_password')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="single-form form-default">
                                                                <input type="checkbox" onclick="myFunction()"> Show Password
                                                            </div>
                                                            <button class="btn btn-success mt-3">Change Password</button>
                                                        </form>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
