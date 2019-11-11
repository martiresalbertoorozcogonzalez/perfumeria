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

          <div class="form-group">
           <div class="form-line">
    	     <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control">
           </div>
          </div>

        <div class="form-group">
          <div class="form-line">
              <label for="description">Descripcion</label>
                <input type="text" name="description" id="description" class="form-control">
            </div>
        </div>	

        <div class="form-group">
          <div class="form-line">
              <label for="extract">Extracto</label>
                <input type="text" name="extract" id="extract" class="form-control">
            </div>
        </div>	

        <div class="form-group">
          <div class="form-line">
            <label for="price">price</label>
                <input type="text" name="price" id="price" class="form-control"> 
          </div>
        </div>	

        <div class="form-group">
        {{-- @foreach($cat as $cat) --}}
          <div class="form-line">	
          <label for="category_id">Categoria</label>
            <input type="text" name="category_id" id="category_id" class="form-control" value=""> 
          </div>
        {{-- @endforeach --}}
        </div>	


        <div class="form-group">
          <label for="image">imgPerfume</label>
            <input type="file" name="image" id="image"> 
        </div>	

        
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Crear perfume</button>
        </div>
      </form>
    </div>
  </div>
</div>
