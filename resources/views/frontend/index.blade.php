@extends('layouts.front')

@section('title')
    Welcome To E-Shop
@endsection

@section('content')
    @include('layouts.incl.slider')
    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2>Featured Products</h2>
                <div class="owl-carousel featured-carousel owl-theme">
                    
                    @foreach ($featured_products as $prod)
                    
                        <div class="item">
                            <div class="card">
                                <img src="{{asset('assets/uploads/products/'.$prod->image)}}" alt="Product image" height="300px">
                                <div class="card-body">
                                    <h6>{{ $prod->name}}</h6>
                                    <span class="float-start"><s>{{ $prod->original_price}} </s> </span>
                                    <span class="float-end"> {{ $prod->selling_price}} </span>
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
                    
                    @foreach ($trending_category as $tcategory)
                    
                        <div class="item">
                            <a href="{{ url('view-category/'.$tcategory->slug)}}">
                                <div class="card">
                                    <img src="{{asset('assets/uploads/category/'.$tcategory->image)}}" alt="Product image" height="300px">
                                    <div class="card-body">
                                        <h5>{{ $tcategory->name}}</h5>
                                        <p>
                                            {{$tcategory->description}}
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