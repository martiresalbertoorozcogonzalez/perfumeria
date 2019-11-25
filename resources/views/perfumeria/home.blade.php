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

@include('perfumeria.partials.section-product')

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
