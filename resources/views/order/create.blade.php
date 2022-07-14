@extends ('layout.main')

@section ('content') 
    <div class="mb-4 text-center">
        <span class="fs-3 border-1 border-bottom pb-2 pe-3">Create order</span> 
    </div>

    <div class="row justify-content-center">
        <div class="col-5">
            <a href="/order/index" class="btn btn-secondary btn-sm mb-3" title="back">Back</a>
            <div class="card">
                <div class="card-body">                
                    <form action="/order/store" method="POST">
                        @csrf
                        <div class="mb-3"> 
                            <label class="form-label">Customer :</label>
                            <select name="customerId" class="form-select mb-2"> 
                                <option></option>
                                @foreach ($customer as $c)
                                    <option value="{{ $c->id }}">{{ $c->nameCustomer }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 menu-container">
                            <label class="form-label">Menu : </label> 
                            <button class="btn btn-info btn-sm btn-add-menu mb-2" type="button">Tambah Menu</button>
                            <div class="input-group mb-1 menu"> 
                                <select name="menuId[]" class="form-select">
                                    <option></option>
                                    @foreach ($menu as $m)
                                        <option value="{{ $m->id }}">{{ $m->nameMenu }}</option>
                                    @endforeach
                                </select>
                                <input type="number" name="quantity[]" class="form-control" placeholder="Quantity" value="1">
                                <a class="btn btn-secondary"></a>
                            </div>
                        </div>
                        
                        <div class="d-grid">
                            <button class="btn btn-sm btn-primary">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('.btn-add-menu').click(function() { 
            $('.menu-container').append(menu())
        })

        $(document).on('click', '.btn-delete-menu', function() { 
            $(this).closest('.menu').remove()
        })
        
        function menu() {
            return `<div class="input-group mb-1 menu">
                        <select name="menuId[]" class="form-select">
                        <option></option>
                        @foreach ($menu as $m)
                            <option value="{{ $m->id }}">{{ $m->nameMenu }}</option>
                        @endforeach
                        </select>
                        <input type="number" name="quantity[]" class="form-control" placeholder="Quantity" value="1"> 
                        <a class="btn btn-danger btn-delete-menu"></a>
                    </div>`
        }
    </script>
@endsection