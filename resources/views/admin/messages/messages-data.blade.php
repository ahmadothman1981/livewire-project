<div>
    <div class="mb-3">
         <input type="text" class="form-control w-25" placeholder="Search..." aria-label="Search..." wire:model.live="search">
    </div>
    
 <div class="table-responsive text-nowrap">
    
    @if(is_countable($data) && count($data)  > 0)
                  <table class="table">
                    <thead>
                      <tr>
                        <th width="30%">Name</th>
                        <th width="30%">Email</th>
                        <th width="20%">Subject</th>
                        <th width="20%">Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach($data as $d)
                      <tr>
                        <td> <strong>{{$d->name}}</strong></td>
                        <td>{{$d->email}} </td>
                       
                        <td>{{$d->subject}} <i class=" text-secondary mb-3" ></i></td>

                        <td>
                        @if($d->status == 0)
                        <span class="badge bg-label-primary me-1">Unread</span> 
                        </td>
                        @else
                        <span class="badge bg-label-success me-1">Read</span>
                        @endif
                        <td>
                            
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              
                              <a class="dropdown-item" href="#" wire:click.prevent="$dispatch('messageshow' , {id:{{$d->id}}})"
                                ><i class="bx bx-trash me-1"></i> Show</a
                              >
                              <a class="dropdown-item" href="#" wire:click.prevent="$dispatch('messagedelete' , {id:{{$d->id}}})"
                                ><i class="bx bx-trash me-1"></i> Delete</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
                     @endforeach
                    </tbody>
                  </table>
                  {{$data->links()}}
                  @else
                  <p>No data found</p>
                  @endif
   </div>
   </div>