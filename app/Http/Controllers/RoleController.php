<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Menu;
use Illuminate\Http\Request;
use Inertia\Inertia;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::orderBy("name", "ASC")->where("name", "like", "%" . request("search") . "%")->paginate(10)->withQueryString();
        return Inertia::render("Role/index", ["roles" => $roles, "request" => request("search")]);
    }
    public function add()
    {
        $menus = Menu::get();
        return Inertia::render("Role/form", ["menus" => $menus]);
    }
    public function edit(Role $role)
    {
        $menus = Menu::get();
        return Inertia::render("Role/form", ["menus" => $menus,"role"=>$role->load("menuAccess")]);
    }
    public function destroy(Role $role)
    {
        $role->menuAccess()->detach();
        $role->delete();
        return redirect(route("master.role"))->with("message", "Data has been deleted succesfully.");
    }
    public function store(Request $request)
    {
        $validate = $request->validate([
            "name" => "required",
            "landing_page" => "required"
        ]);
        $role = Role::create($validate);
        $role->menuAccess()->sync($request->access);
        return redirect(route("master.role"))->with("message","Data has been added.");
    }
    public function put(Request $request, Role $role)
    {
        $validate = $request->validate([
            "name" => "required",
            "landing_page" => "required"
        ]);
        $role->update($validate);
        $role->menuAccess()->sync($request->access);
        return redirect(route("master.role"))->with("message","Data has been updated.");
    }
}
