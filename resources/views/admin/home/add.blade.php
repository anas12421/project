@extends('admin.master')
@section('body')
    <style>
        section {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input:hover {
            border: 1px solid black;
        }
    </style>

    <section>
        <hr>
        <form class="form-horizontal p-t-20" action="{{ route('admin.register') }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="col-sm-12">
                    <div class="input-group">
                        <label for="exampleInputuname3" class="col-sm-12">Name : </label>
                        <input type="text" class="form-control  @error('name') is-invalid @enderror"
                            value="{{ old('name') }}" name="name" id="exampleInputuname3">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <div class="input-group">
                        <label for="exampleInputemail" class="col-sm-12">Email : </label>
                        <input type="email" class="form-control  @error('email') is-invalid @enderror"
                            value="{{ old('email') }}" name="email" id="exampleInputemail">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <div class="input-group">
                        <label for="exampleInputupass" class="col-sm-12">Password : </label>
                        <input type="password" class="form-control  @error('password') is-invalid @enderror"
                            value="{{ old('password') }}" name="password" id="exampleInputupass">
                    </div>
                </div>
            </div>

            <div class="form-group text-end">
                {{-- <div class="offset-sm-3 col-sm-12"> --}}
                <button type="submit" class="btn btn-dark">Register</button>
                {{-- </div> --}}
            </div>
        </form>
        <hr>
    </section>
@endsection
