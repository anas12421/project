@extends('admin.master')
@section('body')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title text-center">Journey to IFMH</h4>
            <hr>
            <form class="form-horizontal p-t-20" action="{{route('journey.save')}}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="form-group row input-control">
                    <label for="exampleInputuname3" class="col-sm-3 control-label">Date : <span class="red">*</span></label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <input type="text" class="form-control  @error('date') is-invalid @enderror"
                                value="{{ old('date') }}" name="date" id="exampleInputuname3"
                                placeholder="November 2017">
                        </div>
                        <div class="error"></div>
                    </div>
                </div>
                <div class="form-group row input-control">
                    <label for="exdfbfdb" class="col-sm-3 control-label">Text : <span class="red">*</span></label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <input type="text" class="form-control  @error('journey_text') is-invalid @enderror"
                                value="{{ old('journey_text') }}" name="journey_text" id="exdfbfdb"
                                placeholder="journey Text">
                        </div>
                        <div class="error"></div>
                    </div>
                </div>
                <div class="form-group row input-control">
                    <label for="exddgvsg5" class="col-sm-3 control-label">Link : <span class="red">*</span></label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <input type="text" class="form-control  @error('link') is-invalid @enderror"
                                value="{{ old('link') }}" name="link" id="exddgvsg5"
                                placeholder="Link">
                        </div>
                        <div class="error"></div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="input-file-now" class="col-sm-3 control-label">Image :<span
                            style="color: red">*</span></label>
                    <div class="col-sm-4">
                        <input type="file" id="input-file-now" name="image"
                            class="form-control @error('other_image') is-invalid @enderror dropify"
                            accept="image/*" />
                        @error('other_image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row m-b-0">
                    <div class="offset-sm-3 col-sm-9">
                        <button type="submit" class="btn btn-success waves-effect waves-light text-white">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
    
@endsection