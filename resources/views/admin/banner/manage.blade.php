@extends('admin.master')
@section('body')
    <div class="card">
        @include('sweetalert::alert')
        <div class="card-body">
            <h4 class="card-title">Data Table</h4>
            <h6 class="card-subtitle">Data table example</h6>
            <div class="table-responsive m-t-40 ">
                <table id="myTable" class="table table-striped border ">
                    <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>Banner Text</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($slides as $data)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ $data->banner_text }}</td>
                                <td><img src="{{ asset($data->image) }}" alt="" height="60px" width="80px"></td>
                                <td>
                                    <div class="btn-group mt-3">
                                        {{-- <form action="{{route('delete')}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $data->id }}">
                                            <button type="submit" class="btn btn-danger btn-sm m-1"
                                                onclick="return confirm('Are you sure?')">
                                                <i class="ti-trash"></i>
                                            </button>
                                        </form> --}}
                                        <form action="{{route('edit')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $data->id }}">
                                            <button type="submit" class="btn btn-warning btn-sm m-1">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
