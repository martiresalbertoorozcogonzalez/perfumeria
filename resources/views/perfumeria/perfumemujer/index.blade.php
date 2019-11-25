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

@include('perfumeria.partials.section-product')


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

