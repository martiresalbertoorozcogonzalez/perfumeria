@extends('admin.master')

@section('content')

<div class="container-fluid">

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="card">

<div style="margin-top: 10px;">
<center><h1>Categorias</h1></center>
</div>


<div class="body table-responsive">

<div style="margin-bottom:10px;">
<button type="button" class="btn bg-purple btn-lg waves-effect" data-toggle="modal" data-target="#myModal">Crear categopria</button>
</div>

<table class="table table-hover">
<thead>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Editar</th>
        <th>Borrar</th>
    </tr>
</thead>
<tbody>
    @foreach($categories as $cat)
    <tr>
        <th scope="row">1</th>
        <th>{{ $cat->title }}</th>
        
        <th>
        <button type="button" class="btn bg-blue waves-effect" data-mytitle="{{$cat->title}}" data-catid={{$cat->id}} data-toggle="modal" data-target="#edit">Editar</button>
        </th>
        
        <th>
        	<button type="button" class="btn bg-red waves-effect" data-catid={{$cat->id}} data-toggle="modal" data-target="#delete">Eliminar</button>
        </th>
    
    </tr>
</tbody>
@endforeach
</table>

</div>

</div>
</div>



<!-- Modal crear categoria-->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title" id="myModalLabel">New Category</h4>
      </div>
      <form action="{{route('category.store')}}" method="post">
          {{csrf_field()}}
        <div class="modal-body">
         <label for="title">Nombe categoria</label>
            <div class="form-group">
                <div class="form-line">
                    <input type="text" name="title" id="title" class="form-control">
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Crear categoria</button>
        </div>
      </form>
    </div>
  </div>
</div>



<!-- Modal editar categoria-->

<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title" id="myModalLabel">Edit Category</h4>
      </div>
      <form action="{{route('category.update','test')}}" method="post">
          {{method_field('patch')}}
          {{csrf_field()}}
        <div class="modal-body">
            <input type="hidden" name="category_id" id="cat_id" value="">
             <label for="title">Nombe categoria</label>
            <div class="form-group">
                <div class="form-line">
                    <input type="text" name="title" id="title" class="form-control">
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save Changes</button>
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
      <form action="{{route('category.destroy','test')}}" method="post">
          {{method_field('delete')}}
          {{csrf_field()}}
        <div class="modal-body">
        <p class="text-center">
          Are you sure you want to delete this?
        </p>
            <input type="hidden" name="category_id" id="cat_id" value="">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
          <button type="submit" class="btn btn-warning">Yes, Delete</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection