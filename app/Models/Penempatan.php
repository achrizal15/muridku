<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penempatan extends Model
{
    use HasFactory;
    protected $guarded = ["id"];
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, "kelas_id", "id");
    }
    public function siswa()
    {
        return $this->belongsTo(Siswa::class, "siswa_id", "id");
    }
    public function tahunAjaran()
    {
        return $this->belongsTo(TahunAjaran::class, "tahun_ajaran_id");
    }
}
