<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = array(
            0 =>
            array(
                'NAMA' => 'Anastasia Adityas E. Danastri, S.IIP',
                'Ket' => 'BS',
            ),
            1 =>
            array(
                'NAMA' => 'Christina, S.S., M.S.',
                'Ket' => 'BS',
            ),
            2 =>
            array(
                'NAMA' => 'Daniel Heulwen Yuwono, S.Kom.',
                'Ket' => 'BS',
            ),
            3 =>
            array(
                'NAMA' => 'Dra. Lucia Endrian A., M.Si.',
                'Ket' => 'BS',
            ),
            4 =>
            array(
                'NAMA' => 'Felina Wilindra, S.Pd',
                'Ket' => 'BS',
            ),
            5 =>
            array(
                'NAMA' => 'Fendy Lastyo Utomo, S.Pd',
                'Ket' => 'BS',
            ),
            6 =>
            array(
                'NAMA' => 'Fransiska Anggia Dini Saraswati, S.Si. Teol.',
                'Ket' => 'BS',
            ),
            7 =>
            array(
                'NAMA' => 'Hendra Parhusip, S.Kom.',
                'Ket' => 'BS',
            ),
            8 =>
            array(
                'NAMA' => 'Hermawati, S.E.',
                'Ket' => 'BS',
            ),
            9 =>
            array(
                'NAMA' => 'Jong Soek Lan, B.Ed',
                'Ket' => 'BS',
            ),
            10 =>
            array(
                'NAMA' => 'Kristiana Sri Astuti, S.PAK',
                'Ket' => 'BS',
            ),
            11 =>
            array(
                'NAMA' => 'Lanny Widowati Suhendro, S.Pd.,M.M.',
                'Ket' => 'BS',
            ),
            12 =>
            array(
                'NAMA' => 'Linda Candra Nigia, S.T.',
                'Ket' => 'BS',
            ),
            13 =>
            array(
                'NAMA' => 'Lisa Novina Santoso, SS',
                'Ket' => 'BS',
            ),
            14 =>
            array(
                'NAMA' => 'Lucia Maestri Suci, S.Psi',
                'Ket' => 'BS',
            ),
            15 =>
            array(
                'NAMA' => 'Maria Meisilia Kareho, SE',
                'Ket' => 'BS',
            ),
            16 =>
            array(
                'NAMA' => 'Monica Malta Santoso, S.Pd.',
                'Ket' => 'BS',
            ),
            17 =>
            array(
                'NAMA' => 'Novan Trimaryono',
                'Ket' => 'BS',
            ),
            18 =>
            array(
                'NAMA' => 'Ratna Aprilliyanti, S.I.Pust.',
                'Ket' => 'BS',
            ),
            19 =>
            array(
                'NAMA' => 'Remon Katimin, S.Pd',
                'Ket' => 'BS',
            ),
            20 =>
            array(
                'NAMA' => 'Rudi Limantara, S.Kom.',
                'Ket' => 'BS',
            ),
            21 =>
            array(
                'NAMA' => 'Stephanie, B. TCFL',
                'Ket' => 'BS',
            ),
            22 =>
            array(
                'NAMA' => 'Yonatan, S.Sn',
                'Ket' => 'BS',
            ),
            23 =>
            array(
                'NAMA' => 'Yuliyanto Chandra, S.S., M.S. ',
                'Ket' => 'BS',
            ),
            24 =>
            array(
                'NAMA' => 'Helenna Deborah, S.Si, M.M.',
                'Ket' => 'KS',
            ),
            25 =>
            array(
                'NAMA' => 'Anastasia Lucile Tacoh, S.Pd.',
                'Ket' => 'WK',
            ),
            26 =>
            array(
                'NAMA' => 'Christa Siaila, S.Psi., M.Th.',
                'Ket' => 'WK',
            ),
            27 =>
            array(
                'NAMA' => 'Daisy Juwana, S.Pd',
                'Ket' => 'WK',
            ),
            28 =>
            array(
                'NAMA' => 'Dra. Sri Agung Sutjiati',
                'Ket' => 'WK',
            ),
            29 =>
            array(
                'NAMA' => 'Eddy Chandra, SE',
                'Ket' => 'WK',
            ),
            30 =>
            array(
                'NAMA' => 'Eddy Sugianto Sentoso, S.Kom',
                'Ket' => 'WK',
            ),
            31 =>
            array(
                'NAMA' => 'Elizabeth Putri Kurniasari, S.Pd.,MM.',
                'Ket' => 'WK',
            ),
            32 =>
            array(
                'NAMA' => 'Evelyn Christy Eliezer, S.S.',
                'Ket' => 'WK',
            ),
            33 =>
            array(
                'NAMA' => 'Intan Permata Sari, B.Ed.,S.Pd.',
                'Ket' => 'WK',
            ),
            34 =>
            array(
                'NAMA' => 'Joane Lynne Nahumury, S.Si.Teol',
                'Ket' => 'WK',
            ),
            35 =>
            array(
                'NAMA' => 'Johana Alim, S.Psi',
                'Ket' => 'WK',
            ),
            36 =>
            array(
                'NAMA' => 'Kristaty Pratiwi, S.Kom',
                'Ket' => 'WK',
            ),
            37 =>
            array(
                'NAMA' => 'Lanny Indahwati, S.S.',
                'Ket' => 'WK',
            ),
            38 =>
            array(
                'NAMA' => 'Lisa Juliana, drh.',
                'Ket' => 'WK',
            ),
            39 =>
            array(
                'NAMA' => 'Listia Florensia S., S.Pd',
                'Ket' => 'WK',
            ),
            40 =>
            array(
                'NAMA' => 'Marta Eka Widyaningsih, S.Pd.',
                'Ket' => 'WK',
            ),
            41 =>
            array(
                'NAMA' => 'Rona Dear Realita, S.Pd',
                'Ket' => 'WK',
            ),
            42 =>
            array(
                'NAMA' => 'Sie Jap Ertje, S.Pd',
                'Ket' => 'WK',
            ),
            43 =>
            array(
                'NAMA' => 'Silvano Yugi Ananta, S.Pd',
                'Ket' => 'WK',
            ),
            44 =>
            array(
                'NAMA' => 'Sosialiani, S.Pd., M.Si',
                'Ket' => 'WK',
            ),
            45 =>
            array(
                'NAMA' => 'Teresia Winnarti, S.Pd',
                'Ket' => 'WK',
            ),
            46 =>
            array(
                'NAMA' => 'Vitri Aryanti, S.Si',
                'Ket' => 'WK',
            ),
            47 =>
            array(
                'NAMA' => 'Yoel Sarai Astuti, S.E.',
                'Ket' => 'WK',
            ),
        );
        DB::beginTransaction();
        foreach ($users as $key=> $item) {
            $role = 2;
            if ($item["Ket"] == "WK") {
                $role = 3;
            } else if ($item["Ket"] == "KS") {
                $role = 4;
            }
            User::create([
                "name" => $item["NAMA"],
                "role_id" => $role,
                "email" => explode(" ", $item["NAMA"])[0] .$key. "@gmail.com",
                'email_verified_at' => now(),
                "password"=>Hash::make("123"),
                'remember_token' => Str::random(10),
            ]);
        }
        DB::commit();
    }
}
