{{------------------Inicio de pagina primer anuncio--------------------------- --}}

@extends('layouts.master')


@section('content')

<div class="container" style="margin-top:80px;">

 
      <div class="intro h-100">
        <div class="row h-100 justify-content-center align-items-center">
          <div class="col-md-6">
            <h1>Perfumes de Mujer</h1>
            <p>Bienvenido a nuestra seccion de perfumes de mujer aqui podra
               encontrar todos los perfumes de mujer que tenemos a dispociosion.</p>
          </div>
          <div class="col-md-6 mt-2 mb-4">
            <img src="/images/perfumemujer3.png" class="img-fluid"/>
          </div>
        </div>
      </div>


<hr>


<!--Section: Content-->
<section class="text-center">

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


<div class="container" style="margin-top:20px;">

<div class="intro h-100">
  <div class="row h-100 justify-content-center align-items-center">
    <div class="col-md-6 mt-2 mb-4">
      <img src="/images/mejorop.jpg" class="img-fluid"/>
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
    
</div>

@endsection

