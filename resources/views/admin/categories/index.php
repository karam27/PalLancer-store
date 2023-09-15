<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>

<body>
    <h2 class="mb-4 mt-4">Categories List</h2>
    <?php if (session()->has('success')) : ?>
        <div class="alert alert-success">
            <?= session()->get('success') ?>
        <?php endif ?>
        </div>
        <form action="/admin/categories" method="get" class="d-flex">
            <input type="text" name="name" class="form-control me-2" placeholder="Serach By Name">
            <select name="parnet_id" class="form-control me-2">
                <option value="">All Categories</option>
                <?php foreach ($parents as $parent) : ?>
                    <option value="<?= $parent->id ?>"><?= $parent->name ?></option>
                <?php endforeach ?>
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
                <?php foreach ($categories as $category) : ?>
                    <tr>
                        <td><?= $category->id ?></td>
                        <td><a href="/admin/categories/<?= $category->id ?>/edit"><?= $category->name ?></a></td>
                        <td><?= $category->parent_id ?></td>
                        <td><?= $category->created_at ?></td>
                        <td><?= $category->status ?></td>
                        <td>
                            <form action="/admin/categories/<?= $category->id ?>" method="post">
                                <?= csrf_field() ?>
                                <input type="hidden" name="_method" value="delete">
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>

</body>

</html>
