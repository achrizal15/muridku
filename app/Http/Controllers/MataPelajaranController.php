<?php

namespace App\Http\Controllers;

use App\Models\MataPelajaran;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MataPelajaranController extends Controller
{
    public function index(Request $request)
    {
        $mataPelajaran = MataPelajaran::orderBy("name", "ASC")
            ->where("name", "like", "%" . $request->search . "%")
            ->with("user")
            ->paginate(10)
            ->withQueryString();
        return Inertia::render("MataPelajaran/index", ["mataPelajaran" => $mataPelajaran]);
    }
    public function add()
    {
        $users = User::whereHas("role", function ($query) {
            return $query->where("name","like", "%Bidang Studi%");
        })->with("role")->get();
        return Inertia::render("MataPelajaran/form", ["users" => $users]);
    }
    public function edit(MataPelajaran $mataPelajaran)
    {
        $users = User::whereHas("role", function ($query) {
            return $query->where("name","like", "%Bidang Studi%");
        })->with("role")->get();
        
        return Inertia::render("MataPelajaran/form", ["mataPelajaran" => $mataPelajaran->load("user"), "users" => $users]);
    }
    public function destroy(MataPelajaran $mataPelajaran)
    {
        $mataPelajaran->delete();
        return redirect(route("master.mata-pelajaran"))->with("message", "Data has been deleted succesfully.");
    }
    public function store(Request $request)
    {
        $validate = $request->validate([
            "name" => "required",
            "user_id" => "required",
            "kkm" => "required"
        ]);
        MataPelajaran::create($validate);
        return redirect(route("master.mata-pelajaran"))->with("message", "Data has been added.");
    }
    public function put(Request $request, MataPelajaran $mataPelajaran)
    {
        $validate = $request->validate([
            "name" => "required",
            "user_id" => "required",
            "kkm" => "required"
        ]);
        $mataPelajaran->update($validate);
        return redirect(route("master.mata-pelajaran"))->with("message", "Data has been updated.");
    }
}