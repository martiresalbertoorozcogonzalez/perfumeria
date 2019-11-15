
<!-- Modal editar perfume-->
<div class="modal fade" id="editAcerca" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
       
       <h4 class="modal-title" id="myModalLabel">Editar acerca</h4>
      
      </div>
    
      <form action="{{route('acerca.update','test')}}" method="post" enctype="multipart/form-data">
          {{method_field('patch')}}
          {{csrf_field()}}
    
        <div class="modal-body">
          <input type="hidden" name="acerca_id" id="acer_id" value="">
          <div class="form-group">
          <div class="form-line">
            <label for="title">Titulo</label>
              <input type="text" name="title" id="title" class="form-control">
          </div>
          </div>

          <div class="form-group">
            <div class="form-line">
                <label for="description">Descripcion</label>
                  <input type="text" name="description" id="description" class="form-control">
              </div>
          </div>	

            <div class="form-group">
              <label for="image">imgAcerca</label>
                <input type="file" name="image" id="image"> 
            </div>	


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Editar perfume</button>
        </div>
      </form>
    
    </div>
  </div>
</div>
