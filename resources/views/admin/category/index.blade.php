@extends('adminlte::page')

@section('title', 'Categories')

@section('content_header')
    <h1>Categories</h1>
@stop

@section('content')
    <table class="table">
    	<thead>
    		<tr>
    			<th>#</th>
    			<th>Image</th>
    			<th>Name</th>
    			<th>Slug</th>
    			<th></th>
    		</tr>
    	</thead>
    	<tbody>
    		@foreach($categories as $item)
    		<tr>
    			<td>{{$loop->iteration}}</td>
    			<td><img src="{{$item->img}}" alt="{{$item->name}}" style="width: 100px"></td>
    			<td>{{$item->name}}</td>
    			<td>{{$item->slug}}</td>
    			<td></td>
    		</tr>
    		@endforeach
    	</tbody>
    </table>
@stop
