<?php

/**
 * @var models\Permission[] $permissions
 */

?>

<div class="row">
    <main role="main" class="col-12">
        <form method="post">
            <label for="permission-title">Title</label>
            <input type="text" name="title" class="form-control" id="permission-title">

            <div class="row">
            <?php foreach ($permissions as $permission) : ?>
                <div class="col-4">
                    <input type="checkbox"
                           id="permission-id-<?= $permission->id ?>"
                           name="permissions[]"
                           value="<?= $permission->id ?>">
                    <label for="permission-id-<?= $permission->id ?>">
                        <?= $permission->title ?>
                    </label>
                </div>

            <?php endforeach; ?>
            </div>

            <input type="submit" class="btn btn-success" value="Save">
        </form>
    </main>
</div>
