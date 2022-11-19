<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $roles = User::orderBy("name", "ASC")
            ->with("role")
            ->where("name", "like", "%" . $request->search . "%")
            ->orWhereHas("role", function ($query) use ($request) {
                return $query->where("name", "like", "%" . $request->search . "%");
            })
            ->paginate(10)
            ->withQueryString();
        return Inertia::render("User/index", ["user" => $roles]);
    }
    public function add()
    {
        $roles = Role::get();
        return Inertia::render("User/form", ["roles" => $roles]);
    }
    public function edit(User $user)
    {
        $roles = Role::get();
        return Inertia::render("User/form", ["roles" => $roles, "user" => $user]);
    }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect(route("master.user"))->with("message", "Data has been deleted succesfully.");
    }
    public function store(Request $request)
    {
        $validate = $request->validate([
            "name" => "required",
            "role_id" => "required",
            "password" => "required",
            "email" => "unique:users,email|required"
        ]);
        $validate["password"] = Hash::make($validate["password"]);
        User::create($validate);
        return redirect(route("master.user"))->with("message", "Data has been added.");
    }
    public function put(Request $request, User $user)
    {
        $rules = [
            "name" => "required",
            "role_id" => "required",
            "email" => "required"
        ];
        if ($request->email != $user->email) {
            $rules["email"] .= "|unique:users,email";
        }
        $validate = $request->validate($rules);
        if ($request->password != "") {
            $validate["password"] = Hash::make($request->password);
        }
        $user->update($validate);
        return redirect(route("master.user"))->with("message", "Data has been updated.");
    }
}
