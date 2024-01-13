@extends('admin.master')
@section('body')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center" style="color: red">Mission Edit</h4>
                <hr>
                <form class="form-horizontal p-t-20" action="{{ route('mission.save') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $slide->id }}">
                    <div class="form-group row">
                        <label for="exampleInputEmail5" class="col-sm-3 control-label ">Mission Text :<span style="color: red">*</span></span></label>
                        <div class="col-sm-9">
                            <div class="form-group">
                                <textarea class="textarea_editor form-control @error('mission_text') is-invalid @enderror" rows="15" name="mission_text"
                                    id="exampleInputEmail5" placeholder="Description">{{$slide->mission_text}} </textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="input-file-now" class="col-sm-3 control-label">Image :<span
                                style="color: red">*</span></label>
                        <div class="col-sm-4">
                            <input type="file" id="input-file-now" name="image"
                                class="form-control @error('image') is-invalid @enderror dropify" />
                            <div class="col-sm-4">
                                <img src="{{ asset($slide->image) }}" height="200px" width="300px" alt="">
                            </div>
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row m-b-0">
                        <div class="offset-sm-3 col-sm-9">
                            <button type="submit"
                                class="btn btn-success waves-effect waves-light text-white">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
