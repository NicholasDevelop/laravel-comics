@extends('layouts.standard')

@section('metaTitle')
    Home page
@endsection

@section('content')

<div>
    <div class="current-series-container">
        <div class="current-series">
            <button class="btn-series">Current Series</button>

            <ul class="card-wrapper">
            {{-- <Comic v-for="(element,i) in comics" :key="i" :srcThumb="element.thumb" :title="element.series" /> --}}
            {{-- <li class="card-item">
                <img :src="srcThumb" alt="">
                <h3>{{title}}</h3>
            </li> --}}
            @foreach ($comics as $comic)
            <li class="card-item">
                <img src="{{ $comic['thumb'] }}" alt="">
                <h3>{{ $comic['title'] }}</h3>
            </li>
            @endforeach
            </ul>

            <button class="btn-more">Load More</button>

        </div>
    </div>


    <div class="shop-container">
        <div class="shop">
            <div class="card">
                <figure>
                    <img src="/img/buy-comics-digital-comics.png" alt="">
                </figure>
                <h3>Digital Comics</h3>
            </div>
                <div class="card">
                <figure>
                    <img src="/img/buy-comics-merchandise.png" alt="">
                </figure>
                <h3>Digital Comics</h3>
            </div>
                <div class="card">
                <figure>
                    <img src="/img/buy-comics-subscriptions.png" alt="">
                </figure>
                <h3>Digital Comics</h3>
            </div>
                <div class="card">
                <figure>
                    <img src="/img/buy-comics-shop-locator.png" alt="">
                </figure>
                <h3>Digital Comics</h3>
            </div>
                <div class="card">
                <figure>
                    <img class="special-size" src="/img/buy-dc-power-visa.svg" alt="">
                </figure>
                <h3>Digital Comics</h3>
            </div>
        </div>
    </div>
</div>

@endsection