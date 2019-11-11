@extends('layouts.master')



@section('iniciopagina')

<div class="container mb-5"style="margin-top:80px;">

 
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



</div>

@endsection


{{-------------------Seccion lista de prodctos------------------ --}}

@section('listarproductos')

<div class="container mt-4">


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
   
      {{ $perfumes->links() }}

</div>

@endsection



@section('anuncio1')

<div class="container mb-5"style="margin-top:40px;">

 
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