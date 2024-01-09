@extends('layouts.app')

@section('title', 'Comics')

@section('content')
<main>
    <section class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h1>Comics</h1>
          <a href="{{route('comics.create')}}" class="btn btn-primary">Create new comic</a>
        </div>

        @if(session()->has('message'))
            <div class="alert alert-success">{{session()->get('message') }}</div>
        @endif

        <div class="row">
            @foreach ($comics as $comic)
            <div class="col-12 col-md-4 col-lg-3">
                <div class="card">
                    <img class="dc-img" src="{{$comic->thumb}}" alt="{{$comic->title}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$comic->title}}</h5>
                        <p class="card-title">{!! substr($comic->description, 0, 100) . '...' !!}</p>
                        <div class="d-flex">
                            <a href="#" class="btn btn-success">Info</a>
                            <form action="{{route('comics.destroy', $comic->id)}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </section>
</main>
@endsection
