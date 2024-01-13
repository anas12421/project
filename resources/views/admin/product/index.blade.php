@extends('admin.master')
@section('body')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center">Add Product</h4>
                <hr>
                <form class="form-horizontal p-t-20" action="{{ route('product.save') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="exampleInputEmail7" class="col-sm-3 control-label">Product Name:</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control @error('product_name') is-invalid @enderror"
                                    name="product_name" value="{{ old('product_name') }}" id="exampleInputEmail7"
                                    placeholder="Product Name">
                                @error('product_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="examplfeas" class="col-sm-3 control-label">Price :</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control @error('price') is-invalid @enderror"
                                    name="price" value="{{ old('price') }}" id="examplfeas"
                                    placeholder="Product Stock Amount">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail10" class="col-sm-3 control-label">Product Stock :</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control @error('product_stock') is-invalid @enderror"
                                    name="product_stock" value="{{ old('product_stock') }}" id="exampleInputEmail10"
                                    placeholder="Product Stock">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exam562" class="col-sm-3 control-label">Product Code :</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control @error('product_code') is-invalid @enderror"
                                    name="product_code" value="{{ old('product_code') }}" id="exam562"
                                    placeholder="Product Code">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exam562color" class="col-sm-3 control-label">Product Color :</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control @error('product_color') is-invalid @enderror"
                                    name="product_color" value="{{ old('product_color') }}" id="exam562color"
                                    placeholder="Product Color">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="input-file-now" class="col-sm-3 control-label"> Fornt Image :<span
                                style="color: red">*</span></label>
                        <div class="col-sm-4">
                            <input type="file" id="input-file-now" name="image"
                                class="form-control @error('other_image') is-invalid @enderror dropify" accept="image/*" />
                            @error('other_image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputdg" class="col-sm-3 control-label"> Back Image :<span
                                style="color: red">*</span></label>
                        <div class="col-sm-4">
                            <input type="file" id="inputdg" name="image_back"
                                class="form-control @error('image_back') is-invalid @enderror dropify" accept="image/*" />
                            @error('image_back')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 control-label">Product Size: </label>
                        <div class="col-sm-9">

                            <input type="checkbox" value="1" name="checkbox1" id="styled5"
                                class="form-check-input @error('checkbox') is-invalid @enderror">
                            <label class="form-check-label me-3" for="styled5">S</label>


                            <input type="checkbox" value="1" name="checkbox2" id="styled1"
                                class="form-check-input @error('checkbox') is-invalid @enderror">
                            <label class="form-check-label me-3" for="styled1">M</label>


                            <input type="checkbox" value="1" name="checkbox3" id="styled2"
                                class="form-check-input @error('checkbox') is-invalid @enderror">
                            <label class="form-check-label me-3" for="styled2">L</label>


                            <input type="checkbox" value="1" name="checkbox4" id="styled3"
                                class="form-check-input @error('checkbox') is-invalid @enderror">
                            <label class="form-check-label me-3" for="styled3">XL</label>


                            <input type="checkbox" value="1" name="checkbox5" id="styled4"
                                class="form-check-input @error('checkbox') is-invalid @enderror">
                            <label class="form-check-label me-3" for="styled4">XXL</label>
                        </div>
                    </div>

                    <div class="form-group row m-b-0">
                        <div class="offset-sm-3 col-sm-9">
                            <button type="submit"
                                class="btn btn-success waves-effect waves-light text-white">Add</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
