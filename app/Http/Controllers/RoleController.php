<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Inertia\Inertia;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::orderBy("name", "ASC")->where("name", "like", "%" . request("search") . "%")
            ->paginate()->withQueryString();
   
        return Inertia::render("Role/index", ["roles" => $roles, "request" => request("search")]);
    }
    public function add()
    {
        return Inertia::render("Role/form");
    }
    public function store()
    {
        return redirect(route("master.role.add"));
    }
}
