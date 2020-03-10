<?php

/**
 * @var models\Role $role
 */

?>
<div class="row">
    <main role="main" class="col-12">
        <form method="post">
            <label for="permission-title">Title</label>
            <input type="text"
                   name="title"
                   value="<?= $role->title ?>"
                   class="form-control"
                   id="permission-title">

            <input type="submit" class="btn btn-success" value="Save">
        </form>
    </main>
</div>
