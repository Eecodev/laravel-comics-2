@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <section class="container">
        <h1>Dc Comics</h1>
        <div class="row gy-4">
            <div class="col">
                <ul>
                    @foreach ($comics as $comic)
                        <li>
                            <a href="{{route('comics.show', $comic->id)}}">{{$comic->title}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
</main>
@endsection
