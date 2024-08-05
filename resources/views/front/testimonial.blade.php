@extends('front.master')
@section('title','Testimonial')
@section('team-testimonial-active','active')
@section('hero')
@include('front.partials.hero2',['PageName'=>'Testimonial'])
@endsection
@section('content')
   <!-- Testimonial Start -->
   
     @livewire('front.components.testmonials-component')
     </div>      
        <!-- Testimonial End -->
        
        

        

@endsection