@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <link rel="stylesheet" href="style.css">
                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
                    <link rel="stylsheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
                <div class="container">
                    <h2>New Arrivals</h2>
                    <div class="row"> 
                    <div class="col-md-3">
                    <div class="product-top">
                    <img src="product1.PNG">
                            <div class="overlay"> 
                                <button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye"></i></button>
                                <button type="button" class="btn btn-secondary" title="Add to wishlist"><i class="fa fa-heart"></i></button>
                                <button type="button" class="btn btn-secondary" title="Add to Cart"><i class="fa fa-shopping-cart"></i></button>
                            </div>
                    </div>
                    <div class="product-bottom text-center">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                    <h3>Fitness Watch</h3>
                    <h5>₱2,990</h5>
                    </div>
                    </div>
                    <div class="col-md-3">
                    <div class="product-top">
                    <img src="product2.PNG">
                            <div class="overlay"> 
                                <button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye"></i></button>
                                <button type="button" class="btn btn-secondary" title="Add to wishlist"><i class="fa fa-heart"></i></button>
                                <button type="button" class="btn btn-secondary" title="Add to Cart"><i class="fa fa-shopping-cart"></i></button>
                            </div>
                    </div>
                    <div class="product-bottom text-center">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <h3>Smart Watch</h3>
                    <h5>₱2,999</h5>
                    </div>
                    </div>
                    <div class="col-md-3">
                    <div class="product-top">
                    <img src="product3.PNG">
                            <div class="overlay"> 
                                <button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye"></i></button>
                                <button type="button" class="btn btn-secondary" title="Add to wishlist"><i class="fa fa-heart"></i></button>
                                <button type="button" class="btn btn-secondary" title="Add to Cart"><i class="fa fa-shopping-cart"></i></button>
                            </div>
                    </div>
                    <div class="product-bottom text-center">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                    <h3>Formal Shoes</h3>
                    <h5>₱3,455</h5>
                    </div>
                    </div>
                    <div class="col-md-3">
                    <div class="product-top">
                    <img src="product4.PNG">
                            <div class="overlay"> 
                                <button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye"></i></button>
                                <button type="button" class="btn btn-secondary" title="Add to wishlist"><i class="fa fa-heart"></i></button>
                                <button type="button" class="btn btn-secondary" title="Add to Cart"><i class="fa fa-shopping-cart"></i></button>
                            </div>
                    </div>
                    <div class="product-bottom text-center">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <h3>Leather Watch</h3>
                    <h5>₱4,650</h5>
                    </div>
                    </div>
                    <div class="col-md-3">
                    <div class="product-top">
                    <img src="product5.jpg">
                            <div class="overlay"> 
                                <button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye"></i></button>
                                <button type="button" class="btn btn-secondary" title="Add to wishlist"><i class="fa fa-heart"></i></button>
                                <button type="button" class="btn btn-secondary" title="Add to Cart"><i class="fa fa-shopping-cart"></i></button>
                            </div>
                    </div>
                    <div class="product-bottom text-center">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <h3>Skinny jeans</h3>
                    <h5>₱250</h5>
                    </div>
                    </div>
                    <div class="col-md-3">
                    <div class="product-top">
                    <img src="product6.jpg">
                            <div class="overlay"> 
                                <button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye"></i></button>
                                <button type="button" class="btn btn-secondary" title="Add to wishlist"><i class="fa fa-heart"></i></button>
                                <button type="button" class="btn btn-secondary" title="Add to Cart"><i class="fa fa-shopping-cart"></i></button>
                            </div>
                    </div>
                    <div class="product-bottom text-center">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <h3>Ripped jeans</h3>
                    <h5>₱650</h5>
                    </div>
                    </div>

                    </div>

                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('products.create') }}">
                        Add New
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                @include('products.table')

                <div class="card-footer clearfix float-right">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

