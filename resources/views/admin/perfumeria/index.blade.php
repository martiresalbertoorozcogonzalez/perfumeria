@extends('admin.master')

@section('content')

<div class="container-fluid">

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="card">

<div style="margin-top: 10px;">
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
        <th scope="row">1</th>
        <th>{{ $perf->name }}</th>
        <th>{{ $perf->description }}</th>
        <th>{{ $perf->extract }}</th>
        <th>{{ $perf->price }}</th>
        <td><img width="70px" src="{{ Storage::url($perf->imgPerfume) }}" alt=""/></td>
        
        <th>
        <button type="button" class="btn bg-blue waves-effect" data-toggle="modal" data-target="#edit">Editar</button>
        </th>
        
        <th>
          <button type="button" class="btn bg-red waves-effect">Eliminar</button>
        </th>
    
    </tr>
</tbody>
@endforeach
</table>

</div>

</div>
</div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title" id="myModalLabel">Nuevo perfume</h4>
      </div>
      <form action="{{route('perfume.store')}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
        <div class="modal-body">

          @include('admin.partials.formperfume')
        
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Crear perfume</button>
        </div>
      </form>
    </div>
  </div>
</div>



<!-- Modal editar perfume-->

<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title" id="myModalLabel">Edit Perfume</h4>
      </div>
      <form action="{{route('perfume.update','test')}}" method="post">
          {{method_field('patch')}}
          {{csrf_field()}}
        <div class="modal-body">
            <input type="hidden" name="category_id" id="cat_id" value="">
             @include('admin.partials.formperfume')
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Editar perfume</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
      </div>
      <form action="{{route('perfume.destroy','test')}}" method="post">
          {{method_field('delete')}}
          {{csrf_field()}}
        <div class="modal-body">
        <p class="text-center">
          Are you sure you want to delete this?
        </p>
            <input type="hidden" name="category_id" id="cat_id" value="">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancelar</button>
          <button type="submit" class="btn btn-warning">Si, Eliminar</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection