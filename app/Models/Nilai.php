<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    protected $guarded=["id"];
    public function nilaiDetail(){
        return $this->hasMany(NilaiDetail::class,"nilai_id");
    }
    public function kelas(){
        return $this->belongsTo(Kelas::class,"kelas_id");
    }
    public function tahunAjaran(){
        return $this->belongsTo(TahunAjaran::class,"tahun_ajaran_id");
    }
    public function mataPelajaran(){
        return $this->belongsTo(MataPelajaran::class,"mata_pelajaran_id");
    }
}
