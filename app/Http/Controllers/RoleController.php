<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    // hak akses
    public function __construct()
    {
        $this->middleware('auth');
    }
    // insert
    public function index(): View
    {
        $roles = Role::latest()->paginate(5);
        return view('role.index', compact('roles'));
    }

    // create
    public function create(): View
    {
        return view('role.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        Role::create([
            'name' => $request->name
        ]);
        return redirect()->route('role.index')->with(['success', 'data berhasil']);
    }
    // detail
    public function show(string $id): View
    {
        $role = Role::findOrFail($id);

        return view('role.show', compact('role'));
    }
    // edit
    public function edit(string $id): View
    {

        $role = Role::findOrFail($id);
        return view('role.edit', compact('role'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        $role = Role::findOrFail($id);

        if ($request) {
            $role->update([
                'name' => $request->name
            ]);
        } else {
            $role->update([
                'name' => $request->name
            ]);
            return redirect()->route('role.index')->with(['success', 'data berhasil']);
        }
    }
    // delete
    public function destroy($id): RedirectResponse
    {
        $role = Role::findOrFail($id);
        $role->delete();

        return redirect()->route('role.index')->with(['success', 'data berhasil']);
    }
}