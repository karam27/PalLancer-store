<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Categories</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2 class="my-4">Add category</h2>
        <?php if(session()->has('success')):?>
        <div class="alert alert-success">
            <?= session()->get('success') ?>
            <?php endif?>
        </div>
        <form action="/admin/categories/create" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
                <label for="">Name:</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="form-group mb-3">
                <label for="">Description:</label>
                <textarea name="description" class="form-control"></textarea>
            </div>
            <div class="form-group mb-3">
                <label for="">Parent</label>
                <select name="parnet_id" class="form-control">
                    @foreach ($parents as $parent)
                        <option value="<?= $parent->id ?>"><?= $parent->name ?></option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="">Image:</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Status:</label>
                <label for=""> <input type="radio" name="status" value="active">
                    Active</label>
                <label for=""> <input type="radio" name="status" value="inactive">
                    inactive</label>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>
    </div>

</body>

</html>
