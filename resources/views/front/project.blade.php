@extends('front.master')
@section('title','Projects')
@section('projects-active','active')


@section('hero')
@include('front.partials.hero2',['PageName'=>'Project'])
@endsection
@section('content')

@livewire('front.components.projects-component')


@endsection