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
    <div class="container text-center">
        <h1 class="font-poppins-bold">OUR PRODUCTS</h1>
    </div>
    <div class="containter">
        <div class="row justify-content-around">
            @foreach ($items as $i)
                <div class="col-6 col-lg-4 text-center">
                    <div class="card h-100 border-0">
                        <img class="img-thumbnail border-0" src="{{ url('img/' . $i->item_img_path) }}" alt="Card image cap">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h5 class="card-title">{{ $i->item_name }}</h5>
                            <p class="card-text">{{ $i->item_desc }}</p>
                            <div class="container">
                                <a href="item/detail/{{ $i->item_id }}" class="btn btn-dark">View Product</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
