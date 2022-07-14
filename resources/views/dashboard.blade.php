@extends('layout.main')

@section('content')
     <div class="mb-5">
         <h2 class="fs-? border-1 border-bottom pb-1 pe-2 text-center fw-bold">WELCOME <strong class="ms-2 text-uppercase">{{ auth()->user()->name }}</strong></h2>
     </div>
@endsection
