@extends('layouts.master')



@section('content')

<div class="container" style="margin-top:80px;">

<!--Section: Content-->
<section class="text-center mb-5">

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

    <a href="{{url('/')}}" class="btn btn-indigo btn-rounded btn-sm px-3">Regresar</a>
    <button type="button" data-toggle="modal" data-target="#listarperfume{{$perf->id}}" class="btn btn-outline-indigo btn-rounded btn-sm px-3 waves-effect">Detalles</button>

    </div>
    <!--Grid column-->

    @endforeach

</div>
<!--Grid row-->

@include('perfumeria.partials.form')

{{ $perfumes->links() }}

<hr>

</section>
<!--Section: Content-->

</div>
      
@endsection