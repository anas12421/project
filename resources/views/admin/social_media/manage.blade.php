@extends('admin.master')
@section('body')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title text-center">Social Media</h4>
            <hr>
            <form class="form-horizontal p-t-20" action="{{route('media.save')}}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $media->id }}">
                <div class="form-group row input-control">
                    <label for="exampleInputuname3" class="col-sm-3 control-label">Instagram Link: </label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <input type="text" class="form-control  @error('instagram') is-invalid @enderror"
                                value="{{ $media->instagram }}" name="instagram" id="exampleInputuname3"
                               >
                        </div>
                        <div class="error"></div>
                    </div>
                </div>
                <div class="form-group row input-control">
                    <label for="examplfdc" class="col-sm-3 control-label">facebook Link: </label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <input type="text" class="form-control  @error('fb') is-invalid @enderror"
                                value="{{ $media->fb }}" name="fb" id="examplfdc"
                               >
                        </div>
                        <div class="error"></div>
                    </div>
                </div>
                <div class="form-group row input-control">
                    <label for="dhfggfjj" class="col-sm-3 control-label">Youtube Link: </label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <input type="text" class="form-control  @error('youtebe') is-invalid @enderror"
                                value="{{ $media->youtube }}" name="youtube" id="dhfggfjj"
                               >
                        </div>
                        <div class="error"></div>
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