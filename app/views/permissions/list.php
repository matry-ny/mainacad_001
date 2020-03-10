<?php

/**
 * @var models\Permission[] $permissions
 */

?>
<div class="row">
    <main role="main" class="col-md-12 ml-sm-auto col-lg-10 px-4">
        <a href="/permissions/create" class="btn btn-success">Create new permission</a>
    </main>

    <table class="table">

    <?php foreach ($permissions as $permission) : ?>

        <tr>
            <td><?= $permission->id ?></td>
            <td><?= $permission->title ?></td>
            <td><a href="/permissions/update?id=<?= $permission->id ?>" class="btn btn-sm btn-info">Update</a></td>
            <td><a href="/permissions/delete?id=<?= $permission->id ?>" class="btn btn-sm btn-danger">Delete</a></td>
        </tr>

    <?php endforeach; ?>

    </table>
</div>
