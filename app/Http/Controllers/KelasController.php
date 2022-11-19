<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use Inertia\Inertia;

class KelasController extends Controller
{
    public function index(Request $request)
    {
        $siswa = Kelas::orderBy("name", "ASC")
            ->where("name", "like", "%" . $request->search . "%")
            ->paginate(10)
            ->withQueryString();
        return Inertia::render("Siswa/index", ["siswa" => $siswa]);
    }
    public function add()
    {
        return Inertia::render("Siswa/form");
    }
    public function edit(Siswa $siswa)
    {
        return Inertia::render("Siswa/form", ["siswa" => $siswa]);
    }
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
        return redirect(route("master.siswa"))->with("message", "Data has been deleted succesfully.");
    }
    public function store(Request $request)
    {
        $validate = $request->validate([
            "name" => "required",
        ]);
        Siswa::create($validate);
        return redirect(route("master.siswa"))->with("message", "Data has been added.");
    }
    public function put(Request $request, Siswa $siswa)
    {
        $validate = $request->validate([
            "name" => "required",
        ]);
        $siswa->update($validate);
        return redirect(route("master.siswa"))->with("message", "Data has been updated.");
    }
}

