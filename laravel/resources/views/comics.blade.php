@extends('layouts.standard')

@section('metaTitle')
    Comics
@endsection

@section('content')

<div>
    <div class="current-series-container">
        <div class="current-series">
            <button class="btn-series">Current Series</button>

            <div class="card-wrapper">
                @foreach ($comics as $key => $comic)
                <a href="comics/{{ $key }}" class="card-item">
                {{-- <a href="{{ route('comics.show'), ['id' => $key] }}" class="card-item"> --}}
                    <img src="{{ $comic['thumb'] }}" alt="">
                    <h3>{{ $comic['title'] }}</h3>
                </a>
                @endforeach
            </div>

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
                <h3>Dc Merchandise</h3>
            </div>
                <div class="card">
                <figure>
                    <img src="/img/buy-comics-subscriptions.png" alt="">
                </figure>
                <h3>Subscription</h3>
            </div>
                <div class="card">
                <figure>
                    <img src="/img/buy-comics-shop-locator.png" alt="">
                </figure>
                <h3>Comic Shop Locator</h3>
            </div>
                <div class="card">
                <figure>
                    <img class="special-size" src="/img/buy-dc-power-visa.svg" alt="">
                </figure>
                <h3>Dc Power Visa</h3>
            </div>
        </div>
    </div>
</div>

@endsection