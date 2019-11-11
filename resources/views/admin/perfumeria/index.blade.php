@extends('admin.master')

@section('content')

<div class="container-fluid">

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="card">

<div>
<center><h1>Perfumeria</h1></center>
</div>


<div class="body table-responsive">

<div style="margin-bottom:10px;">
<button type="button" class="btn bg-purple btn-lg waves-effect" data-toggle="modal" data-target="#myModal">Crear perfume</button>
</div>

<table class="table table-hover">
<thead>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Categoria</th>
        <th>descripcion</th>
        <th>extracto</th>
        <th>precio</th>
        <th>imagen</th>
        <th>Editar</th>
        <th>Borrar</th>
    </tr>
</thead>
<tbody>
    @foreach($perfume as $perf)
    <tr>
        <th scope="row">{{ $perf->id }}</th>
        <th>{{ $perf->name }}</th>
        <th>{{ $perf->category->name}}</th>
        <th>{{ $perf->description }}</th>
        <th>{{ $perf->extract }}</th>
        <th>{{ $perf->price }}</th>
        <td><img width="70px" src="{{ Storage::url($perf->image) }}" alt=""/></td>
        
        <th>
        <button type="button" class="btn bg-blue waves-effect" 
                data-name="{{$perf->name}}" 
                data-category={{$perf->category_id}} 
                data-description="{{$perf->description}}" 
                data-extract={{$perf->extract}} 
                data-price={{$perf->price}}  
                data-perfumeid={{$perf->id}} 
                data-toggle="modal" 
                data-target="#editPerfume">Editar
        </button>
        </th>
        
        <th>
          <button type="button" class="btn bg-red waves-effect" 
                  data-perfumeid={{$perf->id}} 
                  data-toggle="modal" 
                  data-target="#deleteperfume">Eliminar
          </button>
        </th>
    
    </tr>
</tbody>
@endforeach
</table>
{{ $perfume->links() }}

</div>
</div>
</div>

@include('admin.perfumeria.model.eliminar')

@include('admin.perfumeria.model.editar')

@include('admin.perfumeria.model.crear')

@endsection