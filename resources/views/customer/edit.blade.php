@extends('layout.main')

@section('content') 
    <div class="mb-4 text-center">
        <span class="fs-3 border-1 border-bottom pb-2 pe-3">Update Customer</span> 
    </div>

    <div class="row justify-content-center">
        <div class="col-5">
        <a href="/customer/index" class="btn btn-secondary px-1 mb-3" title="back">Back</a>
            <div class="card">
                <div class="card-body">
                    <form action="/customer/update/{{ $customer->id }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Name :</label>
                        <input type="text" name="nameCustomer" class="form-control" value="{{ $customer->nameCustomer }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email :</label>
                        <input type="text" name="emailCustomer" class="form-control" value="{{ $customer->emailCustomer }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Phone :</label>
                        <input type="text" name="phoneCustomer" class="form-control" value="{{ $customer->phoneCustomer }}">
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <label class="form-lab">Member</label>
                            <input type="checkbox" name="member" class="form-check-input" {{ $customer->member ? 'checked' : '' }}>
                        </div>
                    </div>

                    <div class="d-grid">
                        <button class="btn btn-primary">Update</button>
                    </div>
                    </form>
                </div>     
            </div> 
        </div>
    </div>
@endsection