@extends('admin.master')
@section('testmonials-active','active')
@section('title','Testmonials')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
            <div class="mb-3">
                <h4 class="fw-bold py-3 mb-4 d-inline" > Testmonials</h4>
                
            </div>
             
            
              <div class="card mb-4">
                    <div class="card-body ">
               @livewire('admin.testmonials.testmonials-data')
               @livewire('admin.testmonials.testmonials-update')
               @livewire('admin.testmonials.testmonials-delete')
               @livewire('admin.testmonials.testmonials-show')
                    </div>
                  </div>
               
            </div>
@endsection