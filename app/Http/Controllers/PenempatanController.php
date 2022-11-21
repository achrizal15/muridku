<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Penempatan;
use App\Models\Siswa;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PenempatanController extends Controller
{
    public function index(Request $request)
    {
        $penempatan = Penempatan::latest()
            ->with(["tahunAjaran", "kelas", "siswa", "oldKelas"])
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
        return Inertia::render("Penempatan/index", ["penempatan" => $penempatan]);
    }
    public function add()
    {
        $kelas = Kelas::orderBy("name", "ASC")->get();
        $tahunAjaran = TahunAjaran::orderBy("name", "ASC")->get();
        $siswa = Siswa::orderBy("name", "ASC")->with("kelas")->get();
        return Inertia::render("Penempatan/form", ["kelas" => $kelas, "tahunAjaran" => $tahunAjaran, "siswa" => $siswa]);
    }
    public function store(Request $request)
    {
        $validate = $request->validate([
            "siswa_id" => "required",
            "kelas_id" => "required",
            "tahun_ajaran_id" => "required"
        ]);
        $siswa = Siswa::find($request->siswa_id);
        $validate["old_kelas_id"] = $siswa->kelas_id;
        Penempatan::create($validate);
        $siswa->update(
            ["kelas_id" => $request->kelas_id,"tahun_ajaran_id"=>$request->tahun_ajaran_id]
        );
        return redirect(route("transaksi.penempatan"))->with("message", "Data has been added.");
    }
}
