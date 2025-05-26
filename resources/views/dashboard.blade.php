@extends('layouts.app')

@section('content')
<div class="text-center py-5">
<<<<<<< HEAD
    <h2 class="display-4 mb-4">@lang("Welcome")</h2>
    <p class="lead mb-4">@lang("Slogon")</p>
    <div class="d-flex justify-content-center gap-3">
        <a href="/customers" class="btn btn-primary btn-lg shadow-sm">@lang("List of Customers")</a>
        <a href="/suppliers" class="btn btn-success btn-lg shadow-sm">{{ __("List of Suppliers") }}</a>
        <a href="{{ route('products.index') }}" class="btn btn-info btn-lg shadow-sm">{{ trans("List of Products") }}</a>
        <a href="/products-by-category" class="btn btn-warning btn-lg shadow-sm">Products by Category</a>
        <a href="/products-by-supplier" class="btn btn-secondary btn-lg shadow-sm">Products by Supplier</a>
        <a href="/products-by-store" class="btn btn-dark btn-lg shadow-sm">Products by Store</a>
        <a href="{{ route('orders.index') }}" class="btn btn-danger btn-lg shadow-sm">Orders by Customer</a>
=======
    <h2 class="display-4 mb-4">Welcome to Stock Management System</h2>
    <p class="lead mb-4">Manage your inventory and customers efficiently</p>
    <div class="d-flex justify-content-center gap-3">
        <a href="{{ route('customers.index') }}" class="btn btn-primary btn-lg shadow-sm">List of Customers</a>
        <a href="/suppliers" class="btn btn-success btn-lg shadow-sm">List of Suppliers</a>
        <a href="/products" class="btn btn-info btn-lg shadow-sm">List of Products</a>
        <a href="/products-by-category" class="btn btn-warning btn-lg shadow-sm">Products by Category</a>
        <a href="/products-by-supplier" class="btn btn-secondary btn-lg shadow-sm">Products by Supplier</a>
        <a href="/products-by-store" class="btn btn-dark btn-lg shadow-sm">Products by Store</a>
        <a href="/orders" class="btn btn-danger btn-lg shadow-sm">Orders by Customer</a>
>>>>>>> 538171d31a2abcefb97a2a68dc6f9744aa14f19b
    </div>
</div>
@endsection
