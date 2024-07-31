<x-show-model-component title="Show Message">
<div class="col-md-6 mb-0">
        <label for="emailBasic" class="form-label">Name</label>
        
       <div class="form-control">{{$name}}</div>
        
      </div>
      <div class="col-md-6 mb-0">
        <label  class="form-label">Sunject</label>
        
        <div class="form-control">{{$subject}}</div>
      </div>
      <div class="col-md-12 mb-0">
        <label  class="form-label">Message</label>
        
        <div class="form-control">{{$message}}</div>
      </div>

      <div class="col-md-6 mb-0">
        <label  class="form-label"> Email</label>
        <div class="form-control">{{$email}}</div>
        
      </div>
</x-show-model-component>



