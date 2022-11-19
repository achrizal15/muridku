<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\RoleAccess;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menu = array(
            0 =>
            array(
                'title' => 'Dashboard',
                'route' => 'http://127.0.0.1:8000',
                'active' => false,
            ),
            1 =>
            array(
                'title' => 'Master',
                'route' => '#',
                'active' => true,
                'submenu' =>
                array(
                    0 =>
                    array(
                        'title' => 'Role',
                        'route' => 'http://127.0.0.1:8000/master/role',
                        'active' => false,
                    ),
                    1 =>
                    array(
                        'title' => 'User',
                        'route' => 'http://127.0.0.1:8000/master/user',
                        'active' => false,
                    ),
                    2 =>
                    array(
                        'title' => 'Siswa',
                        'route' => 'http://127.0.0.1:8000/master/siswa',
                        'active' => false,
                    ),
                    3 =>
                    array(
                        'title' => 'Kelas',
                        'route' => 'http://127.0.0.1:8000/master/kelas',
                        'active' => false,
                    ),
                    4 =>
                    array(
                        'title' => 'Mata Pelajaran',
                        'route' => 'http://127.0.0.1:8000/master/mata-pelajaran',
                        'active' => false,
                    ),
                    5 =>
                    array(
                        'title' => 'Tahun Ajaran',
                        'route' => 'http://127.0.0.1:8000/master/tahun-ajaran',
                        'active' => false,
                    ),
                ),
            ),
        );
        DB::beginTransaction();
        foreach ($menu as $value) {
            $parent = Menu::create([
                "route" => $value["route"],
                "title" => $value["title"],
            ]);
            RoleAccess::create([
                "role_id"=>1,
                "menu_id"=>$parent->id
            ]);
            if (isset($value["submenu"])) {
                foreach ($value["submenu"] as $sub) {
                   $subParent= Menu::create([
                        "route" => $sub["route"],
                        "title" => $sub["title"],
                        "group_title" => $value["title"],
                        "group_id" => $parent->id
                    ]);
                    RoleAccess::create([
                        "role_id"=>1,
                        "menu_id"=>$subParent->id
                    ]);
                }
            }
        }
        DB::commit();
    }
}
