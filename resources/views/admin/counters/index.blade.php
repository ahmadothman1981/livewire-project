@extends('admin.master')
@section('counters-active','active')
@section('title','Counters')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
            <div class="mb-3">
                <h4 class="fw-bold py-3 mb-4 d-inline" > Counters</h4>
                <button
                          type="button"
                          class="btn btn-primary btn-sm mb-2 mx-2"
                          data-bs-toggle="modal"
                          data-bs-target="#createModal"
                        >
                         Add New
                        </button>
                        
                    @livewire('admin.counters-crud.counters-create')
            </div>
              

              <div class="card mb-4">
                    <div class="card-body ">
                     @livewire('admin.counters.counters-data')
                      @livewire('admin.counters-crud.counters-update') 
                      @livewire('admin.counters-crud.counters-delete')
                        
                    </div>
                  </div>
               
            </div>
@endsection