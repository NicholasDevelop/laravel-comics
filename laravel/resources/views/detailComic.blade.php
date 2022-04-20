@extends('layouts/standard');

@section('metaTitle',$comic['title'])



@section('content')

<section class="blue-banner">
    <div class="container-detail-comic">
        <img src="{{ $comic['thumb'] }}" alt="" class="img-detail-comic">
    </div>
</section>

<section class="main-detail-comic">
    <div class="container-detail-comic">
        <h4>Advertisement</h4>
        <div class="sub-container-detail-comic">
            <div class="comic-information">
                <h1>{{ $comic['title'] }}</h1>
                <div class="available-comic">
                    <div class="available-price">
                        <p class="available-price-left">U.S. Price: <span>{{$comic['price']}}</span> </p>
                        <p class="available-price-right">Available</p>
                    </div>
                    <div class="available-comic-status">
                        <select name="available" id="available">
                            <option value="check">Check Avaliability</option>
                            <option value="yes">Available</option>
                            <option value="no">Not Available</option>
                        </select>
                    </div>
                </div>
                <p>{{ $comic['description'] }}</p>
            </div>
            <img src="{{asset('img/show.jpg')}}" alt="">
        </div>
    </div>
</section>

<section class="detail-comic">
    <div class="container-detail-comic">
        <div class="talent-comic">
            <h3>Talent</h3>
            <div class="art-talent">
                <h5>Art by:</h5>
                <div>
                    @foreach($comic['artists'] as $key => $value)
                        <a href="#">{{ $value }}</a>
                        @if( $key != count( $comic['artists']) -1 )
                            <span>, </span>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="written-talent">
                <h5>Written by:</h5>
                <div>
                    @foreach($comic['writers'] as $key => $value)
                        <a href="#">{{ $value }}</a>
                        @if( $key != count( $comic['writers']) -1 )
                            <span>, </span>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>

        <div class="specs-comic">
            <h3>Specs</h3>
            <div class="series-specs">
                <h5>Series:</h5>
                <a href="" class="uppercase">{{ $comic['series'] }}</a>
            </div>
            <div class="price-specs">
                <h5>U.S. Price:</h5>
                <p>{{ $comic['price'] }}</p>
            </div>
            <div class="sale-date-specs">
                <h5>On Sale Date:</h5>
                <p>{{ $comic['sale_date'] }}</p>
            </div>
        </div>
    </div>
</section>

<section class="nav-comic">
    <div class="container-detail-comic">
        <div class="digital">
            <h3 class="uppercase">Digital Comics</h3>
            <img src="/img/cta-icons.png" alt="">
        </div>

        <div class="shop">
            <h3 class="uppercase">Shop Dc</h3>
            <img src="/img/cta-icons.png" alt="">
        </div>

        <div class="locator">
            <h3 class="uppercase">Comic Shop Locator</h3>
            <img src="/img/cta-icons.png" alt="">
        </div>

        <div class="subscription">
            <h3 class="uppercase">Subscription</h3>
            <img src="/img/cta-icons.png" alt="">
        </div>
    </div>
</section>

@endsection