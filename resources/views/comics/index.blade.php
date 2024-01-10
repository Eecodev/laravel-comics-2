@extends('layouts.app')

@section('title', 'Comics')

@section('content')
<main>
    <section class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h1>Comics</h1>
          <div class="d-flex">
                <a href="{{route('comics.create')}}" class="btn btn-primary">Create new comic</a>
                <form action="{{route('comics.index')}}" method="GET">
                    <select name="search" id="search" class="ms-3">
                        <option value="">All</option>
                        <option value="Comic Book">Comic Book</option>
                        <option value="Graphic Novel">Graphic Novel</option>
                    </select>
                    <button type="submit" class="btn btn-success ms-3">Search</button>
                </form>
          </div>

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
                            <a href="{{route('comics.show', $comic->id)}}" class="btn btn-info border">Info</a>
                            <form action="{{route('comics.destroy', $comic->id)}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="cancel-btn btn btn-danger ms-3" data-item-title="{{$comic->title}}">Delete</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </section>
</main>
@include('partials.modal_delete');
@endsection
