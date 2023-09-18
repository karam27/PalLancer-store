@extends('layouts.dashboard')
@section('title', 'Edit Category')
@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success">
            <?= session()->get('success') ?>
    @endif
    </div>
    <form action="/admin/categories/{{ $id }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        @include('admin.categories._form', ['button_label' => 'Update'])
    </form>


    </body>

    </html>
@endsection
