<x-dashborad-layout title="Add Categories">

    <form action="{{ route('admin.categories.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @include('admin.categories._form', [
            'button_label' => 'Add',
        ])
    </form>
    </div>

    </body>

    </html>
</x-dashborad-layout>
