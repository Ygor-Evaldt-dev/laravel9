<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

use function PHPUnit\Framework\returnSelf;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get();

        return view('users/index', compact('users'));
    }

    public function show($id)
    {
        if (!$user = User::find($id)) {
            return redirect()->route('user.index');
        }

        $user = User::find($id);

        return view('users/show', compact('user'));
    }
}
