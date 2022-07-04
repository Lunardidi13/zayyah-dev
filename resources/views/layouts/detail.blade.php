@extends('layouts.master')

@section('content')
    <div class="container text-center">
        <h1>{{ $item->item_name }}</h1>
    </div>
    <div class="card mb-3 border-0">
        <img src="{{ url('img/' . $item->item_img_path) }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Rp. {{$item->item_price_string}}</h5>
            <p class="card-text">{{$item->item_desc}}</p>
            <p class="card-text">{{$item->item_ingredients}}</p>
        </div>
    </div>
@endsection
