@extends('layouts.index')

@section('title','Home')

@section('content')
    @foreach ($products as $prod)
        <div class="card" style="width: 18rem;">
            <img src="/imagens/{{$prod->file}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$prod->name}}</h5>
          <p class="card-text">{{$prod->description}}</p>
          <a href="#" class="btn btn-primary">See more</a>
        </div>
        </div>
    @endforeach
@endsection