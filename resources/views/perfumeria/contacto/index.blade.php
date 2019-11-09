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
  <form id="contact-form" name="contact-form" action="mail.php" method="POST">

      <!--Grid row-->
      <div class="row">

          <!--Grid column-->
          <div class="col-md-6">
              <div class="md-form mb-0">
                  <input type="text" id="name" name="name" class="form-control">
                  <label for="name" class="">Your name</label>
              </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6">
              <div class="md-form mb-0">
                  <input type="text" id="email" name="email" class="form-control">
                  <label for="email" class="">Your email</label>
              </div>
          </div>
          <!--Grid column-->

      </div>
      <!--Grid row-->

      <!--Grid row-->
      <div class="row">
          <div class="col-md-12">
              <div class="md-form mb-0">
                  <input type="text" id="subject" name="subject" class="form-control">
                  <label for="subject" class="">Subject</label>
              </div>
          </div>
      </div>
      <!--Grid row-->

      <!--Grid row-->
      <div class="row">

          <!--Grid column-->
          <div class="col-md-12">

              <div class="md-form">
                  <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                  <label for="message">Your message</label>
              </div>

          </div>
      </div>
      <!--Grid row-->

  </form>

  <div class="text-center text-md-left">
      <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
  </div>
  <div class="status"></div>
</div>
<!--Grid column-->

<!--Grid column-->
<div class="col-md-3 text-center">
  <ul class="list-unstyled mb-0">
      <li><i class="fas fa-map-marker-alt fa-2x"></i>
          <p>San Francisco, CA 94126, USA</p>
      </li>

      <li><i class="fas fa-phone mt-4 fa-2x"></i>
          <p>+ 01 234 567 89</p>
      </li>

      <li><i class="fas fa-envelope mt-4 fa-2x"></i>
          <p>contact@mdbootstrap.com</p>
      </li>
  </ul>
</div>
<!--Grid column-->

</div>

</section>
<!--Section: Contact v.2-->



</div>

@endsection