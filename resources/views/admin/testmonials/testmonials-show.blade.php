<x-show-model-component title="Show Testmonial">
<div class="col-md-4 mb-0">
        <label for="emailBasic" class="form-label">Name</label>
        
       <div class="form-control">{{$name}}</div>
        
      </div>
      <div class="col-md-4 mb-0">
        <label  class="form-label">Description</label>
        
        <div class="form-control">{{$description}}</div>
      </div>
      <div class="col-md-4 mb-0">
        <label  class="form-label">  Position   </label>
        <div class="form-control">{{$position}}</div>
        
      </div>
      @if(!empty($link))
      <div class="col-md-4 mb-0">
        <label  class="form-label">  Image   </label>
        <img class="img-fluid" src="{{asset($image)}}" alt="Image">
        
      </div>
      @endif
</x-show-model-component>



