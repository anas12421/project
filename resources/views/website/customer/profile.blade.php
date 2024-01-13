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
                        {{-- <img src="{{ asset($customer->image) }}" alt="">
                        <h3>{{Session::get('customer_name')}}</h3>
                        <div class="basic_info">
                            <h6>Email: {{$customer->email}}</h6>
                            <a href="{{route('edit.profile')}}"><button class="btn btn-info c-button"><i class="fa fa-edit"></i> Edit</button></a>
                        </div> --}}
                        {{-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"
                            rel="stylesheet"> --}}
                        <div class="container profile-page">
                            <div class="row">
                                <div class="col-xl-6 col-lg-12 col-md-12">
                                    <div class="card profile-header">
                                        <div class="body">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-12">
                                                    <div class="profile-image float-md-right"> <img
                                                            src="{{ asset($customer->image) }}" alt=""> </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-12">
                                                    <h4 class="m-t-0 m-b-0"><strong>{{ $customer->first_name }}
                                                        </strong>{{ $customer->last_name }}</h4>
                                                        <span class="job_post">{{ $customer->mobile }}</span>
                                                    <span class="job_post">{{ $customer->email }}</span>
                                                    {{-- <p>795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p> --}}
                                                    <div>
                                                        <a href="{{route('edit.profile')}}"><button class="btn btn-primary btn-round"><i class="fa fa-edit"
                                                            aria-hidden="true"></i></button></a>
                                                        
                                                        <a href="{{route('contact')}}">
                                                            <button
                                                            class="btn btn-primary btn-round btn-simple">Message</button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
