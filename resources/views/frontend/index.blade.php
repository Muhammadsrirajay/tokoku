@extends('layouts.front')

@section('title')
    Welcome To Exa Komputer
@endsection

@section('content')
    <div class="container">
    @include('layouts.inc.slider')
    </div>
    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2>Featured Product</h2>
                <div class="owl-carousel featured-carousel owl-theme">
                        @foreach ($featured_products as $prod)
                            <div class="item">
                                <div class="card">
                                    <img src="{{ asset('assets/uploads/products/'.$prod->image) }}" class="cate-image1" alt="Product Image">
                                    <div class="card-body">
                                        <h5>{{ $prod->name }}</h5>
                                        <span class="float-start">{{ currency_IDR($prod->selling_price) }}</span>
                                        <span class="float-end"><s>{{ currency_IDR($prod->original_price) }}</s></span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2>Trending Category</h2>
                <div class="owl-carousel featured-carousel owl-theme">
                        @foreach ($trending_category as $tcate)
                            <div class="item">
                                <a href="{{ url('view-category/'.$tcate->slug) }}">
                                    <div class="card">
                                        <img src="{{ asset('assets/uploads/category/'.$tcate->image) }}" class="cate-image1" alt="Category Image">
                                        <div class="card-body">
                                            <h5>{{ $tcate->name }}</h5>
                                            <p>
                                                {{ $tcate->description }}
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>

        $('.featured-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            dots:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:4
                }
            }
        })
    </script>
@endsection