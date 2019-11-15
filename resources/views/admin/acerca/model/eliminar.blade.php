<!-- Modal -->
<div class="modal fade" id="deleteacerca" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
      </div>
      <form action="{{route('acerca.destroy','test')}}" method="post">
          {{method_field('delete')}}
          {{csrf_field()}}
        <div class="modal-body">
        <p class="text-center">
          Are you sure you want to delete this?
        </p>
            <input type="hidden" name="acerca_id" id="acer_id" value="">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancelar</button>
          <button type="submit" class="btn btn-warning">Si, Eliminar</button>
        </div>
      </form>
    </div>
  </div>
</div>