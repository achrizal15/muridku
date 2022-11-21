<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiDetail extends Model
{
    use HasFactory;
    protected $guarded=["id"];
    public function siswa(){
        return $this->belongsTo(Siswa::class);
    }
    public function nilaiHead(){
        return $this->belongsTo(Nilai::class,"nilai_id");
    }
}
