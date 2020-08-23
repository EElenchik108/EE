@extends('adminlte::page')

@section('title', 'Add product')

@section('content_header')
    <h1>Edit category {{$category->name}}</h1>
@stop

@section('content')

    <form action="/admin/category/{{$category-id}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @include('admin.category._form')

    </form>
@stop

