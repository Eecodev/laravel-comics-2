@extends('layouts.app')

@section('title', 'Create Comic')

@section('content')
<main>
    <section class="container">
        <h3 class="mt-5">Add new Comic</h3>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('comics.store')}}" method="POST" class="create-form">
            {{-- token --}}
            @csrf

            <input class="form-control" type="text" id="title" name="title" placeholder="Inserisci titolo">
            @error('title')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
            <input class="form-control" type="text" id="description" name="description" placeholder="Inserisci description">
            <input class="form-control" type="text" id="price" name="price" placeholder="Inserisci price">
            <input class="form-control" type="date" id="sale_date" name="sale_date" placeholder="Inserisci sale date">
            <select name="type" id="type" class="form-select" required>
                <option value="comic book">Comic Book</option>
                <option value="graphic novel">Graphic Novel</option>
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
