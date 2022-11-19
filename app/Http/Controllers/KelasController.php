<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class KelasController extends Controller
{
    public function index(Request $request)
    {
        $kelas = Kelas::orderBy("name", "ASC")
            ->where("name", "like", "%" . $request->search . "%")
            ->with("user")
            ->paginate(10)
            ->withQueryString();
        return Inertia::render("Kelas/index", ["kelas" => $kelas]);
    }
    public function add()
    {
        $users = User::whereHas("role", function ($query) {
            return $query->where("name", "Wali Kelas");
        })->with("role")->get();
        return Inertia::render("Kelas/form", ["users" => $users]);
    }
    public function edit(Kelas $kelas)
    {
        $users = User::whereHas("role", function ($query) {
            return $query->where("name", "Wali Kelas");
        })->with("role")->get();
        return Inertia::render("Kelas/form", ["kelas" => $kelas->load("user"), "users" => $users]);
    }
    public function destroy(Kelas $kelas)
    {
        $kelas->delete();
        return redirect(route("master.kelas"))->with("message", "Data has been deleted succesfully.");
    }
    public function store(Request $request)
    {
        $validate = $request->validate([
            "name" => "required",
            "user_id" => "required"
        ]);
        Kelas::create($validate);
        return redirect(route("master.kelas"))->with("message", "Data has been added.");
    }
    public function put(Request $request, Kelas $kelas)
    {
        $validate = $request->validate([
            "name" => "required",
            "user_id"=>"required"
        ]);
        $kelas->update($validate);
        return redirect(route("master.kelas"))->with("message", "Data has been updated.");
    }
}
