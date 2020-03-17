<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\DB;

/**
 * Class UsersController
 * @package App\Http\Controllers
 */
class UsersController extends Controller
{
    public function index()
    {
        var_dump(DB::select('select * from `permissions`'));exit;
//        var_dump(User::all());exit;

//        $users = User::query()->paginate(10);
        $users = [];
        return view('users.list', ['users' => $users]);
    }

    public function view(int $id, string $name)
    {
        var_dump($id, $name);
    }
}
