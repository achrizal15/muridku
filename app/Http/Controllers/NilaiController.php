<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\MataPelajaran;
use App\Models\Nilai;
use App\Models\NilaiDetail;
use App\Models\Siswa;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class NilaiController extends Controller
{
    public function add()
    {
        $kelas = Kelas::orderBy("name", "ASC")->get();
        $tahunAjaran = TahunAjaran::orderBy("name", "ASC")->get();
        $mataPelajaran = MataPelajaran::orderBy("name", "ASC")->get();
        return Inertia::render("InputNilai/form", [
            "kelas" => $kelas,
            "tahunAjaran" => $tahunAjaran,
            "mataPelajaran" => $mataPelajaran
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            "kelas_id" => "required",
            "mata_pelajaran_id" => "required",
            "tahun_ajaran_id" => "required",
            "semester" => "required",
            "nilai" => "required",
        ]);
        DB::beginTransaction();
        $nilai = Nilai::create([
            "kelas_id" => $request->kelas_id,
            "mata_pelajaran_id" => $request->mata_pelajaran_id,
            "tahun_ajaran_id" => $request->tahun_ajaran_id,
            "semester" => $request->semester,
        ]);
        $detailNilai = $request->collect("nilai")->map(function ($nd) use ($nilai) {
            return [
                "nilai_id" => $nilai->id,
                "siswa_id" => $nd['id'],
                "uts" => $nd["uts"],
                "tugas" => $nd["tugas"],
                "uas" => $nd["uas"]
            ];
        });
        NilaiDetail::insert($detailNilai->toArray());
        DB::commit();
        return redirect(route("transaksi.input-nilai"))->with('message', 'Nilai berhasil di input.');
    }
    public function getSiswa(Request $request)
    {
        $siswa = Siswa::orderBy("nis", "ASC")->where("kelas_id", $request->kelas)->where("tahun_ajaran_id", $request->thn)->get();
        return response()->json($siswa);
    }
}
