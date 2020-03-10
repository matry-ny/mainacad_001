<?php

/**
 * @var models\Permission $permission
 */

?>
<div class="row">
    <main role="main" class="col-12">
        <form method="post">
            <label for="permission-title">Title</label>
            <input type="text"
                   name="title"
                   value="<?= $permission->title ?>"
                   class="form-control"
                   id="permission-title">

            <input type="submit" class="btn btn-success" value="Save">
        </form>
    </main>
</div>
