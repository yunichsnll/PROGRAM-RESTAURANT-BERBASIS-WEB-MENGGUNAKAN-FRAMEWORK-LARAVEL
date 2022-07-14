@extends('layout.main')

@section('content') 
    <div class="mb-5 text-center">
        <span class="fs-3 border-1 border-bottom pb-2 pe-3">Order page</span> 
    </div>

    @if (session('success'))
        <div class="my-1"> 
            <span class="text-white bg-success">{{ session('success') }}</span>
        </div>
    @endif
    
    <div class="row  justify-content-center">
        <div class="col-10">
            <a href="/order/create" class="btn btn-success btn-sm mb-2">Create</a>
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Code</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order as $o)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $o->customer->nameCustomer }}</td> 
                            <td>{{ $o->code }}</td>
                            <td>
                                <a href="/order/show/{{ $o->id }}" class="btn me-1 text-white btn-sm btn-info">Show</a>
                                <a href="/order/edit/{{ $o->id }}" class="btn me-1 text-white btn-sm btn-warning">Edit</a> 
                                <a href="/order/destroy/{{ $o->id }}" class="btn me-1 text-white btn-sm btn-danger" onclick="return confirm('Sure?')">Hapus</a>
                            </td>
                        </tr>
                    @endforeach 
                </tbody>
            </table>
        </div>
    </div>
@endsection