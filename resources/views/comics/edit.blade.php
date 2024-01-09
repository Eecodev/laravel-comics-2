@extends('layouts.app')

@section('title', 'Edit: '.$comic->title)

@section('content')
<main>
    <section class="container">
        <h3 class="mt-5">Modifica {{$comic->title}}</h3>
        <form action="{{route('comics.store', $comic->id)}}" method="POST" class="create-form">
            {{-- token --}}
            @csrf
            @method('PUT')
            <input class="form-control" type="text" value="{{old('title', $comic->title)}}" id="title" name="title" placeholder="Inserisci titolo">
            <input class="form-control" type="text" value="{{old('description', $comic->description)}}" id="description" name="description" placeholder="Inserisci description">
            <input class="form-control" type="text" value="{{old('price', $comic->price)}}" id="price" name="price" placeholder="Inserisci price">
            <input class="form-control" type="text" value="{{old('type', $comic->type)}}" id="type" name="type" placeholder="Inserisci type">

            <select name="type" id="type" class="form-select" required>
                <option value="comic book" value="{{old('description', $comic->type == 'comic book' ? 'selected' : '')}}">Comic Book</option>
                <option value="graphic novel" value="{{old('description', $comic->type == 'comic book' ? 'selected' : '')}}">Graphic Novel</option>
            </select>

            <button type="submit" class="btn-form">Send</button>
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
