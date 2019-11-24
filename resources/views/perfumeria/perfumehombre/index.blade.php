@extends('layouts.master')


@section('content')

<div class="container" style="margin-top:80px;">
 
<div class="intro h-100">
  <div class="row h-100 justify-content-center align-items-center">
    <div class="col-md-6">
      <h2>Perfumes de hombre</h2>
      <p>Bienvenido a nuestra seccion de perfumes de hombre aqui podra
          encontrar todas las fragancias que tenemos disponibles para hombre
          en varias marcas precentaciones y tamanos pase adelante si no ve 
          lo que busca utilize la barra de busqueda le sera de mucha utilidad.</p>
    </div>
    <div class="col-md-6 mt-2 mb-4">
      <img src="/images/perfumehombre1.png" class="img-fluid"/>
    </div>
  </div>
</div>

</div>

<hr>

<!--Section: Content-->
<section class="text-center mb-5 mt-5">

    <!--Grid row-->
    <div class="row">
  
      @foreach ($perfumes as $perf)
          
      <!--Grid column-->
      <div class="col-lg-4 col-md-12 mb-4">
  
        <a class="waves-effect waves-light"><img
            src="{{ Storage::url($perf->image) }}" class="img-fluid"
            alt=""></a>
  
        <p class="mb-1"><a class="font-weight-bold black-text">{{$perf->name}}</a></p>
  
        <p class="mb-1"><strong>Q {{$perf->price}}</strong></p>
  
        <div class="amber-text fa-xs mb-1">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
        </div>
  
        <a href="{{url('contacto')}}" class="btn btn-indigo btn-rounded btn-sm px-3">Contactanos</a>
        <button type="button" data-toggle="modal" data-target="#listarperfume{{$perf->id}}" class="btn btn-outline-indigo btn-rounded btn-sm px-3 waves-effect">Detalles</button>
  
      </div>
      <!--Grid column-->
  
      @endforeach
  
    </div>
    <!--Grid row-->
  
    @include('perfumeria.partials.form')
     
    {{ $perfumes->links() }}
  
  </section>
  <!--Section: Content-->

<hr>



<div class="container mb-5 mt-5">
 
    <div class="intro h-100">
      <div class="row h-100 justify-content-center align-items-center">
        <div class="col-md-6 mt-2 mb-4">
          <img src="/images/inicio3.jpg" class="img-fluid"/>
        </div>
        <div class="col-md-6">
          <h2>Somos tu mejor opcion</h2>
          <p>Con los mejores perfumes de varias marcas en distintas
          precentaciones y tamanios si no encuentras algun perfume
          puedes utilizar la barra de busqueda ubicada en el menu.</p>
        </div>
      </div>
    </div>
    
    </div>



@endsection


