@extends('layouts.app')

@section('title', 'Info Comic')

@section('content')
<main>
    <section class="container">
        <h1>Comics</h1>
        <div class="row">
            <div class="col-12 col-md-4 col-lg-3">
                <div class="card">
                    <img class="dc-img" src="{{$comic->thumb}}" alt="{{$comic->title}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$comic->title}}</h5>
                        <p class="card-title">{!! substr($comic->description, 0, 100) . '...' !!}</p>
                        <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-success">Modifica</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
</main>
@endsection
