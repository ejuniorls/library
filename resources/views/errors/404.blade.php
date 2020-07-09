<h2>{{ $exception->getMessage() }}</h2>


@extends('errors::minimal')

@section('title', __('Page Not Found'))
@section('code', '404')
@section('message', __('Page Not Found'))
