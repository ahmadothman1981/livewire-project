<form class="row" wire:submit.prevent="submit">
@if (session()->has('message'))
    <div id="flash-message" class="alert alert-success my-success-alert" >
        {{ session('message') }}
    </div>
@endif

                      <div class="col-md-6">
                        <label for="defaultFormControlInput" class="form-label">Name</label>
                        <input
                          type="text"
                          class="form-control"
                          
                          placeholder="Name"
                          wire:model='setting.name'
                        />
                        @include('admin.error',['property' =>'setting.name'])
                        
                        
                      </div>
                      <div class="col-md-6">
                        <label for="defaultFormControlInput" class="form-label">Email</label>
                        <input
                          type="text"
                          class="form-control"
                          wire:model='setting.email'
                          placeholder="Email"
                          
                        />
                        @include('admin.error',['property' =>'setting.email'])
                        
                      </div>
                      <div class="col-md-6 mt-2">
                        <label for="defaultFormControlInput" class="form-label">Address</label>
                        <input
                          type="text"
                          class="form-control"
                          wire:model='setting.address'
                          placeholder="Address"
                          
                        />
                        @include('admin.error',['property' =>'setting.address'])
                        
                      </div>
                      <div class="col-md-6 mt-2">
                        <label for="defaultFormControlInput" class="form-label">Phone</label>
                        <input
                          type="text"
                          class="form-control"
                         wire:model='setting.phone'
                          placeholder="Phone"
                          
                        />
                        @include('admin.error',['property' =>'setting.phone'])
                        
                      </div>
                      <div class="col-md-6 mt-2">
                        <label for="defaultFormControlInput" class="form-label">Facebook</label>
                        <input
                          type="text"
                          class="form-control"
                          wire:model='setting.facebook'
                          placeholder="Facebook"
                          
                        />
                        @include('admin.error',['property' =>'setting.facebook'])
                       
                      </div>
                      <div class="col-md-6 mt-2">
                        <label for="defaultFormControlInput" class="form-label">linkedin</label>
                        <input
                          type="text"
                          class="form-control"
                         wire:model='setting.linkedin'
                          placeholder="Linkdin"
                          
                        />
                        @include('admin.error',['property' =>'setting.linkdin'])
                        
                      </div>
                      <div class="col-md-6 mt-2">
                        <label for="defaultFormControlInput" class="form-label">Twitter</label>
                        <input
                          type="text"
                          class="form-control"
                          wire:model='setting.twitter'
                          placeholder="Twitter"
                          
                        />
                        @include('admin.error',['property' =>'setting.twitter'])
                        
                      </div>
                      <div class="col-md-6 mt-2">
                        <label for="defaultFormControlInput" class="form-label">Instagram</label>
                        <input
                          type="text"
                          class="form-control"
                         wire:model='setting.instagram'
                          placeholder="Instagram"
                          
                        />
                        @include('admin.error',['property' =>'setting.instagram'])
                        
                      </div>
                      <div class="col-md-12 mt-4">
                        <button class="btn btn-primary" type="submit">Submit</button> 
                      </div>
                      </form>

  
