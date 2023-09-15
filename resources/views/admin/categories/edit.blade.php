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
        <h2 class="my-4">Edit Category</h2>
        <?php if (session()->has('success')) : ?>
        <div class="alert alert-success">
            <?= session()->get('success') ?>
            <?php endif ?>
        </div>
        <form action="/admin/categories/<?= $id ?>" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" value="put">
            <div class="form-group mb-3">
                <label for="">Name:</label>
                <input type="text" name="name" class="form-control" value="<?= $category->name ?>">
            </div>

            <div class="form-group mb-3">
                <label for="">Description:</label>
                <textarea name="description" class="form-control"><?= $category->description ?></textarea>
            </div>
            <div class="form-group mb-3">
                <label for="">Parent</label>
                <select name="parnet_id" class="form-control">
                    @foreach ($parents as $parent)
                        <option value="<?= $parent->id ?>" <?php if($parent->id==$category->parent_id):?> selected <?php endif?>>
                            <?= $parent->name ?></option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="">Image:</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Status:</label>
                <label for=""> <input type="radio" name="status" value="active" <?php if($category->status=='active'):?> checked
                        <?php endif?>>
                    Active</label>
                <label for=""> <input type="radio" name="status" value="inactive" <?php if($category->status=='active'):?> checked
                        <?php endif?>>
                    inactive</label>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>

</body>

</html>
