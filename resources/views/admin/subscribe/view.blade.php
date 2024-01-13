@extends('admin.master')
@section('body')
    <div class="card">
        @include('sweetalert::alert')
        <div class="card-body">
            <h4 class="card-title">Message</h4>
            {{-- <h6 class="card-subtitle">Data table example</h6> --}}
            <div class="table-responsive m-t-40 ">
                <table id="myTable" class="table table-striped border ">
                    <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Subscribes as $message)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ $message->email }}</td>
                                <td>
                                    <div class="btn-group mt-3">
                                        <form action="{{route('Subscribe.delete')}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $message->id }}">
                                            <button type="submit" class="btn btn-danger btn-sm m-1"
                                                onclick="return confirm('Are you sure?')">
                                                <i class="ti-trash"></i>
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
