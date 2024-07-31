<x-update-model-component title="Update Service">
<div class="col-md-4 mb-0">
        <label for="emailBasic" class="form-label">Name</label>
        <input type="text"  class="form-control" placeholder="Name" wire:model='name' />
        @include('admin.error',['property' => 'name'])
      </div>
     
</x-update-model-component>







