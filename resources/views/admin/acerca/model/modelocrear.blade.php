

<!-- Modal crear Acerca-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        
        <h4 class="modal-title" id="myModalLabel">New Acerca de </h4>
        </div>

    <form action="{{route('acerca.store')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
    
        <div class="modal-body">
    
        <label for="title">Titulo</label>
        <div class="form-group">
            <div class="form-line">
                <input type="text" name="title" id="title" class="form-control">
            </div>
        </div>

        <label for="title">Description</label>
        <div class="form-group">
            <div class="form-line">
                <input type="text" name="description" id="description" class="form-control">
            </div>
        </div>	

        <label for="image">imgAcerca</label>
        <div class="form-group">
            <input type="file" name="image" id="image"> 
        </div>	
    
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Crear acerca</button>
        </div>
    </form>
    
</div>
</div>
</div>