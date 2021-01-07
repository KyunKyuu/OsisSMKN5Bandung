@extends('errors::minimal')

@section('title', __('Not Found'))
<img width="400" style=" display: block;
    margin-left: auto;
    margin-right: auto;
    padding-top: 200px;
    " src="{{asset('errors/404.svg')}}" />
