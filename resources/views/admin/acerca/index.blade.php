@extends('admin.master')

@section('content')

<div class="container-fluid">

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="card">

<div style="margin-top: 10px;">
<center><h1>Acerca de Nosotros</h1></center>
</div>


<div class="body table-responsive">

<div style="margin-bottom:10px;">
<button type="button" class="btn bg-purple btn-lg waves-effect" data-toggle="modal" data-target="#myModal">Crear acerca de</button>
</div>

<table class="table table-hover">
<thead>
    <tr>
        <th>Id</th>
        <th>title</th>
        <th>description</th>
        <th>imgAcerca</th>
        <th>Editar</th>
        <th>Borrar</th>
    </tr>
</thead>
<tbody>
   @foreach ($acerca as $acer )
   
   <tr>
   <th scope="row">{{ $acer->id }}</th>
   <th>{{ $acer->title }}</th>
   <th>{{ $acer->description }}</th>
   <td><img width="70px" src="{{ Storage::url($acer->image) }}" alt=""/></td>
       <th>
        <button type="button" class="btn bg-blue waves-effect" 
            data-title="{{$acer->title}}" 
            data-description="{{$acer->description}}" 
            data-acerid={{$acer->id}} 
            data-toggle="modal" 
            data-target="#editAcerca">Editar
        </button>
       </th>
       
       <th>
        <button type="button" class="btn bg-red waves-effect" 
        data-acerid={{$acer->id}} 
        data-toggle="modal" 
        data-target="#deleteacerca">Eliminar
</button>
       </th>
   
   </tr>
   
   @endforeach 
</tbody>

</table>

</div>

</div>
</div>

@include('admin.acerca.model.modelocrear');

@include('admin.acerca.model.editar');

@include('admin.acerca.model.eliminar');

    
@endsection