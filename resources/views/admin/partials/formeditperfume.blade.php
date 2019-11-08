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
{{-- @foreach($categories as $cat) --}}
  <div class="form-line">	
	<label for="category_id">Categoria</label>
    <input type="text" name="category_id" id="category_id" class="form-control" value="{{-- {{ $cat->id }} --}}"> 
  </div>
{{-- @endforeach --}}
</div>	


<div class="form-group">
	<label for="imgPerfume">imgPerfume</label>
    <input type="file" name="imgPerfume" id="imgPerfume"> 
</div>	
