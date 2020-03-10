<?php

/**
 * @var models\Role[] $roles
 */

?>
<div class="row">
    <main role="main" class="col-md-12 ml-sm-auto col-lg-10 px-4">
        <a href="/roles/create" class="btn btn-success">Create new role</a>
    </main>

    <table class="table">

    <?php foreach ($roles as $role) : ?>

        <tr>
            <td><?= $role->id ?></td>
            <td><?= $role->title ?></td>
            <td><a href="/roles/update?id=<?= $role->id ?>" class="btn btn-sm btn-info">Update</a></td>
            <td><a href="/roles/delete?id=<?= $role->id ?>" class="btn btn-sm btn-danger">Delete</a></td>
        </tr>

    <?php endforeach; ?>

    </table>
</div>
