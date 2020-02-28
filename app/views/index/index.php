<?php

/**
 * @var Generator $directories
 */

?>
<div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
            <ul class="nav flex-column">
                <?php foreach($directories as $item) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <?= $item ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex flex-wrap pt-3 pb-2 mb-3 border-bottom">
            <form method="post" action="/file-manager/create-dir" class="form-inline">
                <div class="form-group mx-sm-3 mb-2">
                    <input type="text"
                           name="dirName"
                           class="form-control"
                           placeholder="New directory name">
                </div>
                <button type="submit" class="btn btn-primary mb-2">Create</button>
            </form>

            <form method="post"
                  action="/file-manager/upload-file"
                  enctype="multipart/form-data"
                  class="form-inline">
                <div class="form-group mx-sm-3 mb-2">
                    <input type="file"
                           name="attachement"
                           class="form-control">
                </div>
                <button type="submit" class="btn btn-success mb-2">Upload</button>
            </form>

            <form method="post"
                  action="/file-manager/upload-many-files"
                  enctype="multipart/form-data"
                  class="form-inline">
                <div class="form-group mx-sm-3 mb-2">
                    <input type="file"
                           multiple="multiple"
                           name="attachements[]"
                           class="form-control">
                </div>
                <button type="submit" class="btn btn-warning mb-2">Upload Many</button>
            </form>
        </div>
    </main>
</div>