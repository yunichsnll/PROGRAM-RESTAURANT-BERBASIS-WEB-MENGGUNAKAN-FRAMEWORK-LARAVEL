@extends('layout.main')

@section('content') 
                        <div class="mb-5 text-center">
                            <span class="fs-3 border-1 border-bottom pb-2 pe-3">Customer page</span>
                        </div>

                        @if (session('success'))
                        <p class="text-success">{{ session('success') }}</p>
                        @endif

                        <div class="row justify-content-center">
                           <div class="col-10">
                               <a href="/customer/create" class="btn btn-success btn-sm mb-2">Create</a>                           
                               <table class="table table-striped text-center">
                                    <thead>
                                        <tr>
                                            <th>No</th> 
                                            <th>Nama</th> 
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($customers as $customer)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $customer->nameCustomer }}</td>
                                            <td>
                                                <a href="/customer/edit/{{ $customer->id }}" class="btn me-1 text-white btn-sm btn-warning">Edit</a>
                                                <a href="/customer/destroy/{{ $customer->id }}" class="btn me-1 text-white btn-sm btn-danger" onclick="return confirm('Sure?')">Harus</a>
                                            </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                               </table>
                            </div>
                        </div>
@endsection