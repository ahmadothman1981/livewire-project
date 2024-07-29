<x-update-model-component title="Update Skill">
<div class="col-md-6 mb-0">
        <label for="emailBasic" class="form-label">Name</label>
        <input type="text"  class="form-control" placeholder="Name" wire:model='name' />
        @include('admin.error',['property' => 'name'])
      </div>
      <div class="col mb-0">
        <label  class="form-label">Progress</label>
        <input type="number"  class="form-control" placeholder="Progress" min="1" max="100" wire:model='progress'/>
        @include('admin.error',['property' => 'progress'])
      </div>
</x-update-model-component>






