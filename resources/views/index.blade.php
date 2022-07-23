@extends('layouts.master')

@section('content')
    {{-- Carousel --}}
    <section class="">
        
            <div id="carouselExampleIndicators" class="carousel carousel-dark slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner" style="max-height: 768px">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="{{ url('img/carousel-1.png') }}" class="d-block w-100 " alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="10000">
                        <img src="{{ url('img/carousel-2.png') }}" class="d-block w-100 " alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="10000">
                        <img src="{{ url('img/carousel-3.png') }}" class="d-block w-100 " alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        
    </section>

    {{-- Brand --}}
    <section class="p-3">
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
    </section>

    {{-- Products --}}
    <section class="">
        <div class="container text-center">
            <h1 class="font-poppins-bold">OUR PRODUCTS</h1>
        </div>
        <section class="p-lg-3 p-sm-1">
            <div class="containter">
                <div class="row justify-content-center">
                    @foreach ($items as $i)
                        <div class="col-6 col-lg-3 text-center">
                            <div class="card h-100 border-0">
                                <img class="img-thumbnail border-0" src="{{ url('img/' . $i->item_img_path) }}"
                                    alt="Card image cap">
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
        </section>
    </section>
@endsection
