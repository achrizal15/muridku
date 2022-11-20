<?php

namespace App\Http\Controllers;

use App\Models\Penempatan;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PenempatanController extends Controller
{
    public function index(Request $request)
    {
        $siswa = Penempatan::latest()
            ->with(["tahunAjaran", "kelas", "siswa"])
            ->orWhereHas("siswa", function ($query) use ($request) {
                return $query->where("name", "like", "%" . $request->search . "%")
                    ->orWhere("nis", "like", "%" . $request->search . "%");
            })
            ->orWhereHas("kelas", function ($query) use ($request) {
                return $query->where("name", "like", "%" . $request->search . "%")
                ->orWhere("name", "like", "%" . $request->search . "%");
            })
            ->orWhereHas("tahunAjaran", function ($query) use ($request) {
                return $query->where("name", "like", "%" . $request->search . "%");
            })
            ->paginate(10)
            ->withQueryString();
            dd($siswa);
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
        return Inertia::render("Siswa/form", ["kelas" => $kelas, "tahunAjaran" => $tahunAjaran, "siswa" => $siswa->load(["kelas", "tahunAjaran"])]);
    }
    public function destroy(Siswa $siswa)
    {
        Penempatan::where("siswa_id", $siswa->id)->delete();
        $siswa->delete();
        return redirect(route("master.siswa"))->with("message", "Data has been deleted succesfully.");
    }
    public function store(Request $request)
    {
        $validate = $request->validate([
            "name" => "required",
            "kelas_id" => "required",
            "tahun_ajaran_id" => "required"
        ]);
        $siswa = Siswa::create($validate);
        Penempatan::create([
            "siswa_id" => $siswa->id,
            "kelas_id" => $siswa->kelas_id,
            "tahun_ajaran_id" => $siswa->tahun_ajaran_id,
        ]);
        return redirect(route("master.siswa"))->with("message", "Data has been added.");
    }
    public function put(Request $request, Siswa $siswa)
    {
        $validate = $request->validate([
            "name" => "required",
            "kelas_id" => "required",
            "tahun_ajaran_id" => "required"
        ]);
        $siswa->update($validate);
        $penempatan = Penempatan::latest()->where("siswa_id", $siswa->id)->first();
        $penempatan->update([
            "kelas_id" => $siswa->kelas_id,
            "tahun_ajaran_id" => $siswa->tahun_ajaran_id,
        ]);

        return redirect(route("master.siswa"))->with("message", "Data has been updated.");
    }
}
