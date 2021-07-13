@extends('structure')
@section('title', 'DC - Comics')

@section('main')
    <main class="main_comics">
        <div class="container">
            {{-- Box contenente il titolo della pagina nel body --}}
            <div class="title_main">
                <h2>Current series</h2>
            </div>

            {{-- Body della pagina --}}
            <div class="comic_list">
                @foreach ($comics_data as $index => $comic)
                    <div class="comic">
                        <a href="{{ route('comic', ['id' => $index]) }}">
                            <img src="{{ $comic['thumb'] }}" alt="Thumbnail of {{ $comic['series'] }}">
                            <h3>{{ $comic['series'] }}</h3>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
