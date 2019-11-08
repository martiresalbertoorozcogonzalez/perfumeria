@extends('admin.master')


@section('content')

<div class="row clearfix">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a href="{{ url('/') }}">
        <div class="info-box hover-zoom-effect">
            <div class="icon bg-pink">
                    <i class="material-icons">home</i>
            </div>
            <div class="content">
                <div class="text">Pagina principal</div>
            </div>
        </div>
        </a>   

    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a href="{{ url('/home') }}">
        <div class="info-box hover-zoom-effect">
            <div class="icon bg-blue">
                <i class="material-icons">devices</i>
            </div>
            <div class="content">
                <div class="text">Admin</div>
            </div>
        </div>
        </a> 
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a href="{{ url('category') }}">
        <div class="info-box hover-zoom-effect">
            <div class="icon bg-light-blue">
                <i class="material-icons">list</i>
            </div>
            <div class="content">
                <div class="text">Category</div>
            </div>
        </div>
        </a> 
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a href="{{ url('perfume') }}">
        <div class="info-box hover-zoom-effect">
            <div class="icon bg-cyan">
                <i class="material-icons">store</i>
            </div>
            <div class="content">
                <div class="text">Perfumeria</div>
            </div>
        </div>
        </a>
    </div>
</div>

@endsection