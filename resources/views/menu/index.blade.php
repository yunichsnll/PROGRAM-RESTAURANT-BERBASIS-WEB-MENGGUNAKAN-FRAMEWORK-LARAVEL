@extends('layout.main')

@section('content') 
    
    <!-- alert menu -->
    @if (session()->has('success'))
    <div class="alert mt-4 alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }} 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> 
    </div>
    @endif

    <div class="mt-3 text-center">
        <h1>Menu Page</h1>
    </div>
    
    <div class="row justify-content-center"> 
        <div class="col-10">
            <a href="/menu/create" class="btn my-4 btn-success btn-sm">
                Create
                <span data-feather="plus"></span>
            </a>
            <table class="table table-responsive table-hover table-striped text-center">
                <thead> 
                    <tr>
                        <th>No</th>
                        <th>Nama Menu</th>
                        <th>Description</th>
                        <th>Foto</th>
                        <th>Harga</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($menus as $menu)
                    
                    <tr>
                        <td>{{ $loop->iteration }}</td> 
                        <td>{{ $menu->nameMenu }}</td>
                        <td>{{ $menu->descMenu }}</td> 
                        {{-- <td><img width="200px" height="150px" src="{{ ($menu->photoMenu) ? asset( "storage/" . $menu->photoMenu ) : "" }}"
                        alt="photo menu" class="img-thumbnail img-fluid"></td> --}}
                        <td>
                            @if(!$menu->photoMenu)
                                <img width="200px" height="150px" alt="photo menu" class="img-thumbnail img-fluid" src="{{ asset( "storage/images/defaultmenu.png" ) }}">
                            @else
                                <img width="200px" height="150px" alt="photo menu" class="img-thumbnail img-fluid" src="{{ asset("storage/" . $menu->photoMenu ) }}">
                            @endif
                        </td>
                        <td>{{ $menu->price }}</td>
                        <td>
                            <a href="/menu/{{ $menu->id }}/edit" class="btn me-1 text-white btn-sm btn-warning">Edit</a>
                            <form action="/menu/{{ $menu->id }}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                            <button type="submit" onclick="return confirm('Sure?')" class="btn me-1 text-white btn-sm btn-danger">Hapus</button>
                            </form>
                            
                        </td>
                    </tr>           
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection