@extends('layouts.master')



@section('iniciopagina')

<div class="container">

 
    <h2>
      <example-component></example-component>
    </h2>


</div>

@endsection


{{-------------------Seccion lista de prodctos------------------ --}}

@section('listarproductos')

<div class="container">


  <!--Grid row-->
  <div class="row wow fadeIn">

    <!--Grid column-->
    <div class="col-lg-3 col-md-6 mb-4">

      <!--Card-->
      <div class="card">

        <!--Card image-->
        <div class="view overlay">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12.jpg" class="card-img-top" alt="">
          <a data-toggle="modal" data-target="#basicExampleModal" class="dark-grey-text">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        <!--Card image-->

        <!--Card content-->
        <div class="card-body text-center">
          <!--Category & Title-->
          <h5>
            <strong>
              Denim shirt
              <span class="badge badge-pill danger-color">NEW</span>
            </strong>
          </h5>

          <h4 class="font-weight-bold blue-text">
            <strong>120$</strong>
          </h4>

        </div>
        <!--Card content-->

      </div>
      <!--Card-->

    </div>
    <!--Grid column-->



  </div>
  <!--Grid row-->


  <!-- Modal -->
  <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Perfume de Caballero</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <!--Main layout-->
          <main class="pt-4">
            <div class="container dark-grey-text mt-3">

              <!--Grid row-->
              <div class="row wow fadeIn">

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/14.jpg" class="img-fluid" alt="">

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                  <!--Content-->
                  <div class="p-4">

                    <div class="mb-3">
                      <a>
                        <span class="badge purple mr-1">Category 2</span>
                      </a>
                      <a>
                        <span class="badge blue mr-1">New</span>
                      </a>

                    </div>

                    <p class="lead">
                      <span class="mr-1">
                        <del>$200</del>
                      </span>
                      <span>$100</span>
                    </p>

                    <p class="lead font-weight-bold">Description</p>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et dolor suscipit libero eos atque quia ipsa
                      sint voluptatibus!
                      Beatae sit assumenda asperiores iure at maxime atque repellendus maiores quia sapiente.</p>



                  </div>
                  <!--Content-->

                </div>
                <!--Grid column-->

              </div>
              <!--Grid row-->


            </div>
          </main>

          <!--Main layout-->

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Regresar</button>
          <button type="button" class="btn btn-primary">Hablanos</button>
        </div>
      </div>
    </div>
  </div>


</div>

@endsection