<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Menu;
use App\Models\RoleAccess;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::orderBy("name", "ASC")->where("name", "like", "%" . request("search") . "%")->paginate(10)->withQueryString();
        return Inertia::render("Role/index", ["roles" => $roles, "request" => request("search")]);
    }
    public function migrateMenu(Request $request)
    {
        $menus = json_decode($request->item);
        Menu::truncate();
        DB::beginTransaction();
        foreach ($menus as $value) {
            $parent = Menu::create([
                "route" => $value->route,
                "title" => $value->title,
            ]);
            RoleAccess::insert([
                [
                    "role_id" => 1,
                    "menu_id" => $parent->id
                ],
                [
                    "role_id" => 2,
                    "menu_id" => $parent->id
                ],
                [
                    "role_id" => 3,
                    "menu_id" => $parent->id
                ],
                [
                    "role_id" => 4,
                    "menu_id" => $parent->id
                ],
            ]);
            if (isset($value->submenu)) {

            
                foreach ($value->submenu as $sub) {
                    $subParent = Menu::create([
                        "route" => $sub->route,
                        "title" => $sub->title,
                        "group_title" => $value->title,
                        "group_id" => $parent->id
                    ]);
                    RoleAccess::insert([
                        [
                            "role_id" => 1,
                            "menu_id" => $subParent->id
                        ],
                        [
                            "role_id" => 2,
                            "menu_id" => $subParent->id
                        ],
                        [
                            "role_id" => 3,
                            "menu_id" => $subParent->id
                        ],
                        [
                            "role_id" => 4,
                            "menu_id" => $subParent->id
                        ],
                    ]);
                }
            }
        }
        DB::commit();
return        redirect("/");
    }
    public function add()
    {
        $menus = Menu::get();
        return Inertia::render("Role/form", ["menus" => $menus]);
    }
    public function edit(Role $role)
    {
        $menus = Menu::get();
        return Inertia::render("Role/form", ["menus" => $menus, "role" => $role->load("menuAccess")]);
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
        return redirect(route("master.role"))->with("message", "Data has been added.");
    }
    public function put(Request $request, Role $role)
    {
        $validate = $request->validate([
            "name" => "required",
            "landing_page" => "required"
        ]);
        $role->update($validate);
        $role->menuAccess()->sync($request->access);
        return redirect(route("master.role"))->with("message", "Data has been updated.");
    }
}
