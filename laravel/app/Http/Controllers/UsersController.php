<?php

namespace App\Http\Controllers;

/**
 * Class UsersController
 * @package App\Http\Controllers
 */
class UsersController extends Controller
{
    public function index()
    {
        var_dump(1);
    }

    public function view(int $id, string $name)
    {
        var_dump($id, $name);
    }
}
