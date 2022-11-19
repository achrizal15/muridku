<?php

namespace App\Http\Controllers;

use App\Models\TahunAjaran;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TahunAjaranController extends Controller
{
    public function index(Request $request)
    {
        $tahunAjaran = TahunAjaran::orderBy("name", "ASC")
            ->where("name", "like", "%" . $request->search . "%")
            ->paginate(10)
            ->withQueryString();
        return Inertia::render("TahunAjaran/index", ["tahunAjaran" => $tahunAjaran]);
    }
    public function add()
    {
        return Inertia::render("TahunAjaran/form");
    }
    public function edit(TahunAjaran $tahunAjaran)
    {
        return Inertia::render("TahunAjaran/form", ["tahunAjaran" => $tahunAjaran]);
    }
    public function destroy(TahunAjaran $tahunAjaran)
    {
        $tahunAjaran->delete();
        return redirect(route("master.tahun-ajaran"))->with("message", "Data has been deleted succesfully.");
    }
    public function store(Request $request)
    {
        $validate = $request->validate([
            "name" => "required",
        ]);
        TahunAjaran::create($validate);
        return redirect(route("master.tahun-ajaran"))->with("message", "Data has been added.");
    }
    public function put(Request $request, TahunAjaran $tahunAjaran)
    {
        $validate = $request->validate([
            "name" => "required",
        ]);
        $tahunAjaran->update($validate);
        return redirect(route("master.tahun-ajaran"))->with("message", "Data has been updated.");
    }
}
