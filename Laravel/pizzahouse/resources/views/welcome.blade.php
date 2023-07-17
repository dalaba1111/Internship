@extends('layouts.app')

@section('content')
<div class="content">
    <img src="/img/pizzahouse.png" alt="pizza house logo">
    <div class="title m-b-md">
        The North's Best Pizzas
    </div>
    <p class="mssg">{{ session('mssg') }}</p>
    <a href="/pizzas/create">Order a Pizza</a>
</div>
@endsection
