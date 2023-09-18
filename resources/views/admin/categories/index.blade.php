@extends('layouts.dashboard')
@section('content')
@section('title', ' Categories List')

@if (session()->has('success'))
    <div class="alert alert-success">
        <?= session()->get('success') ?>
@endif
</div>
<form action="/admin/categories" method="get" class="d-flex">
    <input type="text" name="name" class="form-control me-2" placeholder="Serach By Name">
    <select name="parnet_id" class="form-control me-2">
        <option value="">All Categories</option>
        @foreach ($parents as $parent)
            <option value=" {{ $parent->id }}"> {{ $parent->name }} </option>
        @endforeach
    </select>
    <button type="submit" class="btn btn-secondary">Filter</button>
</form>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Parent ID</th>
            <th>Created At</th>
            <th>Status</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
            <tr>
                <td> {{ $category->id }} </td>
                <td><a href="/admin/categories/ {{ $category->id }}/edit">{{ $category->name }}</a></td>
                <td> {{ $category->parent_id }}</td>
                <td>{{ $category->created_at }}</td>
                <td>{{ $category->status }} </td>
                <td>
                    <form action="/admin/categories/ {{ $category->id }} " method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
