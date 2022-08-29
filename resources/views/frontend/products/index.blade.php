@extends('layouts.front')

@section('title')
{{ $category->name }}
@endsection

@section('content')

<div class="py-3 mb-4  col-lg-10 offset-lg-1 shadow-sm bg-secondary bg-gradient text-light border-top">
    <div class="container">
        <h6 class="mb-0">Collections / {{ $category->name }}</h6>
    </div>
</div>
    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2>{{ $category->name }}</h2>
                        @foreach ($products as $prod)
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <a href="{{ url('category/'.$category->slug.'/'.$prod->slug) }}">
                                        <img src="{{ asset('assets/uploads/products/'.$prod->image) }}" class="cate-image1" alt="Category Image">
                                        <div class="card-body">
                                            <h5>{{ $prod->name }}</h5>
                                            <span class="float-start">{{ currency_IDR($prod->selling_price) }}</span>
                                            <span class="float-end"><s>{{ currency_IDR($prod->original_price) }}</s></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
    @endsection