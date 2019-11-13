@extends('layouts.master')


@section('iniciopagina')

<div class="container" style="margin-top:80px;">

 
<div class="intro h-100">
  <div class="row h-100 justify-content-center align-items-center">
    <div class="col-md-6">
      <h1>Contacto PerfuVentas</h1>
      <p>Hola gracias por visitar PerfuVentas y entrar a la seccion de
      contacto aqui puedes enviarnos mensaje con tus preguntas y tus dudas
      con mucho gusto te responderemos lo mas pronto posible</p>
    </div>
    <div class="col-md-6 mt-2 mb-4">
      <img src="/images/contacto.png" class="img-fluid"/>
    </div>
  </div>
</div>


<!--Section: Contact v.2-->
<section class="mb-4">

<div class="row mt-3">

        <!--Grid column-->
<div class="col-md-9 mb-md-0 mb-5">

@if (session()->has('info'))
    
    <h3>{{ session('info')}}</h3>
    
@else    
  <form method="POST" action="{{ route('contact') }}">
        @csrf
      <!--Grid row-->
      <div class="row">

          <!--Grid column-->
          <div class="col-md-6">
              <div class="md-form mb-0">
                  <input type="text" name="nombre" class="form-control" value="{{ old('nombre')}}">
                  <label for="nombre" class="">Your name</label>
                  {!! $errors->first('nombre', '<span class=error>:message</span>') !!}
              </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6">
              <div class="md-form mb-0">
                  <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                  <label for="email" class="">Your email</label>
                   {!! $errors->first('email', '<span class=error>:message</span>') !!}
              </div>
          </div>
          <!--Grid column-->

      </div>
      <!--Grid row-->

      <!--Grid row-->
      <div class="row">
          <div class="col-md-12">
              <div class="md-form mb-0">
                  <input type="text" name="subjet" class="form-control">
                  <label for="subject" class="">Subject</label>
                  {!! $errors->first('subjet', '<span class=error>:message</span>') !!}
              </div>
          </div>
      </div>
      <!--Grid row-->

      <!--Grid row-->
      <div class="row">

          <!--Grid column-->
          <div class="col-md-12">

              <div class="md-form">
                  <textarea type="text" name="mensaje" rows="2" class="form-control md-textarea">{{ old('mensaje') }}</textarea>
                  <label for="mensaje">Your message</label>
                   {!! $errors->first('mensaje', '<span class=error>:message</span>') !!}
              </div>

          </div>
      </div>
      <!--Grid row-->


  <div class="text-center text-md-left">
 
     <input type="submit" value=" Enviar">

  </div>

  </form>

@endif


</div>
<!--Grid column-->

<!--Grid column-->
<div class="col-md-3 text-center">
  <ul class="list-unstyled mb-0">
      <li><i class="fas fa-map-marker-alt fa-2x"></i>
          <p>Guatemala , Guatemala</p>
      </li>

      <li><i class="fas fa-phone mt-4 fa-2x"></i>
          <p>43537326</p>
      </li>

      <li><i class="fas fa-envelope mt-4 fa-2x"></i>
          <p>perfuventasgt@gmail.com</p>
      </li>
  </ul>
</div>
<!--Grid column-->

</div>

</section>

</div>

@endsection