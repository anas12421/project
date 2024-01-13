@extends('website.master')
@section('body')
    <section id="contact-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="from-part">
                        <form action="{{ route('contact.save') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col col-md-6 col-lg-6">
                                    <div class="form_item">
                                        <input type="text" name="name" value="{{ old('name') }}" placeholder="Name"
                                            class=" form-control  @error('name') is-invalid @enderror">
                                    </div>
                                </div>
                                <div class="col col-md-6 col-lg-6">
                                    <div class="form_item">
                                        <input type="email" name="email" value="{{ old('email') }}"
                                            placeholder="Email*"
                                            class=" form-control  @error('email') is-invalid @enderror">
                                    </div>

                                </div>
                            </div>
                            <div class="form_item">
                                <input type="number" name="number" value="{{ old('number') }}" placeholder="Number"
                                    class=" form-control  @error('number') is-invalid @enderror">
                            </div>
                            <div class="form_item">
                                <textarea name="text" placeholder="Comment"></textarea>
                            </div>
                            <div id="form-msg"></div>
                            <button id="contact-form-submit" type="submit" class="btn btn_dark">Send</button>
                        </form>
                        <div class="from-img text-center">
                            <img width="300" height="300"
                                src="{{ asset('website') }}/asset/images/logo/Cognizant-Logo.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-img">
                        <div class="con-img">
                            <img width="500" height="520"
                                src="{{ asset('website') }}/asset/images/contact-img/pexels-neil-kelly-712618.jpg"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
