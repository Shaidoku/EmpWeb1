<?php

namespace App\Http\Controllers\Admin;

use App\Rol;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index()
    {
    	$users = User::all();
    	return view('admin.users.index', compact('users'));
    }

    public function destroy(User $user)
    {

      $user->delete();

      return back()->withFlash('El usuario ha sido eliminada');
    }

    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    public function create()
    {
        $rols = Rol::all();
        return view('admin.users.create', compact('rols'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'rol_id' => 'required'

        ]);

        $user = new User;
        $user->name = $request->get('name');
        $user->last_name = $request->get('last_name');
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('password'));
        $user->rol_id = $request->get('rol_id');;
        $user->save();
        return redirect()->route('admin.users.index', $user)->with('flash', 'Usuario creado');
    }
}
