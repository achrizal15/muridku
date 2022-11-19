<?php

namespace App\Models;

use Alfa6661\AutoNumber\AutoNumberTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory,AutoNumberTrait;
    protected $guarded=["id"];
    public function getAutoNumberOptions()
    {
        return [
            'nis' => [
                'format' => '?', // autonumber format. '?' will be replaced with the generated number.
                'length' => 6 // The number of digits in an autonumber
            ]
        ];
    }
}