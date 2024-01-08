@extends('layouts.app')

@section('title', 'Create Comic')

@section('content')
<main>
    <section class="container">
        <form action="{{route('comics.store')}}" method="POST">
            {{-- token --}}
            @csrf

            <input class="form-control" type="text" id="title" name="title" placeholder="Inserisci titolo">
            <input class="form-control" type="text" id="description" name="description" placeholder="Inserisci description">
            <input class="form-control" type="text" id="price" name="price" placeholder="Inserisci price">
            <input class="form-control" type="text" id="type" name="type" placeholder="Inserisci type">

            <button type="submit">Send</button>
        </form>
        {{-- <h1>Comics</h1>
        <div class="row">
            <div class="col-12 col-md-4 col-lg-3">
                <div class="card">
                    <img class="dc-img" src="{{$comic->thumb}}" alt="{{$comic->title}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$comic->title}}</h5>
                        <p class="card-title">{!! substr($comic->description, 0, 100) . '...' !!}</p>
                        <a href="#" class="btn btn-success">Info</a>
                    </div>
                </div>
            </div>

        </div> --}}
    </section>
</main>
@endsection
