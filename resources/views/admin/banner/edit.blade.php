@extends('admin.master')
@section('body')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title text-center">Slider Image Edit</h4>
            <hr>
            <form class="form-horizontal p-t-20" action="{{route('save')}}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $slide->id }}">
                <div class="form-group row input-control">
                    <label for="exampleInputuname3" class="col-sm-3 control-label">Banner Text: <span class="red">*</span></label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <input type="text" class="form-control  @error('banner_text') is-invalid @enderror"
                                value="{{ $slide->banner_text }}" name="banner_text" id="exampleInputuname3"
                                placeholder="Banner Text">


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
                            <div class="col-sm-4">
                                <img src="{{ asset($slide->image) }}" height="200px" width="300px" alt="">
                            </div>
                        @error('other_image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row m-b-0">
                    <div class="offset-sm-3 col-sm-9">
                        <button type="submit" class="btn btn-success waves-effect waves-light text-white">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
    
@endsection