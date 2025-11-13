<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleUsers extends Controller
{
    public function index()
    {
        return view('admin.users.index');
    }

    public function create()
    {
        return view('admin.users.index');
    }

    public function store(Request $request)
    {
        return view('admin.users.index');
    }

    public function show(string $id)
    {
        return view('admin.users.index');
    }

    public function edit(Role $role)
    {
        return view('admin.users.index');
    }

    public function update(Request $request, Role $role)
    {
        return view('admin.users.index');
    }

    public function destroy(Role $role)
    {
        return view('admin.users.index');
    }
}
