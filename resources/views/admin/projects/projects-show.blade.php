<x-show-model-component title="Show Service">
<div class="col-md-4 mb-0">
        <label for="emailBasic" class="form-label">Name</label>
        
       <div class="form-control">{{$name}}</div>
        
      </div>
      <div class="col-md-4 mb-0">
        <label  class="form-label">Description</label>
        
        <div class="form-control">{{$description}}</div>
      </div>
      <div class="col-md-4 mb-0">
        <label  class="form-label">  Category   </label>
        <div class="form-control">{{$category_id}}</div>
        
      </div>
      @if(!empty($link))
      <div class="col-md-4 mb-0">
        <label  class="form-label">  Link   </label>
        <div class="form-control">{{$link}}</div>
        
      </div>
      @endif
      <div class="col-md-4 mb-0">
        <label  class="form-label">  Image   </label>
        <img class="img-fluid" src="{{asset($image)}}" alt="Image">
        
      </div>
</x-show-model-component>



