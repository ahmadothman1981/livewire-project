@extends('admin.master')
@section('categories-active','active')
@section('title','Categories')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
            <div class="mb-3">
                <h4 class="fw-bold py-3 mb-4 d-inline" > Categories</h4>
                <button
                          type="button"
                          class="btn btn-primary btn-sm mb-2 mx-2"
                          data-bs-toggle="modal"
                          data-bs-target="#createModal"
                        >
                         Add New Category
                        </button>
                        @livewire('admin.categories.categories-create')
            </div>
             
            
              <div class="card mb-4">
                    <div class="card-body ">
                 @livewire('admin.categories.categories-data')
                 @livewire('admin.categories.categories-update')
                 @livewire('admin.categories.categories-delete')
                    </div>
                  </div>
               
            </div>
@endsection