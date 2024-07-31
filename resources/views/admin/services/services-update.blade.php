<x-update-model-component title="Update Service">
<div class="col-md-4 mb-0">
        <label for="emailBasic" class="form-label">Name</label>
        <input type="text"  class="form-control" placeholder="Name" wire:model='name' />
        @include('admin.error',['property' => 'name'])
      </div>
      <div class="col-md-4 mb-0">
        <label  class="form-label">Icon</label>
        <input type="text"  class="form-control" placeholder="icon"  wire:model='icon'/>
        @include('admin.error',['property' => 'icon'])
      </div>
      <div class="col-md-4 mb-0">
        <label  class="form-label">Description</label>
        <textarea  class="form-control" wire:model='description' ></textarea>
        
        @include('admin.error',['property' => 'description'])
      </div>
</x-update-model-component>







