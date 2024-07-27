@extends('admin.master')
@section('setting-active','active')
@section('title','setting')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"> Setting</h4>

              <div class="card mb-4">
                    <div class="card-body ">
                        @livewire('admin.setting.update-setting-component')
                        
                    </div>
                  </div>
              
            </div>
@endsection