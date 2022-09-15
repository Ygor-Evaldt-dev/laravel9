<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUserFormRequest;
use App\Models\User;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use PhpParser\Node\Expr\FuncCall;
use Psy\CodeCleaner\ReturnTypePass;

use function PHPUnit\Framework\returnSelf;

class UserController extends Controller
{
    protected $model;

    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function index(Request $request)
    {
        $users = $this->model
            ->getUsers(
                search: $request->search ?? ''
            );

        return view('users/index', compact('users'));
    }

    public function details($id)
    {
        if (!$user = $this->model->find($id)) {
            return redirect()->route('users.index');
        }

        $user = $this->model->find($id);

        return view('users/details', compact('user'));
    }

    public function create()
    {
        return view('users/create');
    }

    public function store(StoreUpdateUserFormRequest $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        $this->model->create($data);

        return redirect()->route('users.index');

        // Metodo alternativo para criar usuário
        /*
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->save();
        */
    }

    public function edit($id)
    {
        if (!$user = $this->model->find($id)) {
            return redirect()->route('users.index');
        }

        return view('users.edit', compact('user'));
    }

    public function update(StoreUpdateUserFormRequest $request, $id)
    {
        if (!$user = $this->model->find($id)) {
            return redirect()->route('users.index');
        }

        $data = $request->only('name', 'email');
        if ($request->password) {
            $data['password'] = bcrypt($request->password);
        }

        $user->update($data);
        return redirect()->route('users.index');
    }

    public function delete($id)
    {
        if (!$user = $this->model->find($id)) {
            return redirect()->route('users.index');
        }

        $user->delete($id);
        return redirect()->route('users.index');
    }
}
