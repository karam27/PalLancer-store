<x-dashborad-layout title="Edit Categories">
    @if (session()->has('success'))
        <div class="alert alert-success">
            <?= session()->get('success') ?>
    @endif
    </div>
    <form action="{{ route('admin.categories.update', $id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        @include('admin.categories._form', ['button_label' => 'Update'])
    </form>


    </body>

    </html>
</x-dashborad-layout>
