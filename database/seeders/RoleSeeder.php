<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Role::insert([
      [
        "name" => "Administrator",
        "landing_page" => "/",
        "created_at"=>now()
      ],
      [
        "name" => "Bidang Studi",
        "landing_page" => "/",
        "created_at"=>now()
      ],
      [
        "name" => "Wali Kelas",
        "landing_page" => "/",
        "created_at"=>now()
      ],
      [
        "name" => "Kepala Sekolah",
        "landing_page" => "/",
        "created_at"=>now()      ],
    ]);
  }
}
