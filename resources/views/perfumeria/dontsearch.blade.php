@extends('layouts.master')


@section('content')



<div class="container" style="margin-top:80px;">


    <div class="form-group text-danger">
        
        <span><h4>No hemos encontrado resultados de esta busqueda</h4></span>

    </div>
                
    <div class="form-group">

    <a href="{{ URL::previous() }}" class="btn btn-indigo btn-rounded btn-sm px-3">Regresar</a>
    
    </div>



</div>

@endsection