@extends('layouts.master')



@section('iniciopagina')

<div class="container" style="margin-top:80px;">

    <hr>
    @foreach ($perfumes as $perf)
    <h2>{{$perf->name}}</h2>
     <p>{{$perf->description}}</p>
     <div class="view overlay">
        <img src="{{ Storage::url($perf->image) }}" alt="">
        <a data-toggle="modal" data-target="#listarperfume{{$perf->id}}" class="dark-grey-text">
            <div class="mask rgba-white-slight"></div>
        </a>
    </div>
    @endforeach
    <hr>

    @include('perfumeria.partials.form')
    
</div>

@endsection