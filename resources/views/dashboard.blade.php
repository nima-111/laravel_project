@extends('layouts.app')

@section('content')
<div class="text-center py-5">
    <h2 class="display-4 mb-4">@lang("Welcome")</h2>
    <p class="lead mb-4">@lang("Slogon")</p>


    <div class="container">
        <div class="row g-3">
            <div class="col-md-3">
                <a href="/customers" class="btn bg-primary text-white btn-lg w-100">List of Customers</a>
            </div>
            <div class="col-md-3">
                <a href="/suppliers" class="btn bg-info text-white btn-lg w-100">List of Suppliers</a>
            </div>
            <div class="col-md-3">
                <a href="{{ route('products.index') }}" class="btn bg-gradient text-white btn-lg w-100" style="background-color: #6610f2;">List of Products</a>
            </div>
            <div class="col-md-3">
                <a href="/products-by-category" class="btn bg-gradient text-white btn-lg w-100" style="background-color: #d63384;">Products by Category</a>
            </div>

            <div class="col-md-3">
                <a href="/products-by-supplier" class="btn bg-primary text-white btn-lg w-100">Products by Supplier</a>
            </div>
            <div class="col-md-3">
                <a href="/products-by-store" class="btn bg-info text-white btn-lg w-100">Products by Store</a>
            </div>
            <div class="col-md-3">
                <a href="{{ route('orders.index') }}" class="btn text-white btn-lg w-100" style="background-color:#6610f2;">Orders details by customer</a>
            </div>
            <div class="col-md-3">
                <a href="{{ route('ordered.products') }}" class="btn text-white btn-lg w-100" style="background-color:#d63384;">View Ordered Products</a>
            </div>

            <div class="col-md-3">
                <a href="{{ route('same.products.customers') }}" class="btn bg-primary text-white btn-lg w-100">Customers Who Ordered the Same Products</a>
            </div>
            <div class="col-md-3">
                <a href="{{ route('products.orders_count') }}" class="btn bg-info text-white btn-lg w-100">Orders per Product</a>
            </div>
            <div class="col-md-3">
                <a href="{{ route('products.more_than_6_orders') }}" class="btn text-white btn-lg w-100" style="background-color:#6610f2;">Products with >6 Orders</a>
            </div>
            <div class="col-md-3">
                <a href="{{ route('orders.totals') }}" class="btn text-white btn-lg w-100" style="background-color:#d63384;">Total Amount per Order</a>
            </div>

            <div class="col-md-3">
                <a href="{{ route('orders.greater_than_60') }}" class="btn bg-primary text-white btn-lg w-100">Orders > 60</a>
            </div>
            <div class="col-md-3">
                <a href="{{ route('customers.orders') }}" class="btn bg-info text-white btn-lg w-100">Clients per Order</a>
            </div>
            <div class="col-md-3">
                <a href="{{ route('suppliers.products') }}" class="btn text-white btn-lg w-100" style="background-color:#6610f2;">Suppliers for Tracy Ryan</a>
            </div>
            <div class="col-md-3">
                <a href="{{ route('products.same_stores') }}" class="btn text-white btn-lg w-100" style="background-color:#d63384;">Same Stores as Laura Bosco</a>
            </div>

            <div class="col-md-3">
                <a href="{{ route('products.countbystore') }}" class="btn bg-primary text-white btn-lg w-100">Product Count by Store</a>
            </div>
            <div class="col-md-3">
                <a href="{{ route('store.value') }}" class="btn bg-info text-white btn-lg w-100">Store Value</a>
            </div>
            <div class="col-md-3">
                <a href="{{ route('sotre.greater_than_lind') }}" class="btn text-white btn-lg w-100" style="background-color:#6610f2;">Stores > Rice LLC</a>
            </div>
            <br><br><br>

<div class="justify-content-center gap-3">
        <div>
            <h1>
                Hello
                @if(Cookie::has("UserName"))
                        {{Cookie::get("UserName")}}
                @endif
            </h1>
        </div>
        <div>
            <form method="POST" action="saveCookie">
                @csrf
                <label for="txtCookie">{{__('Type your name')}}</label>
                <input type="text" id = "txtCookie" name = "txtCookie" />
                <button class="btn btn-primary bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    {{__('Save Cookie') }}
                </button>
            </form>
        </div>
    </div>

<br><br><br><br>
<div>
            <div>
                <h1>
                    Hello
                    @if(Session::has("SessionName"))
                            {{Session("SessionName")}}
                    @endif
                </h1>
            </div>
            <div>
                <form method="POST" action="saveSession">
                    @csrf
                    <label for="txtSession">{{__('Type your name')}}</label>
                    <input type="text" id = "txSession" name = "txtSession" />
                    <button class="btn btn-primary bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        {{__('Save Session') }}
                    </button>
                </form>
            </div>
    </div>

    <br><br><br>
    <div>
        <form method="POST" action="saveAvatar"  enctype="multipart/form-data" >
            @csrf
            <label for="avatarFile">@lang('Choose your picture')</label>
            <input type="file" id = "avatarFile"  name = "avatarFile" />
            <button class="btn btn-primary bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                {{__('Save picture') }} {{ trans("for your account") }}
            </button>
            {{--  il faut executer php artisan storage:link pour assosier le racourcis storage --}}
            <img style = "width:200px; border-radius:50%" src="{{"storage/avatars/".$pic}}" alt="">
        </form>
    </div>
        </div>
    </div>

    {{-- Include the category chart partial --}}
@include('partials._category_chart')
@include('partials._store_chart')
</div>
@endsection
