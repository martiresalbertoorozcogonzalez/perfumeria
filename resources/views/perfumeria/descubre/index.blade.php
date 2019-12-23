@extends('layouts.master')


@section('content')

<div class="container" style="margin-top:70px;">

    <div class="intro h-100">
        <div class="row h-100 justify-content-center align-items-center">
          <div class="col-md-6">
            <h2>Nuestra Perfumeria</h2>
            <p>PerfuVentas es una tienda en linea de perfumeria original tenemos varios
            anos de experiencia en la venta de perfumeria , nuestra tienda es para dar 
            a conocer nuestros producto e informar NO VENDEMOS PERFUMERIA A TRAVES DE 
            PAGO EN LINEA SOLO CONTRA ENTREGA usamos este 
            metodo para que el cliente tenga la seguridad que esta pagando el perfume
            que solicito tanto en precentacion como en olor. Utilize nuestar barra
            de busqueda si no encuentra su perfume favorito o envienos un mensaje y con
            gusto le responderemos a su correo.</p>

            <a class="nav-link btn btn-outline-primary" href="{{route('contacto')}}">Contactanos ahora</a>

          </div>
          <div class="col-md-6 mt-2 mb-4">
            <img src="/images/otroinicio.jpg" class="img-fluid rounded"/>
          </div>
        </div>
    </div>

@include('perfumeria.partials.section-product')


</div>


@endsection