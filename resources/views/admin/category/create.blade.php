@extends('adminlte::page')

@section('title', 'Add category')

@section('content_header')
    <h1>Add category</h1>
@stop

@section('content')

@include('admin._massages')
    <!-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif -->

    <form action="/admin/category" method="POST" enctype="multipart/form-data">
        <!-- @csrf
        <div class="form-group">
            <label for="name">Category Name</label>
            <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="slug">Category Slug</label>
            <input type="text" id="slug" name="slug" class="form-control @error('slug') is-invalid @enderror" value="{{ old('slug') }}">
            @error('slug')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="img">Category Image</label>
            <input type="file" id="img" name="img" class="form-control @error('img') is-invalid @enderror">
            @error('img')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        
        <button class="btn btn-primary">Save</button> -->
        @include('admin.category._form')

    </form>
@stop
