@extends('admin.master')
@section('body')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center red">Edit Order Form</h4>
                <hr>
                <form class="form-horizontal p-t-20" action="{{ route('admin.order-update') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $ordersEdit->id }}">
                    <div class="form-group row">
                        <label for="exampleInputEmail8" class="col-sm-3 control-label">Order Id:</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control @error('product_code') is-invalid @enderror"
                                    name="product_code" value="{{ $ordersEdit->id }}" id="exampleInputEmail8"
                                    placeholder="Product Code">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail8" class="col-sm-3 control-label">Order Total:</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control @error('product_code') is-invalid @enderror"
                                    name="product_code" value="{{ $ordersEdit->order_total }}" id="exampleInputEmail8"
                                    placeholder="Product Code">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail8" class="col-sm-3 control-label">Order status:</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <select class="form-control" name="order_status">
                                    <option value="Pending" {{$ordersEdit->order_status == 'Pending'? 'selected' : ''}}>Pending</option>
                                    <option value="Processing" {{$ordersEdit->order_status == 'Processing'? 'selected' : ''}}>Processing</option>
                                    <option value="Complete" {{$ordersEdit->order_status == 'Complete'? 'selected' : ''}}>Complete</option>
                                    <option value="Cencel" {{$ordersEdit->order_status == 'Cencel'? 'selected' : ''}}>Cencel</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="examplEmail8" class="col-sm-3 control-label">Delivery status:</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <select class="form-control" name="delivery_status">
                                    <option value="Pending" {{$ordersEdit->delivery_status    == 'Pending'? 'selected' : ''}}>Pending</option>
                                    <option value="Processing" {{$ordersEdit->delivery_status == 'Processing'? 'selected' : ''}}>Processing</option>
                                    <option value="Complete" {{$ordersEdit->delivery_status   == 'Complete'? 'selected' : ''}}>Complete</option>
                                    <option value="Cencel" {{$ordersEdit->delivery_status     == 'Cencel'? 'selected' : ''}}>Cencel</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmailu" class="col-sm-3 control-label">Delivery Address:</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" class="form-control @error('product_code') is-invalid @enderror"
                                    name="delivery_address" value="{{ $ordersEdit->delivery_address }}" id="exampleInputEmailu"
                                    placeholder="Product Code">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row m-b-0">
                        <div class="offset-sm-3 col-sm-9">
                            <button type="submit" class="btn btn-success waves-effect waves-light text-white">Update
                                Order</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
