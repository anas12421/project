@extends('website.master')
@section('title')
    Profile
@endsection
@section('body')
    <style>
        .card {
            width: 100%;
            text-align: center;
            margin-top: 5px;
        }

        .card img {
            height: 150px;
            width: 150px;
            margin: 0 auto;
            border-radius: 50%;
        }

        .c-button {
            margin: 5px 0px;
            padding: 5px 15px;
        }
    </style>
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
                        <a href="{{ route('customer.logout') }}" type="button"
                            class="list-group-item list-group-item-action">Log Out</a>
                    </div>
                </div>
                <div class="col-md-9">

                    <div class="card card-body">
                        <h1 class=" text-center">My Profile</h1>
                    </div>

                    <div class="card">
                        <form class="form-body" method="POST" action="{{ route('customer.save') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="text" hidden name="id" value="{{Session::get('customer_id')}}">
                            <div class="row g-3">
                                <div class="col-12">

                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="inputName" class="form-label"> First Name</label>
                                        <div class="ms-auto position-relative">
                                            <div class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                <i class="bi bi-person-circle"></i>
                                            </div>
                                            <input type="text"
                                                class="form-control radius-30 ps-5 @error('name') is-invalid @enderror"
                                                value="{{ $customer->first_name }}" name="name" id="inputName"
                                                placeholder="Enter First Name">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inpudgme" class="form-label"> Last Name</label>
                                        <div class="ms-auto position-relative">
                                            <div class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                <i class="bi bi-person-circle"></i>
                                            </div>
                                            <input type="text"
                                                class="form-control radius-30 ps-5 @error('last_name') is-invalid @enderror"
                                                value="{{ $customer->last_name }}" name="last_name" id="inpudgme"
                                                placeholder="Enter Last Name">
                                            @error('last_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="inputimge" class="form-label">Image</label>
                                            <div class="ms-auto position-relative">
                                                <div class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                    <i class="bi bi-lock-fill"></i>
                                                </div>
                                                <input type="file"
                                                    class="form-control @error('image') is-invalid @enderror" name="image"
                                                    value="{{ old('image') }}" id="inputimge">
                                                @error('image')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mt-1">
                                            <img src="{{ asset($customer->image) }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary radius-30">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

