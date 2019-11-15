@extends('layouts.master')


@section('iniciopagina')

<div class="container" style="margin-top:80px;">

@foreach ($acerca as $acer)
    

<div class="intro h-100">
<div class="row h-100 justify-content-center align-items-center">
  <div class="col-md-6">
  <h1>{{ $acer->title}}</h1>
  <p>{{ $acer->description }}</p>
    </div>
    <div class="col-md-6 mt-2 mb-4">
      <img src="{{ Storage::url($acer->image) }}" class="img-fluid"/>
    </div>
  </div>
</div>
  
@endforeach  

</div>

@endsection

