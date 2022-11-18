<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Inertia\Inertia;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::orderBy("name", "ASC")->paginate()->withQueryString();
        return Inertia::render("Role/index", ["roles" => $roles]);
    }
    public function add()
    {
        return Inertia::render("Role/form");
    }
    public function store()
    {
    }
}
