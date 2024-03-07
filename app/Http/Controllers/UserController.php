<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::latest()->paginate(15);
        return view('akun.index', compact('users'));
    }
    public function create()
    {
        $role = Role::all();
        return view('akun.create', compact('role'));
    }
    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'role_id' => 'required|integer',

        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request['password']),
            'role_id' => $request->role_id,
        ]);
        return redirect()->route('akun.index')->with(['success', 'data berhasil']);
    }
}