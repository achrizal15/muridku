<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $guarded=["id"];
    public function menuAccess(){
        return $this->belongsToMany(Menu::class,"role_accesses","role_id","menu_id");
    }
}
