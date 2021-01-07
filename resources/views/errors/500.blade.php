@extends('errors::minimal')

@section('title', __('Server Error'))
<img width="400" style=" display: block;
    margin-left: auto;
    margin-right: auto;
    padding-top: 200px;
    " src="{{asset('errors/500.svg')}}" />
