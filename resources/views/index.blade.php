@extends('layouts.master')

@section('content')
    <div class="container text-center">
        <h1>Zayya</h1>
        <p>Skin Care Products</p>
        <div class="container">
            <p>
                For active women who wants their skin to feel amazing through out the day.
                Zayya provides you skincare line that contains high quality natural extract
                combining with potent active ingredients for your beautiful lifestyle ; offering
                luxurious, health, fresh, and rejuvinated skin at a much fairer price
            </p>
        </div>
    </div>
    <div class="container">
        <h2 class="text-center">OUR PRODUCTS</h2>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @foreach ($items as $i)
                <div class="col">
                    <div class="card text-center border-0" >
                        <img src="{{ url('img/'.$i->item_img_path) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$i->item_name}}</h5>
                            <p class="card-text">{{$i->item_desc}}</p>
                            <div class="container">
                                <a class="btn btn-dark" href="item/detail/{{$i->item_id}}" role="button">View Product</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
