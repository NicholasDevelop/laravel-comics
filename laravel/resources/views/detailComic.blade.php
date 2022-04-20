@extends('layouts/standard');

@section('metaTitle',$comic['title'])



@section('content')

<section class="blue-banner">
    <div class="container-detail-comic">
        <img src="{{ $comic['thumb'] }}" alt="" class="img-detail-comic">
    </div>
</section>

<section class="main-detail-comic">

</section>

<section class="nav-detail-comic">

</section>

@endsection