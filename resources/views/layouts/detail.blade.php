@extends('layouts.master')

@section('content')
    <div class="container text-center">
        <h1>{{ $item->item_name }}</h1>
    </div>
    <div class="card mb-3 border-0">
        <img src="{{ url('img/' . $item->item_img_path) }}" class="mx-auto d-block" alt="..." height="300vh">
        <div class="card-body">
            <h5 class="card-title">Rp. {{ $item->item_price_string }}</h5>
            <p class="card-text">{{ $item->item_desc }}</p>
            <p class="card-text">{{ $item->item_ingredients }}</p>
        </div>
    </div>
    <div class="container p-3">
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Ingredients
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        List bahan yang digunakan.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Manfaat
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        List manfaat yang akan dirasakan.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Aturan Pemakaian
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        List cara pemakaian.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
