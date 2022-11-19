<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
        $siswa = Siswa::orderBy("name", "ASC")
        ->with(["tahunAjaran","kelas"])
            ->where("name", "like", "%" . $request->search . "%")
            ->orWhereHas("kelas", function ($query) use ($request) {
                return $query->where("name", "like", "%" . $request->search . "%");
            })
            ->orWhereHas("tahunAjaran", function ($query) use ($request) {
                return $query->where("name", "like", "%" . $request->search . "%");
            })
            ->paginate(10)
            ->withQueryString();
        return Inertia::render("Siswa/index", ["siswa" => $siswa]);
    }
    public function add()
    {
        $kelas = Kelas::orderBy("name", "ASC")->get();
        $tahunAjaran = TahunAjaran::orderBy("name", "ASC")->get();
        return Inertia::render("Siswa/form", ["kelas" => $kelas, "tahunAjaran" => $tahunAjaran]);
    }
    public function edit(Siswa $siswa)
    {
        $kelas = Kelas::orderBy("name", "ASC")->get();
        $tahunAjaran = TahunAjaran::orderBy("name", "ASC")->get();
        return Inertia::render("Siswa/form", ["kelas" => $kelas, "tahunAjaran" => $tahunAjaran,"siswa"=>$siswa->load(["kelas","tahunAjaran"])]);
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
            "kelas_id"=>"required",
            "tahun_ajaran_id"=>"required"
        ]);
        Siswa::create($validate);
        return redirect(route("master.siswa"))->with("message", "Data has been added.");
    }
    public function put(Request $request, Siswa $siswa)
    {
        $validate = $request->validate([
            "name" => "required",
            "kelas_id"=>"required",
            "tahun_ajaran_id"=>"required" 
        ]);
        $siswa->update($validate);
        return redirect(route("master.siswa"))->with("message", "Data has been updated.");
    }
}
