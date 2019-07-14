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
<button type="button" class="btn bg-purple btn-lg waves-effect" data-toggle="modal" data-target="#exampleModalCenter">Crear perfumes</button>
</div>

<table class="table table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Categoria</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Tamano</th>
            <th>Imagen</th>
            <th>Precio</th>
            <th>Editar</th>
            <th>Borrar</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <th>Perfumes de Hombre</th>
            <th>Hugo Boss</th>
            <th>Es un perfume que pertenece a la familia olfativa de los perfumes ciricos</th>
            <th>100ml</th>
            <th>imagen.jpg</th>
            <th>Q 800.00</th>
            <th>
            	<button type="button" class="btn bg-blue waves-effect" data-toggle="modal" data-target="#editar">Editar</button>
            </th>
            <th>
            	<button type="button" class="btn bg-red waves-effect">Eliminar</button>
            </th>
        </tr>
    </tbody>
</table>

</div>

</div>
</div>



<!-- Modal crear categoria-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Crear perfume</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            
                            <form>
                                <label for="name">Nombe perfume</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="name" class="form-control">
                                    </div>
                                </div>

                            </form>
                        
                        </div>
                    
                    </div>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Crear perfume</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal editar categoria-->
<div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Editar perfume</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Editar perfume</button>
      </div>
    </div>
  </div>
</div>



</div>


@endsection