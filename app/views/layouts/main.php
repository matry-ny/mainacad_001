<?php

/**
 * @var string $content
 */

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Dashboard Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="/public/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/public/css/dashboard.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">MainAPP</a>
    <ul class="navbar-nav px-3 flex-row bd-navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="/roles/list">Roles</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/permissions/list">Permissions</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/profile/sign-out">Sign out</a>
        </li>
    </ul>
</nav>

<div class="container-fluid">
    <?= $content ?>
</div>
</body>
</html>