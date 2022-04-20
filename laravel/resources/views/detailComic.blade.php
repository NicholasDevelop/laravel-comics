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
            <img src="{{asset('img/adv.jpg')}}" alt="">
        </div>

    </div>
</section>

<section class="nav-detail-comic">

</section>

@endsection