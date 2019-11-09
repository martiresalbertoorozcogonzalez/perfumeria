@extends('layouts.master')


@section('iniciopagina')

<div class="container" style="margin-top:80px;">

 
      <div class="intro h-100">
        <div class="row h-100 justify-content-center align-items-center">
          <div class="col-md-6">
            <h1>Perfumes de Hombre</h1>
            <p>Bienvenido a nuestra seccion de perfumes de hombre aqui podra
               encontrar todos los perfumes de mujer que tenemos a dispociosion
               en varias marcas precentaciones y tamanos pase adelante si no ve
               loe que quiere utilize buestra barra de busqueda.</p>
          </div>
          <div class="col-md-6 mt-2 mb-4">
            <img src="/images/perfumehombre1.png" class="img-fluid"/>
          </div>
        </div>
      </div>



</div>

@endsection

{{-------------------Seccion lista de prodctos------------------ --}}

@section('listarproductos')

<div class="container">


  <!--Grid row-->
  <div class="row wow fadeIn">
   
   @foreach ($perfumes as $perf )
       
    <!--Grid column-->
    <div class="col-lg-3 col-md-6 mb-4">

      <!--Card-->
      <div class="card">

        <!--Card image-->
        <div class="view overlay">
          <img src="{{ Storage::url($perf->image) }}" class="card-img-top" alt="">
          <a data-toggle="modal" data-target="#listarperfume{{$perf->id}}" class="dark-grey-text">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        <!--Card image-->

        <!--Card content-->
        <div class="card-body text-center">
          <!--Category & Title-->
          <h5>
            <strong>
              {{$perf->name}}
              <span class="badge badge-pill danger-color">NEW</span>
            </strong>
          </h5>

          <h4 class="font-weight-bold blue-text">
            <strong>Q{{$perf->price}}</strong>
          </h4>

        </div>
        <!--Card content-->

      </div>
      <!--Card-->

    </div>
    <!--Grid column-->

   @endforeach

  </div>
  <!--Grid row-->
 
   @include('perfumeria.partials.form')
   
</div>

@endsection


{{-- ---------------Seccion para mostrar un anuncio--------------- --}}

@section('anuncio1')

<div class="container" style="margin-top:10px;">

 
      <div class="intro h-100">
        <div class="row h-100 justify-content-center align-items-center">
          <div class="col-md-6">
            <h1>PerfuVentas tu mejor opcion</h1>
            <p>Con los mejores perfumes de varias marcas en distintas
            precentaciones y tamanios si no encuentras algun perfume
            puedes utilizar la barra de busqueda.</p>
          </div>
          <div class="col-md-6 mt-2 mb-4">
            <img src="/images/svg/graphic.svg" class="img-fluid"/>
          </div>
        </div>
      </div>



</div>

@endsection