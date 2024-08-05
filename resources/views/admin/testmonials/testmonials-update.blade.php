<x-update-model-component title="Update Testmonial">
  <div class="col-md-6 mb-0">
   <label for="emailBasic" class="form-label">Name</label>
      <input type="text"  class="form-control" placeholder="Name" wire:model='name' />
           @include('admin.error',['property' => 'name'])
  </div>
   
   <div class="col-md-6 mb-0">
         <label  class="form-label">Position</label>
            <input type="text"  class="form-control" placeholder="Position"  wire:model='position'/>
               @include('admin.error',['property' => 'position'])
   </div>


   <div class="col-md-6 mb-2 mt-2">
   <label for="emailBasic" class="form-label">Image</label>
      <input type="file"  class="form-control" placeholder="Image" wire:model='image' />
      <div wire:loading wire:target="image">Uploading...</div>
           @include('admin.error',['property' => 'image'])
  </div>
   
   @if ($image) 
            <div>
                <img src="{{ $image->temporaryUrl() }}" width="100%" height="50%">
            </div>
      
    @endif

   <div class="col-md-12 mb-0 mt-2">
         <label  class="form-label">Description</label>
         <textarea  class="form-control"  wire:model='description'></textarea>
            
               @include('admin.error',['property' => 'description'])
   </div>
</x-update-model-component>


