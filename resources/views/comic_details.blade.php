@extends('structure')
@section('title', 'DC - Comics')


@section('main')
    <main class="main_comics">
        <div class="container">
            {{-- Box contenente il titolo della pagina nel body --}}
            <div class="title_main">
                <h2>{{ $comic['title'] }}</h2>
            </div>
            <div class="comic">
                <img src="{{ $comic['thumb'] }}" alt="Thumb Fumetto">
                <p>{{ $comic['description'] }}</p>
                <h5>{{ $comic['price'] }}</h5>
            </div>
    </main>
@endsection
