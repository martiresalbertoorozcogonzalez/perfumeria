@extends('admin.master')

@section('content')

<div class="container-fluid">

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="card">

<div style="margin-top: 10px;">
<center><h1>Mensajes</h1></center>
</div>

<div class="body table-responsive">

<table class="table table-hover">
<thead>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>email</th>
        <th>subjet</th>
        <th>mensaje</th>
        <th>Borrar</th>
    </tr>
</thead>
<tbody>
    @foreach($messages as $mess)
    <tr>
    <th scope="row">{{ $mess->id }}</th>
        <th>{{ $mess->nombre }}</th>
        <th>{{ $mess->email }}</th>
        <th>{{ $mess->subjet }}</th>
        <th>{{ $mess->mensaje }}</th> 
   
        <th>
         <button type="button" class="btn bg-red waves-effect" data-messid={{ $mess->id }} data-toggle="modal" data-target="#deletemessage">Eliminar</button>
        </th>
    
    </tr>
</tbody>
@endforeach
</table>

</div>

</div>
</div>


<!-- Modal -->
<div class="modal fade" id="deletemessage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
      </div>
      <form action="{{route('mensajes.destroy','test')}}" method="post">
          {{method_field('delete')}}
          {{csrf_field()}}
        <div class="modal-body">
        <p class="text-center">
          Are you sure you want to delete this?
        </p>
            <input type="hidden" name="message_id" id="mess_id" value="">

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