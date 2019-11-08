
@foreach($perfumes as $perf )

<!-- Modal -->
<div class="modal fade" id="listarperfume{{$perf->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                <img src="{{ Storage::url($perf->image) }}" width="300px" class="img-fluid" alt="">

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-6 mb-4">

                <!--Content-->
                <div class="p-4">

                <div class="mb-3">
                    <a>
                    <span class="badge purple mr-1"></span>
                    </a>
                    <a>
                    <span class="badge blue mr-1">New</span>
                    </a>

                </div>

                <p class="lead">
                    <span class="mr-1">
                    <del>Q{{$perf->price}}</del>
                    </span>
                    <span>$100</span>
                </p>

                <p class="lead font-weight-bold">Description</p>

                <p>{{$perf->description}}</p>



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

@endforeach