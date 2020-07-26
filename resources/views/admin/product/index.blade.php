@extends('adminlte::page')

@section('title', 'Products')

@section('content_header')
    <h1>Products 
    <a href="/admin/product/create" class="btn btn-primary btn-sm">Add product</a>
	</h1>
@stop

@section('content')

@include('admin._massages')

    <table class="table">
    	<thead>
    		<tr>
    			<th>#</th>
    			<th>Image</th>
    			<th>Name</th>
    			<th>Slug</th>
                <th>Price</th>
                <th>Description</th>
                <th>Recommended</th>
    			<th>Category</th>
                <th></th>
    		</tr>
    	</thead>
    	<tbody>
    		@foreach($products as $item)
    		<tr>
    			<td>{{$loop->iteration}}</td>
    			<td><img src="{{$item->img}}" alt="{{$item->name}}" style="width: 100px"></td>
    			<td>{{$item->name}}</td>
    			<td>{{$item->slug}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->description}}</td>
                <td>{{$item->recommended}}</td>
                <td>{{$item->category->name}}</td>
    			<td></td>
    		</tr>
    		@endforeach
    	</tbody>
    </table>
@stop
