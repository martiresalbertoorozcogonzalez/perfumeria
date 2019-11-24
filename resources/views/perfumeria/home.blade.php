@extends('layouts.master')

@section('content')

<div class="container" style="margin-top:85px;">
 
  
    <div class="intro h-100">
        <div class="row h-100 justify-content-center align-items-center">
          <div class="col-md-6">
            <h2>Bienvenido</h2>
            <p>PerfuVentas es una tienda en linea de perfumeria original trabajamos 
            con varias marcas en distintas precentaciones y tamanos tenemos varios
            anos de experiencia en la venta de perfumeria , nuestra tienda es para dar 
            a conocer nuestros producto es visual e informativa  NO vendemos perfumeria
            a traves de pago en linea solo recibimos pago contra engtrega usamos este 
            metodo para que el cliente tenga la seguridad que esta pagando el perfume
            que solicito tanto en precentacion como en olor. Utilize nuestar barra
            de busqueda si no encuentra su perfume favorito.</p>
          </div>
          <div class="col-md-6 mt-2 mb-4">
            <img src="/images/inicio4.jpg" class="img-fluid rounded"/>
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
        <div class="col-md-6">
          <h2>Acerca de Perfuventas</h2>
          <p>Somos una tienda en linea para la venta de perfumeria con
          mas de 12 anios de experiencia en atencion al cliente, con las
          mejores marcas y tendencias .</p>
        </div>
        <div class="col-md-6 mt-2 mb-4">
          <img src="/images/work.jpg" width="100%" class="img-fluid"/>
        </div>
      </div>
    </div>



</div>


@endsection
