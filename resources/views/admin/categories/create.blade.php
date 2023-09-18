@extends('layouts.dashboard')
@section('title', 'Create Category')
@section('content')

    <form action="/admin/categories/create" method="post" enctype="multipart/form-data">
        @csrf
        @include('admin.categories._form',[
        'button_label'=>'Add'
        ])
    </form>
    </div>

    </body>

    </html>
@endsection
