@extends('layout.main')

@section('content') 

    <div class="mb-4 text-center">
        <span class="fs-3 border-1 border-bottom pb-2 pe-3">Edit order</span>
    </div> 

    <div class="row justify-content-center">
        <div class="col-5">
		    <a href="/order/index" class="btn btn-secondary btn-sm mb-3" title="back">Back</a>
            <div class="card">
                <div class="card-body">
                    <form action="/order/update/{{$order->id}}" method="POST">
                    @csrf                          
                    <div class="form-group">
                        <label for="formGroupExampleInput">Customer:</label>
                        <select name="customerId" class="form-select mb-2"> 
                            @foreach($customer as $c)
                            @if ($order->customerId == $c->id)
                                <option value="{{$c->id}}" selected>{{$c->nameCustomer}}</option>
                            @else
                                <option value="{{$c->id}}">{{$c->nameCustomer}}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3 menu-container">
							<label class="form-label">Menu : </label>
							<button class="btn btn-info btn-sm btn-add-menu mb-2" type="button">Tambah Menu</button>
							@foreach ($order->orderItem as $key => $orderItem)
								<div class="input-group mb-1 menu">
									<select name="menuId[]" class="form-select">
										<option></option>
										@foreach ($menu as $m)
											@if ($orderItem->menuId == $m->id)
												<option value="{{ $m->id }}" selected>{{ $m->nameMenu }}</option>
											@else
												<option value="{{ $m->id }}">{{ $m->nameMenu }}</option>
											@endif
										@endforeach
									</select>
									<input type="number" name="quantity[]" class="form-control" placeholder="Quantity" value="{{ $orderItem->quantity }}">
										@if ($key==0)
											<a class="btn_secondary"></a>
										@else
											<a class="btn btn-danger btn-delete-menu"></a>
										@endif
								</div>			
							@endforeach
						</div>
                            
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
                    </div>
                </form>
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
									<option value="{{$m->id}}">{{$m->nameMenu}}</option>
									@endforeach
								</select>
								<input type="number" name="quantity[]" class="form-control" placeholder="Qty" value="1">
								<a class="btn btn-secondary btn-delete-menu"></a>
							</div>`
		}
	</script>
@endsection