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

@include('perfumeria.partials.section-product')

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


