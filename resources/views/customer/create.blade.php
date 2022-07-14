@extends('layout.main')

@section('content') 
    <div class="mb-4 text-center">
        <span class="fs-3 border-1 border-bottom pb-2 pe-3">Create customer</span> 
    </div>
        
    <div class="row justify-content-center">
        <div class="col-5">
        <a href="/customer/index" class="btn btn-secondary px-1 mb-3" title="back">Back</a>
            <div class="card">
                <div class="card-body">
                    <form action="/customer/store" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Name :</label> 
                            <input type="text" name="nameCustomer" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email :</label>
                            <input type="text" name="emailCustomer" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone :</label> 
                            <input type="text" name="phoneCustomer" class="form-control">
                        </div>
                        <div class="mb-3">
                            <div class="form-check"> <label class="form-lab">Member</label>
                            <input type="checkbox" name="member" value="1" class="form-check-input">
                        </div>
                    </div>
                    <div class="d-grid"> 
                        <button class="btn btn-primary">Create</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div> 
@endsection