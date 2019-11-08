@extends('layouts.master')



@section('iniciopagina')

<div class="container" style="margin-top:80px;">

 
      <div class="intro h-100">
        <div class="row h-100 justify-content-center align-items-center">
          <div class="col-md-6">
            <h2>Bienvenido a PerfuVentas</h2>
            <p>Bienvenido a PerfuVentas somos una tienda en linea para la venta
            de perfumeria de las marcas que estan de moda pase adelante utilize
            nuestar barra de busqueda si no encuentra su perfume favorito.</p>
          </div>
          <div class="col-md-6 mt-2 mb-4">
            <img src="/images/perfumes1.png" class="img-fluid"/>
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