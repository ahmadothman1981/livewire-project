<x-show-model-component title="Show Skill">
<div class="col-md-6 mb-0">
        <label for="emailBasic" class="form-label">Name</label>
        <input type="text"  class="form-control" placeholder="Name" wire:model='name' />
        
      </div>
      <div class="col mb-0">
        <label  class="form-label">Progress</label>
        <input type="number"  class="form-control" placeholder="Progress" min="1" max="100" wire:model='progress'/>
        
      </div>
</x-show-model-component>


