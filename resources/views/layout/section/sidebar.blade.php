<!-- Sidebar -->
<div id="sidebar-wrapper">
     <div class="sidebar-heading text-center primary-text fw-bold text-uppercase border-bottom">
         <img src="/img/logoo.png" style="width: 135px; height: 130px;">
     </div>
     <center class="border-bottom sidebar-heading text-uppercase">
     <strong class="ms-3">{{ auth()->user()->name }}</strong>
     </center>
    <div class="list-group list-group-flush my-3">
         <a href="/dashboard" class="list-group-item list-group-item-action bg-transparent second-text fw-bold {{ Request::is('dashboard*') ? 'active' : 'text-white' }}">Dashboard</a>
         <a href="/customer/index" class="list-group-item list-group-item-action bg-transparent second-text fw-bold {{ Request::is('customer*') ? 'active' : 'text-white' }}">Customer</a>
         @if (auth()->user()->role == 'admin')
         <a href="/menu" class="list-group-item list-group-item-action bg-transparent second-text fw-bold {{ Request::is('menu*') ? 'active' : 'text-white' }}">Menu</a>
         @endif
         <a href="/order/index" class="list-group-item list-group-item-action bg-transparent second-text fw-bold {{ Request::is('order*') ? 'active' : 'text-white' }}">Order</a>
     </div>
</div> 
        