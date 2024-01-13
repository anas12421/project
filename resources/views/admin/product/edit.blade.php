@extends('admin.master')
@section('body')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center" style="color: red">Edit Product</h4>
                <hr>
                <form class="form-horizontal p-t-20" action="{{ route('product.save') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $product->id }}">
                    <div class="form-group row">
                        <label for="exampleInputEmail7" class="col-sm-3 control-label">Product Name:</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control @error('product_name') is-invalid @enderror"
                                    name="product_name" value="{{ $product->name }}" id="exampleInputEmail7"
                                    placeholder="Product Name">
                            </div>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="examplfeas" class="col-sm-3 control-label">Price :</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control @error('price') is-invalid @enderror"
                                    name="price" value="{{ $product->price }}" id="examplfeas"
                                    >
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail10" class="col-sm-3 control-label">Product Stock :</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control @error('product_stock') is-invalid @enderror"
                                    name="product_stock" value="{{ $product->product_stock }}" id="exampleInputEmail10"
                                    ">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmailcode" class="col-sm-3 control-label">Product Code :</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control @error('product_code') is-invalid @enderror"
                                    name="product_code" value="{{ $product->product_code }}" id="exampleInputEmailcode"
                                    >
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmailcolor" class="col-sm-3 control-label">Product Color :</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control @error('product_color') is-invalid @enderror"
                                    name="product_color" value="{{ $product->product_color }}" id="exampleInputEmailcolor"
                                    >
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="input-file-now" class="col-sm-3 control-label">Fornt Image :<span
                                style="color: red">*</span></label>
                        <div class="col-sm-4">
                            <input type="file" id="input-file-now" name="image"
                                class="form-control @error('other_image') is-invalid @enderror dropify"  />
                                <div class="col-sm-4">
                                    <img src="{{ asset($product->image) }}" height="200px" width="300px" alt="">
                                </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="input-ffg" class="col-sm-3 control-label">Back Image :<span
                                style="color: red">*</span></label>
                        <div class="col-sm-4">
                            <input type="file" id="input-ffg" name="image_back"
                                class="form-control @error('image_back') is-invalid @enderror dropify"  />
                                <div class="col-sm-4">
                                    <img src="{{ asset($product->image_back) }}" height="200px" width="300px" alt="">
                                </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 control-label">Product Size: </label>
                        <div class="col-sm-9">

                            <input type="checkbox" {{ $product->s == 1 ? 'checked' : '' }} value="1" name="checkbox1" id="styled5"
                                class="form-check-input @error('checkbox') is-invalid @enderror">
                            <label class="form-check-label me-3" for="styled5">S</label>


                            <input type="checkbox" {{ $product->m == 1 ? 'checked' : '' }} value="1" name="checkbox2" id="styled1"
                                class="form-check-input @error('checkbox') is-invalid @enderror">
                            <label class="form-check-label me-3" for="styled1">M</label>


                            <input type="checkbox" {{ $product->l == 1 ? 'checked' : '' }} value="1" name="checkbox3" id="styled2"
                                class="form-check-input @error('checkbox') is-invalid @enderror">
                            <label class="form-check-label me-3" for="styled2">L</label>


                            <input type="checkbox" {{ $product->xl == 1 ? 'checked' : '' }} value="1" name="checkbox4" id="styled3"
                                class="form-check-input @error('checkbox') is-invalid @enderror">
                            <label class="form-check-label me-3" for="styled3">XL</label>


                            <input type="checkbox" {{ $product->xxl == 1 ? 'checked' : '' }} value="1" name="checkbox5" id="styled4"
                                class="form-check-input @error('checkbox') is-invalid @enderror">
                            <label class="form-check-label me-3" for="styled4">XXL</label>
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
