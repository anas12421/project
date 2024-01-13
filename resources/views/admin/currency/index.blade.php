@extends('admin.master')
@section('body')
    <div class="card">
        @include('sweetalert::alert')
        <div class="card-body">
            <h4 class="card-title">Data Table</h4>
            <h6 class="card-subtitle">Data table example</h6>
            <div class="table-responsive m-t-40 ">
                <form action="{{route('currency.save')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <table id="myTable" class="table table-striped border ">
                        <thead>
                            <tr>
                                <th class="text-center">USD</th>
                                <th class="text-center">EUR</th>
                                <th class="text-center">GEP</th>
                                <th class="text-center">AUD</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($currencies as $currency)
                                <tr>
                                    <input type="text" hidden name="id" value="{{$currency->id}}">
                                    <td class="text-center">1 $</td>
                                    <td class="text-center"><input type="text" name="EUR" value="{{$currency->EUR}}"></td>
                                    <td class="text-center"><input type="text" name="GEP" value="{{$currency->GEP}}"></td>
                                    <td class="text-center"><input type="text" name="AUD" value="{{$currency->AUD}}"></td>
                                    <td class="text-center"><button class="btn btn-success">Update</button></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </form>
                
            </div>
        </div>
    </div>
@endsection
