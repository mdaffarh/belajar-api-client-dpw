@extends('layout.main')

@section('container')
<h1>Berita Hiburan</h1>
    <div class="row mt-3">
        @foreach ($news as $n)
        <div class="card col-md-4 ">
            <img src="{{ $n->thumbnail }}" class="card-img-top" alt="{{ $n->title }}">
            <div class="card-body">
                <h5 class="card-title">{{ $n->title }}</h5>
                <p class="card-text">{{ $n->description}}</p>
                <p class="text-sm text-muted"> {{ Carbon\Carbon::parse($n->pubDate)->translatedFormat('l, d F Y h:i'); }}</p>
            </div>
        </div>
        @endforeach
    </div>
@endsection