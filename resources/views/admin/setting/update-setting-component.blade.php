<form class="row" wire:submit.prevent="submit">
                      <div class="col-md-6">
                        <label for="defaultFormControlInput" class="form-label">Name</label>
                        <input
                          type="text"
                          class="form-control"
                          
                          placeholder="Name"
                          wire:model='setting.name'
                        />
                        @error('setting.name') <span class="text-danger">{{ $message }}</span> @enderror
                        
                      </div>
                      <div class="col-md-6">
                        <label for="defaultFormControlInput" class="form-label">Email</label>
                        <input
                          type="text"
                          class="form-control"
                          wire:model='setting.email'
                          placeholder="Email"
                          
                        />
                        @error('setting.email') <span class="text-danger">{{ $message }}</span> @enderror
                      </div>
                      <div class="col-md-6 mt-2">
                        <label for="defaultFormControlInput" class="form-label">Address</label>
                        <input
                          type="text"
                          class="form-control"
                          wire:model='setting.address'
                          placeholder="Address"
                          
                        />
                        @error('setting.address') <span class="text-danger">{{ $message }}</span> @enderror
                      </div>
                      <div class="col-md-6 mt-2">
                        <label for="defaultFormControlInput" class="form-label">Phone</label>
                        <input
                          type="text"
                          class="form-control"
                         wire:model='setting.phone'
                          placeholder="Phone"
                          
                        />
                        @error('setting.phone') <span class="text-danger">{{ $message }}</span> @enderror
                      </div>
                      <div class="col-md-6 mt-2">
                        <label for="defaultFormControlInput" class="form-label">Facebook</label>
                        <input
                          type="text"
                          class="form-control"
                          wire:model='setting.facebook'
                          placeholder="Facebook"
                          
                        />
                        @error('setting.facebook') <span class="text-danger">{{ $message }}</span> @enderror
                      </div>
                      <div class="col-md-6 mt-2">
                        <label for="defaultFormControlInput" class="form-label">Linkdin</label>
                        <input
                          type="text"
                          class="form-control"
                         wire:model='setting.linkdin'
                          placeholder="Linkdin"
                          
                        />
                        @error('setting.linkdin') <span class="text-danger">{{ $message }}</span> @enderror
                      </div>
                      <div class="col-md-6 mt-2">
                        <label for="defaultFormControlInput" class="form-label">Twitter</label>
                        <input
                          type="text"
                          class="form-control"
                          wire:model='setting.twitter'
                          placeholder="Twitter"
                          
                        />
                        @error('setting.twitter') <span class="text-danger">{{ $message }}</span> @enderror
                      </div>
                      <div class="col-md-6 mt-2">
                        <label for="defaultFormControlInput" class="form-label">Instagram</label>
                        <input
                          type="text"
                          class="form-control"
                         wire:model='setting.instagram'
                          placeholder="Instagram"
                          
                        />
                        @error('setting.instagram') <span class="text-danger">{{ $message }}</span> @enderror
                      </div>
                      <div class="col-md-12 mt-4">
                        <button class="btn btn-primary">Submit</button> 
                      </div>
                      </form>
