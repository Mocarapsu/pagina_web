<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function index() 
    {
        $roles = Role::all();
        return view('roles.index', compact('roles'));

    }
    public function create()
    {
        $role = new Role; 
        $role->name='Admin';
        $role->key_name = 'Admin';
    }
    public function update()
    {
        $role =Role::find(1);
        //$role =Role::where('id', 1)->first();
        $role->name='Gerente';
        $role->key_name = 'gerente';
    }

    public function delete()
    {
        Role::find(1)->delete();
    }
}
