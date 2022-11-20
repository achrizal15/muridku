<?php

namespace Database\Seeders;

use App\Models\Kelas;
use App\Models\Penempatan;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            0 =>
            array(
                'Kelas' => '1A',
                'NIS' => '322008',
                'Nama' => 'Axel Lausandi',
                'Walikelas' => 'Loe Listia Florensia Susilo, S.Pd.',
                'Tugas' => '91',
                'UTS' => '97',
                'UAS' => '91',
            ),
            1 =>
            array(
                'Kelas' => '1A',
                'NIS' => '322010',
                'Nama' => 'Brianna Himeko Liem',
                'Walikelas' => 'Loe Listia Florensia Susilo, S.Pd.',
                'Tugas' => '81',
                'UTS' => '84',
                'UAS' => '81',
            ),
            2 =>
            array(
                'Kelas' => '1A',
                'NIS' => '322015',
                'Nama' => 'Cellyne Velice Lengkong',
                'Walikelas' => 'Loe Listia Florensia Susilo, S.Pd.',
                'Tugas' => '78',
                'UTS' => '97',
                'UAS' => '78',
            ),
            3 =>
            array(
                'Kelas' => '1A',
                'NIS' => '322016',
                'Nama' => 'Cheryl Lavenia Tjandra',
                'Walikelas' => 'Loe Listia Florensia Susilo, S.Pd.',
                'Tugas' => '100',
                'UTS' => '97',
                'UAS' => '100',
            ),
            4 =>
            array(
                'Kelas' => '1A',
                'NIS' => '322024',
                'Nama' => 'Cleve Niklaus Corrinthian',
                'Walikelas' => 'Loe Listia Florensia Susilo, S.Pd.',
                'Tugas' => '97',
                'UTS' => '88',
                'UAS' => '97',
            ),
            5 =>
            array(
                'Kelas' => '1A',
                'NIS' => '322031',
                'Nama' => 'Elora Ruth Handoko',
                'Walikelas' => 'Loe Listia Florensia Susilo, S.Pd.',
                'Tugas' => '81',
                'UTS' => '97',
                'UAS' => '81',
            ),
            6 =>
            array(
                'Kelas' => '1A',
                'NIS' => '322032',
                'Nama' => 'Emilia Emmanuel Setijo Gonzalez',
                'Walikelas' => 'Loe Listia Florensia Susilo, S.Pd.',
                'Tugas' => '88',
                'UTS' => '84',
                'UAS' => '88',
            ),
            7 =>
            array(
                'Kelas' => '1A',
                'NIS' => '322036',
                'Nama' => 'Excellent Mercy Tanaya',
                'Walikelas' => 'Loe Listia Florensia Susilo, S.Pd.',
                'Tugas' => '84',
                'UTS' => '78',
                'UAS' => '84',
            ),
            8 =>
            array(
                'Kelas' => '1A',
                'NIS' => '322038',
                'Nama' => 'Gavin Emmanuel',
                'Walikelas' => 'Loe Listia Florensia Susilo, S.Pd.',
                'Tugas' => '88',
                'UTS' => '78',
                'UAS' => '88',
            ),
            9 =>
            array(
                'Kelas' => '1A',
                'NIS' => '322043',
                'Nama' => 'Gustavo Reynand Halim',
                'Walikelas' => 'Loe Listia Florensia Susilo, S.Pd.',
                'Tugas' => '78',
                'UTS' => '75',
                'UAS' => '78',
            ),
            10 =>
            array(
                'Kelas' => '1A',
                'NIS' => '322046',
                'Nama' => 'Jenica Grisenda',
                'Walikelas' => 'Loe Listia Florensia Susilo, S.Pd.',
                'Tugas' => '78',
                'UTS' => '75',
                'UAS' => '78',
            ),
            11 =>
            array(
                'Kelas' => '1A',
                'NIS' => '322047',
                'Nama' => 'Jennifer Tantoro',
                'Walikelas' => 'Loe Listia Florensia Susilo, S.Pd.',
                'Tugas' => '78',
                'UTS' => '97',
                'UAS' => '78',
            ),
            12 =>
            array(
                'Kelas' => '1A',
                'NIS' => '322048',
                'Nama' => 'Jillian Rachel Sutjipto',
                'Walikelas' => 'Loe Listia Florensia Susilo, S.Pd.',
                'Tugas' => '91',
                'UTS' => '97',
                'UAS' => '91',
            ),
            13 =>
            array(
                'Kelas' => '1A',
                'NIS' => '322052',
                'Nama' => 'Joy Nathania Wiraatmaja',
                'Walikelas' => 'Loe Listia Florensia Susilo, S.Pd.',
                'Tugas' => '78',
                'UTS' => '94',
                'UAS' => '78',
            ),
            14 =>
            array(
                'Kelas' => '1A',
                'NIS' => '322053',
                'Nama' => 'Joyfelyn Clarice Dermawan',
                'Walikelas' => 'Loe Listia Florensia Susilo, S.Pd.',
                'Tugas' => '97',
                'UTS' => '97',
                'UAS' => '97',
            ),
            15 =>
            array(
                'Kelas' => '1A',
                'NIS' => '322055',
                'Nama' => 'Katriel Lindra Kurniawan',
                'Walikelas' => 'Loe Listia Florensia Susilo, S.Pd.',
                'Tugas' => '97',
                'UTS' => '94',
                'UAS' => '97',
            ),
            16 =>
            array(
                'Kelas' => '1A',
                'NIS' => '322057',
                'Nama' => 'Keanu Setiawan Wijaya',
                'Walikelas' => 'Loe Listia Florensia Susilo, S.Pd.',
                'Tugas' => '84',
                'UTS' => '81',
                'UAS' => '84',
            ),
            17 =>
            array(
                'Kelas' => '1A',
                'NIS' => '322067',
                'Nama' => 'Marselinus Ananta Nowo Laga Mudamakin',
                'Walikelas' => 'Loe Listia Florensia Susilo, S.Pd.',
                'Tugas' => '88',
                'UTS' => '88',
                'UAS' => '88',
            ),
            18 =>
            array(
                'Kelas' => '1A',
                'NIS' => '322068',
                'Nama' => 'Marvel Anthony Santoso',
                'Walikelas' => 'Loe Listia Florensia Susilo, S.Pd.',
                'Tugas' => '78',
                'UTS' => '81',
                'UAS' => '78',
            ),
            19 =>
            array(
                'Kelas' => '1A',
                'NIS' => '322070',
                'Nama' => 'Meghan Eleanor Lauwrenthioes',
                'Walikelas' => 'Loe Listia Florensia Susilo, S.Pd.',
                'Tugas' => '97',
                'UTS' => '88',
                'UAS' => '97',
            ),
            20 =>
            array(
                'Kelas' => '1A',
                'NIS' => '322075',
                'Nama' => 'Miracle Elizabeth Surya',
                'Walikelas' => 'Loe Listia Florensia Susilo, S.Pd.',
                'Tugas' => '81',
                'UTS' => '97',
                'UAS' => '81',
            ),
            21 =>
            array(
                'Kelas' => '1A',
                'NIS' => '322081',
                'Nama' => 'Ralvaro Gavriel Ngelo Pasaribu',
                'Walikelas' => 'Loe Listia Florensia Susilo, S.Pd.',
                'Tugas' => '78',
                'UTS' => '78',
                'UAS' => '78',
            ),
            22 =>
            array(
                'Kelas' => '1A',
                'NIS' => '322090',
                'Nama' => 'Emiko Gricelline Sugianto',
                'Walikelas' => 'Loe Listia Florensia Susilo, S.Pd.',
                'Tugas' => '91',
                'UTS' => '94',
                'UAS' => '91',
            ),
            23 =>
            array(
                'Kelas' => '1B',
                'NIS' => '322001',
                'Nama' => 'Albert Dominic Honoardjo',
                'Walikelas' => 'Anastasia Lucile Tacoh, S.Pd.',
                'Tugas' => '88',
                'UTS' => '78',
                'UAS' => '88',
            ),
            24 =>
            array(
                'Kelas' => '1B',
                'NIS' => '322005',
                'Nama' => 'Alexander Xavier Candra',
                'Walikelas' => 'Anastasia Lucile Tacoh, S.Pd.',
                'Tugas' => '78',
                'UTS' => '-',
                'UAS' => '78',
            ),
            25 =>
            array(
                'Kelas' => '1B',
                'NIS' => '322006',
                'Nama' => 'Allison Gwen Handojo',
                'Walikelas' => 'Anastasia Lucile Tacoh, S.Pd.',
                'Tugas' => '84',
                'UTS' => '97',
                'UAS' => '84',
            ),
            26 =>
            array(
                'Kelas' => '1B',
                'NIS' => '322007',
                'Nama' => 'Anastasia Kaylee Grace Atmadjaja',
                'Walikelas' => 'Anastasia Lucile Tacoh, S.Pd.',
                'Tugas' => '94',
                'UTS' => '100',
                'UAS' => '94',
            ),
            27 =>
            array(
                'Kelas' => '1B',
                'NIS' => '322009',
                'Nama' => 'Bravely Velove Kurniawan',
                'Walikelas' => 'Anastasia Lucile Tacoh, S.Pd.',
                'Tugas' => '94',
                'UTS' => '91',
                'UAS' => '94',
            ),
            28 =>
            array(
                'Kelas' => '1B',
                'NIS' => '322011',
                'Nama' => 'Caithlyn Valeria Tang',
                'Walikelas' => 'Anastasia Lucile Tacoh, S.Pd.',
                'Tugas' => '78',
                'UTS' => '78',
                'UAS' => '78',
            ),
            29 =>
            array(
                'Kelas' => '1B',
                'NIS' => '322017',
                'Nama' => 'Cheryl Nathania Sirapanji',
                'Walikelas' => 'Anastasia Lucile Tacoh, S.Pd.',
                'Tugas' => '88',
                'UTS' => '88',
                'UAS' => '88',
            ),
            30 =>
            array(
                'Kelas' => '1B',
                'NIS' => '322022',
                'Nama' => 'Clarenza Magdalena Tanihaha',
                'Walikelas' => 'Anastasia Lucile Tacoh, S.Pd.',
                'Tugas' => '80',
                'UTS' => '81',
                'UAS' => '80',
            ),
            31 =>
            array(
                'Kelas' => '1B',
                'NIS' => '322025',
                'Nama' => 'Cliffton Mikhael Karson',
                'Walikelas' => 'Anastasia Lucile Tacoh, S.Pd.',
                'Tugas' => '78',
                'UTS' => '78',
                'UAS' => '78',
            ),
            32 =>
            array(
                'Kelas' => '1B',
                'NIS' => '322033',
                'Nama' => 'Ethan Wahjudy',
                'Walikelas' => 'Anastasia Lucile Tacoh, S.Pd.',
                'Tugas' => '84',
                'UTS' => '91',
                'UAS' => '84',
            ),
            33 =>
            array(
                'Kelas' => '1B',
                'NIS' => '322034',
                'Nama' => 'Evano Howard Widjaja',
                'Walikelas' => 'Anastasia Lucile Tacoh, S.Pd.',
                'Tugas' => '84',
                'UTS' => '94',
                'UAS' => '84',
            ),
            34 =>
            array(
                'Kelas' => '1B',
                'NIS' => '322039',
                'Nama' => 'Gianna Arinka Sumantra',
                'Walikelas' => 'Anastasia Lucile Tacoh, S.Pd.',
                'Tugas' => '100',
                'UTS' => '100',
                'UAS' => '100',
            ),
            35 =>
            array(
                'Kelas' => '1B',
                'NIS' => '322041',
                'Nama' => 'Gisela Cheva Suhardiman',
                'Walikelas' => 'Anastasia Lucile Tacoh, S.Pd.',
                'Tugas' => '81',
                'UTS' => '94',
                'UAS' => '81',
            ),
            36 =>
            array(
                'Kelas' => '1B',
                'NIS' => '322050',
                'Nama' => 'Jose Giovanno Jayapranata',
                'Walikelas' => 'Anastasia Lucile Tacoh, S.Pd.',
                'Tugas' => '88',
                'UTS' => '91',
                'UAS' => '88',
            ),
            37 =>
            array(
                'Kelas' => '1B',
                'NIS' => '322062',
                'Nama' => 'Louisa Eveline Teguh',
                'Walikelas' => 'Anastasia Lucile Tacoh, S.Pd.',
                'Tugas' => '94',
                'UTS' => '97',
                'UAS' => '94',
            ),
            38 =>
            array(
                'Kelas' => '1B',
                'NIS' => '322063',
                'Nama' => 'Lyvianne Tiffany Budianto',
                'Walikelas' => 'Anastasia Lucile Tacoh, S.Pd.',
                'Tugas' => '81',
                'UTS' => '97',
                'UAS' => '81',
            ),
            39 =>
            array(
                'Kelas' => '1B',
                'NIS' => '322064',
                'Nama' => 'Madeline Avery Gunawan',
                'Walikelas' => 'Anastasia Lucile Tacoh, S.Pd.',
                'Tugas' => '81',
                'UTS' => '-',
                'UAS' => '81',
            ),
            40 =>
            array(
                'Kelas' => '1B',
                'NIS' => '322072',
                'Nama' => 'Michelle Alessa Soelaksono',
                'Walikelas' => 'Anastasia Lucile Tacoh, S.Pd.',
                'Tugas' => '94',
                'UTS' => '97',
                'UAS' => '94',
            ),
            41 =>
            array(
                'Kelas' => '1B',
                'NIS' => '322078',
                'Nama' => 'Nicole Dava Sitanggang',
                'Walikelas' => 'Anastasia Lucile Tacoh, S.Pd.',
                'Tugas' => '100',
                'UTS' => '91',
                'UAS' => '100',
            ),
            42 =>
            array(
                'Kelas' => '1B',
                'NIS' => '322080',
                'Nama' => 'Olivia Angela Susanto',
                'Walikelas' => 'Anastasia Lucile Tacoh, S.Pd.',
                'Tugas' => '97',
                'UTS' => '91',
                'UAS' => '97',
            ),
            43 =>
            array(
                'Kelas' => '1B',
                'NIS' => '322083',
                'Nama' => 'Sean Kenneth Ongkowijoyo',
                'Walikelas' => 'Anastasia Lucile Tacoh, S.Pd.',
                'Tugas' => '78',
                'UTS' => '78',
                'UAS' => '78',
            ),
            44 =>
            array(
                'Kelas' => '1B',
                'NIS' => '322085',
                'Nama' => 'Sergey Matandi',
                'Walikelas' => 'Anastasia Lucile Tacoh, S.Pd.',
                'Tugas' => '81',
                'UTS' => '84',
                'UAS' => '81',
            ),
            45 =>
            array(
                'Kelas' => '1B',
                'NIS' => '322086',
                'Nama' => 'Stanford Budi Miljatno',
                'Walikelas' => 'Anastasia Lucile Tacoh, S.Pd.',
                'Tugas' => '88',
                'UTS' => '88',
                'UAS' => '88',
            ),
            46 =>
            array(
                'Kelas' => '1C',
                'NIS' => '322012',
                'Nama' => 'Caleb Gerrard Susanto',
                'Walikelas' => 'Marta Eka Widyaningsih, S.Pd.',
                'Tugas' => '81',
                'UTS' => '84',
                'UAS' => '81',
            ),
            47 =>
            array(
                'Kelas' => '1C',
                'NIS' => '322013',
                'Nama' => 'Callysta Gabriella Sutrisno',
                'Walikelas' => 'Marta Eka Widyaningsih, S.Pd.',
                'Tugas' => '94',
                'UTS' => '78',
                'UAS' => '94',
            ),
            48 =>
            array(
                'Kelas' => '1C',
                'NIS' => '322018',
                'Nama' => 'Cheryl Olivia Chandra',
                'Walikelas' => 'Marta Eka Widyaningsih, S.Pd.',
                'Tugas' => '97',
                'UTS' => '78',
                'UAS' => '97',
            ),
            49 =>
            array(
                'Kelas' => '1C',
                'NIS' => '322020',
                'Nama' => 'Clairine Candice Prayogo',
                'Walikelas' => 'Marta Eka Widyaningsih, S.Pd.',
                'Tugas' => '91',
                'UTS' => '91',
                'UAS' => '91',
            ),
            50 =>
            array(
                'Kelas' => '1C',
                'NIS' => '322021',
                'Nama' => 'Clara Joaquine Harun',
                'Walikelas' => 'Marta Eka Widyaningsih, S.Pd.',
                'Tugas' => '88',
                'UTS' => '81',
                'UAS' => '88',
            ),
            51 =>
            array(
                'Kelas' => '1C',
                'NIS' => '322026',
                'Nama' => 'Clint Adler Stevanos',
                'Walikelas' => 'Marta Eka Widyaningsih, S.Pd.',
                'Tugas' => '84',
                'UTS' => '81',
                'UAS' => '84',
            ),
            52 =>
            array(
                'Kelas' => '1C',
                'NIS' => '322035',
                'Nama' => 'Evelyn Valerie Tanoyo',
                'Walikelas' => 'Marta Eka Widyaningsih, S.Pd.',
                'Tugas' => '91',
                'UTS' => '84',
                'UAS' => '91',
            ),
            53 =>
            array(
                'Kelas' => '1C',
                'NIS' => '322042',
                'Nama' => 'Gregory Benedict Oenarta',
                'Walikelas' => 'Marta Eka Widyaningsih, S.Pd.',
                'Tugas' => '84',
                'UTS' => '81',
                'UAS' => '84',
            ),
            54 =>
            array(
                'Kelas' => '1C',
                'NIS' => '322044',
                'Nama' => 'Hanzell Amachi Chandra',
                'Walikelas' => 'Marta Eka Widyaningsih, S.Pd.',
                'Tugas' => '78',
                'UTS' => '84',
                'UAS' => '78',
            ),
            55 =>
            array(
                'Kelas' => '1C',
                'NIS' => '322049',
                'Nama' => 'Jolene Abigail Lively',
                'Walikelas' => 'Marta Eka Widyaningsih, S.Pd.',
                'Tugas' => '91',
                'UTS' => '81',
                'UAS' => '91',
            ),
            56 =>
            array(
                'Kelas' => '1C',
                'NIS' => '322051',
                'Nama' => 'Joy Alicia Liman',
                'Walikelas' => 'Marta Eka Widyaningsih, S.Pd.',
                'Tugas' => '91',
                'UTS' => '91',
                'UAS' => '91',
            ),
            57 =>
            array(
                'Kelas' => '1C',
                'NIS' => '322054',
                'Nama' => 'Kaitlyn Elena Soedargo',
                'Walikelas' => 'Marta Eka Widyaningsih, S.Pd.',
                'Tugas' => '88',
                'UTS' => '94',
                'UAS' => '88',
            ),
            58 =>
            array(
                'Kelas' => '1C',
                'NIS' => '322058',
                'Nama' => 'Keiko Valerie Marcos',
                'Walikelas' => 'Marta Eka Widyaningsih, S.Pd.',
                'Tugas' => '88',
                'UTS' => '94',
                'UAS' => '88',
            ),
            59 =>
            array(
                'Kelas' => '1C',
                'NIS' => '322060',
                'Nama' => 'Kenzie Oliver Tjandra',
                'Walikelas' => 'Marta Eka Widyaningsih, S.Pd.',
                'Tugas' => '81',
                'UTS' => '78',
                'UAS' => '81',
            ),
            60 =>
            array(
                'Kelas' => '1C',
                'NIS' => '322066',
                'Nama' => 'Magnus Adrian Putratejo',
                'Walikelas' => 'Marta Eka Widyaningsih, S.Pd.',
                'Tugas' => '84',
                'UTS' => '81',
                'UAS' => '84',
            ),
            61 =>
            array(
                'Kelas' => '1C',
                'NIS' => '322069',
                'Nama' => 'Marvel Winston Ma',
                'Walikelas' => 'Marta Eka Widyaningsih, S.Pd.',
                'Tugas' => '84',
                'UTS' => '84',
                'UAS' => '84',
            ),
            62 =>
            array(
                'Kelas' => '1C',
                'NIS' => '322071',
                'Nama' => 'Michael Greg Aldrich',
                'Walikelas' => 'Marta Eka Widyaningsih, S.Pd.',
                'Tugas' => '78',
                'UTS' => '91',
                'UAS' => '78',
            ),
            63 =>
            array(
                'Kelas' => '1C',
                'NIS' => '322074',
                'Nama' => 'Milla Leonora Subekno',
                'Walikelas' => 'Marta Eka Widyaningsih, S.Pd.',
                'Tugas' => '94',
                'UTS' => '94',
                'UAS' => '94',
            ),
            64 =>
            array(
                'Kelas' => '1C',
                'NIS' => '322079',
                'Nama' => 'Noemi Budiono',
                'Walikelas' => 'Marta Eka Widyaningsih, S.Pd.',
                'Tugas' => '88',
                'UTS' => '81',
                'UAS' => '88',
            ),
            65 =>
            array(
                'Kelas' => '1C',
                'NIS' => '322082',
                'Nama' => 'Scott Raphael Wong',
                'Walikelas' => 'Marta Eka Widyaningsih, S.Pd.',
                'Tugas' => '80',
                'UTS' => '-',
                'UAS' => '80',
            ),
            66 =>
            array(
                'Kelas' => '1C',
                'NIS' => '322089',
                'Nama' => 'Troy Ivander Tristan',
                'Walikelas' => 'Marta Eka Widyaningsih, S.Pd.',
                'Tugas' => '78',
                'UTS' => '88',
                'UAS' => '78',
            ),
            67 =>
            array(
                'Kelas' => '1D',
                'NIS' => '322002',
                'Nama' => 'Albert Johanson Sugiarto',
                'Walikelas' => 'Lanny Indahwati, S.S.',
                'Tugas' => '91',
                'UTS' => '78',
                'UAS' => '91',
            ),
            68 =>
            array(
                'Kelas' => '1D',
                'NIS' => '322003',
                'Nama' => 'Alexa Anna Batrisya Sugianto',
                'Walikelas' => 'Lanny Indahwati, S.S.',
                'Tugas' => '78',
                'UTS' => '94',
                'UAS' => '78',
            ),
            69 =>
            array(
                'Kelas' => '1D',
                'NIS' => '322004',
                'Nama' => 'Alexander Raphael Suryaatmadja',
                'Walikelas' => 'Lanny Indahwati, S.S.',
                'Tugas' => '88',
                'UTS' => '84',
                'UAS' => '88',
            ),
            70 =>
            array(
                'Kelas' => '1D',
                'NIS' => '322014',
                'Nama' => 'Carissa Nathania Angdiarto',
                'Walikelas' => 'Lanny Indahwati, S.S.',
                'Tugas' => '91',
                'UTS' => '100',
                'UAS' => '91',
            ),
            71 =>
            array(
                'Kelas' => '1D',
                'NIS' => '322019',
                'Nama' => 'Chloe Christiani Harsono',
                'Walikelas' => 'Lanny Indahwati, S.S.',
                'Tugas' => '88',
                'UTS' => '91',
                'UAS' => '88',
            ),
            72 =>
            array(
                'Kelas' => '1D',
                'NIS' => '322023',
                'Nama' => 'Clarice Arianna Budilarto',
                'Walikelas' => 'Lanny Indahwati, S.S.',
                'Tugas' => '94',
                'UTS' => '97',
                'UAS' => '94',
            ),
            73 =>
            array(
                'Kelas' => '1D',
                'NIS' => '322027',
                'Nama' => 'Daviano Arya Setiawan',
                'Walikelas' => 'Lanny Indahwati, S.S.',
                'Tugas' => '78',
                'UTS' => '84',
                'UAS' => '78',
            ),
            74 =>
            array(
                'Kelas' => '1D',
                'NIS' => '322028',
                'Nama' => 'Davin Leonathan Nugroho',
                'Walikelas' => 'Lanny Indahwati, S.S.',
                'Tugas' => '78',
                'UTS' => '84',
                'UAS' => '78',
            ),
            75 =>
            array(
                'Kelas' => '1D',
                'NIS' => '322029',
                'Nama' => 'Dionisius Nicholay Robby',
                'Walikelas' => 'Lanny Indahwati, S.S.',
                'Tugas' => '84',
                'UTS' => '88',
                'UAS' => '84',
            ),
            76 =>
            array(
                'Kelas' => '1D',
                'NIS' => '322030',
                'Nama' => 'Eleanor Rafeilla',
                'Walikelas' => 'Lanny Indahwati, S.S.',
                'Tugas' => '94',
                'UTS' => '88',
                'UAS' => '94',
            ),
            77 =>
            array(
                'Kelas' => '1D',
                'NIS' => '322037',
                'Nama' => 'Gavin Arion Santoso',
                'Walikelas' => 'Lanny Indahwati, S.S.',
                'Tugas' => '78',
                'UTS' => '81',
                'UAS' => '78',
            ),
            78 =>
            array(
                'Kelas' => '1D',
                'NIS' => '322040',
                'Nama' => 'Gianna Himeko Liem',
                'Walikelas' => 'Lanny Indahwati, S.S.',
                'Tugas' => '100',
                'UTS' => '97',
                'UAS' => '100',
            ),
            79 =>
            array(
                'Kelas' => '1D',
                'NIS' => '322045',
                'Nama' => 'Harper Liv Briseis, Poh',
                'Walikelas' => 'Lanny Indahwati, S.S.',
                'Tugas' => '91',
                'UTS' => '94',
                'UAS' => '91',
            ),
            80 =>
            array(
                'Kelas' => '1D',
                'NIS' => '322056',
                'Nama' => 'Kaytleen Ho ( He Ru Yan )',
                'Walikelas' => 'Lanny Indahwati, S.S.',
                'Tugas' => '94',
                'UTS' => '97',
                'UAS' => '94',
            ),
            81 =>
            array(
                'Kelas' => '1D',
                'NIS' => '322059',
                'Nama' => 'Kelyn Atmadja',
                'Walikelas' => 'Lanny Indahwati, S.S.',
                'Tugas' => '91',
                'UTS' => '91',
                'UAS' => '91',
            ),
            82 =>
            array(
                'Kelas' => '1D',
                'NIS' => '322061',
                'Nama' => 'Kenzo Alexander Prasetya',
                'Walikelas' => 'Lanny Indahwati, S.S.',
                'Tugas' => '94',
                'UTS' => '91',
                'UAS' => '94',
            ),
            83 =>
            array(
                'Kelas' => '1D',
                'NIS' => '322065',
                'Nama' => 'Maggie Gwynneth Benharz',
                'Walikelas' => 'Lanny Indahwati, S.S.',
                'Tugas' => '91',
                'UTS' => '91',
                'UAS' => '91',
            ),
            84 =>
            array(
                'Kelas' => '1D',
                'NIS' => '322073',
                'Nama' => 'Michelle Gwen Aldrich',
                'Walikelas' => 'Lanny Indahwati, S.S.',
                'Tugas' => '94',
                'UTS' => '94',
                'UAS' => '94',
            ),
            85 =>
            array(
                'Kelas' => '1D',
                'NIS' => '322076',
                'Nama' => 'Monica Eleanor Ivory Wijaya',
                'Walikelas' => 'Lanny Indahwati, S.S.',
                'Tugas' => '94',
                'UTS' => '91',
                'UAS' => '94',
            ),
            86 =>
            array(
                'Kelas' => '1D',
                'NIS' => '322077',
                'Nama' => 'Nicholas King',
                'Walikelas' => 'Lanny Indahwati, S.S.',
                'Tugas' => '81',
                'UTS' => '81',
                'UAS' => '81',
            ),
            87 =>
            array(
                'Kelas' => '1D',
                'NIS' => '322084',
                'Nama' => 'Serena Elleanor',
                'Walikelas' => 'Lanny Indahwati, S.S.',
                'Tugas' => '97',
                'UTS' => '94',
                'UAS' => '97',
            ),
            88 =>
            array(
                'Kelas' => '1D',
                'NIS' => '322087',
                'Nama' => 'Starwin Anthoney Gunawan',
                'Walikelas' => 'Lanny Indahwati, S.S.',
                'Tugas' => '78',
                'UTS' => '78',
                'UAS' => '78',
            ),
            89 =>
            array(
                'Kelas' => '1D',
                'NIS' => '322088',
                'Nama' => 'Tiffany Harja Tirta',
                'Walikelas' => 'Lanny Indahwati, S.S.',
                'Tugas' => '91',
                'UTS' => '91',
                'UAS' => '91',
            ),
            90 =>
            array(
                'Kelas' => '2A',
                'NIS' => '321001',
                'Nama' => 'Aaron Nicholas',
                'Walikelas' => 'Teresia Winnarti, S.Pd.',
                'Tugas' => '88',
                'UTS' => '91',
                'UAS' => '88',
            ),
            91 =>
            array(
                'Kelas' => '2A',
                'NIS' => '321006',
                'Nama' => 'Alodia Emily Tanujaya',
                'Walikelas' => 'Teresia Winnarti, S.Pd.',
                'Tugas' => '94',
                'UTS' => '100',
                'UAS' => '94',
            ),
            92 =>
            array(
                'Kelas' => '2A',
                'NIS' => '321011',
                'Nama' => 'Aubree Arella Lawanto',
                'Walikelas' => 'Teresia Winnarti, S.Pd.',
                'Tugas' => '94',
                'UTS' => '91',
                'UAS' => '94',
            ),
            93 =>
            array(
                'Kelas' => '2A',
                'NIS' => '321019',
                'Nama' => 'Cello Mackinnley Filan',
                'Walikelas' => 'Teresia Winnarti, S.Pd.',
                'Tugas' => '81',
                'UTS' => '100',
                'UAS' => '81',
            ),
            94 =>
            array(
                'Kelas' => '2A',
                'NIS' => '321023',
                'Nama' => 'Dennis Putra Kresnadi',
                'Walikelas' => 'Teresia Winnarti, S.Pd.',
                'Tugas' => '88',
                'UTS' => '97',
                'UAS' => '88',
            ),
            95 =>
            array(
                'Kelas' => '2A',
                'NIS' => '321026',
                'Nama' => 'Ethan Gerraldi Wono',
                'Walikelas' => 'Teresia Winnarti, S.Pd.',
                'Tugas' => '91',
                'UTS' => '94',
                'UAS' => '91',
            ),
            96 =>
            array(
                'Kelas' => '2A',
                'NIS' => '321028',
                'Nama' => 'Felove Graceline Tunardy',
                'Walikelas' => 'Teresia Winnarti, S.Pd.',
                'Tugas' => '91',
                'UTS' => '91',
                'UAS' => '91',
            ),
            97 =>
            array(
                'Kelas' => '2A',
                'NIS' => '321030',
                'Nama' => 'Gwen Ailee Santoso',
                'Walikelas' => 'Teresia Winnarti, S.Pd.',
                'Tugas' => '94',
                'UTS' => '100',
                'UAS' => '94',
            ),
            98 =>
            array(
                'Kelas' => '2A',
                'NIS' => '321034',
                'Nama' => 'Jarrow Manuel',
                'Walikelas' => 'Teresia Winnarti, S.Pd.',
                'Tugas' => '91',
                'UTS' => '81',
                'UAS' => '91',
            ),
            99 =>
            array(
                'Kelas' => '2A',
                'NIS' => '321037',
                'Nama' => 'Jennifer Michaella Wibawa',
                'Walikelas' => 'Teresia Winnarti, S.Pd.',
                'Tugas' => '94',
                'UTS' => '91',
                'UAS' => '94',
            ),
            100 =>
            array(
                'Kelas' => '2A',
                'NIS' => '321038',
                'Nama' => 'Jeremy Nathan Hartono',
                'Walikelas' => 'Teresia Winnarti, S.Pd.',
                'Tugas' => '84',
                'UTS' => '100',
                'UAS' => '84',
            ),
            101 =>
            array(
                'Kelas' => '2A',
                'NIS' => '321041',
                'Nama' => 'Joy Raelynn Limantara',
                'Walikelas' => 'Teresia Winnarti, S.Pd.',
                'Tugas' => '97',
                'UTS' => '100',
                'UAS' => '97',
            ),
            102 =>
            array(
                'Kelas' => '2A',
                'NIS' => '321045',
                'Nama' => 'Kenzie Gavriel Tjiuwangi',
                'Walikelas' => 'Teresia Winnarti, S.Pd.',
                'Tugas' => '88',
                'UTS' => '91',
                'UAS' => '88',
            ),
            103 =>
            array(
                'Kelas' => '2A',
                'NIS' => '321050',
                'Nama' => 'Kimberly Jessica Tjandra',
                'Walikelas' => 'Teresia Winnarti, S.Pd.',
                'Tugas' => '97',
                'UTS' => '94',
                'UAS' => '97',
            ),
            104 =>
            array(
                'Kelas' => '2A',
                'NIS' => '321058',
                'Nama' => 'Naomi Hope Wibowo',
                'Walikelas' => 'Teresia Winnarti, S.Pd.',
                'Tugas' => '88',
                'UTS' => '97',
                'UAS' => '88',
            ),
            105 =>
            array(
                'Kelas' => '2A',
                'NIS' => '321060',
                'Nama' => 'Oliver Nathanael Thejasukmana',
                'Walikelas' => 'Teresia Winnarti, S.Pd.',
                'Tugas' => '84',
                'UTS' => '84',
                'UAS' => '84',
            ),
            106 =>
            array(
                'Kelas' => '2A',
                'NIS' => '321065',
                'Nama' => 'Reagan Jeremy Susenio',
                'Walikelas' => 'Teresia Winnarti, S.Pd.',
                'Tugas' => '88',
                'UTS' => '91',
                'UAS' => '88',
            ),
            107 =>
            array(
                'Kelas' => '2A',
                'NIS' => '321069',
                'Nama' => 'Sharon Isabelle Kusno',
                'Walikelas' => 'Teresia Winnarti, S.Pd.',
                'Tugas' => '97',
                'UTS' => '100',
                'UAS' => '97',
            ),
            108 =>
            array(
                'Kelas' => '2A',
                'NIS' => '321070',
                'Nama' => 'Teofilus Setiawan Wijaya',
                'Walikelas' => 'Teresia Winnarti, S.Pd.',
                'Tugas' => '91',
                'UTS' => '91',
                'UAS' => '91',
            ),
            109 =>
            array(
                'Kelas' => '2B',
                'NIS' => '321002',
                'Nama' => 'Alan James Handoyo',
                'Walikelas' => 'Kristaty Pratiwi, S.Kom.',
                'Tugas' => '91',
                'UTS' => '81',
                'UAS' => '91',
            ),
            110 =>
            array(
                'Kelas' => '2B',
                'NIS' => '321003',
                'Nama' => 'Aldrich Deinzel Kwan',
                'Walikelas' => 'Kristaty Pratiwi, S.Kom.',
                'Tugas' => '97',
                'UTS' => '84',
                'UAS' => '97',
            ),
            111 =>
            array(
                'Kelas' => '2B',
                'NIS' => '321004',
                'Nama' => 'Alexa Ayudya Prabowo',
                'Walikelas' => 'Kristaty Pratiwi, S.Kom.',
                'Tugas' => '88',
                'UTS' => '81',
                'UAS' => '88',
            ),
            112 =>
            array(
                'Kelas' => '2B',
                'NIS' => '321013',
                'Nama' => 'Avery David Susanto',
                'Walikelas' => 'Kristaty Pratiwi, S.Kom.',
                'Tugas' => '91',
                'UTS' => '97',
                'UAS' => '91',
            ),
            113 =>
            array(
                'Kelas' => '2B',
                'NIS' => '321015',
                'Nama' => 'Billie Sofia Wang',
                'Walikelas' => 'Kristaty Pratiwi, S.Kom.',
                'Tugas' => '100',
                'UTS' => '91',
                'UAS' => '100',
            ),
            114 =>
            array(
                'Kelas' => '2B',
                'NIS' => '321016',
                'Nama' => 'Caroline Ambrosia Rachmadi',
                'Walikelas' => 'Kristaty Pratiwi, S.Kom.',
                'Tugas' => '97',
                'UTS' => '88',
                'UAS' => '97',
            ),
            115 =>
            array(
                'Kelas' => '2B',
                'NIS' => '321025',
                'Nama' => 'Emily Alexandra Lucky',
                'Walikelas' => 'Kristaty Pratiwi, S.Kom.',
                'Tugas' => '91',
                'UTS' => '88',
                'UAS' => '91',
            ),
            116 =>
            array(
                'Kelas' => '2B',
                'NIS' => '321029',
                'Nama' => 'Garreth Jai Javier Oetomo',
                'Walikelas' => 'Kristaty Pratiwi, S.Kom.',
                'Tugas' => '88',
                'UTS' => '84',
                'UAS' => '88',
            ),
            117 =>
            array(
                'Kelas' => '2B',
                'NIS' => '321031',
                'Nama' => 'Gwyneth Sophia Xander',
                'Walikelas' => 'Kristaty Pratiwi, S.Kom.',
                'Tugas' => '88',
                'UTS' => '88',
                'UAS' => '88',
            ),
            118 =>
            array(
                'Kelas' => '2B',
                'NIS' => '321035',
                'Nama' => 'Jayden Sinatra',
                'Walikelas' => 'Kristaty Pratiwi, S.Kom.',
                'Tugas' => '91',
                'UTS' => '88',
                'UAS' => '91',
            ),
            119 =>
            array(
                'Kelas' => '2B',
                'NIS' => '321036',
                'Nama' => 'Jedd Lionel Abner',
                'Walikelas' => 'Kristaty Pratiwi, S.Kom.',
                'Tugas' => '88',
                'UTS' => '100',
                'UAS' => '88',
            ),
            120 =>
            array(
                'Kelas' => '2B',
                'NIS' => '321043',
                'Nama' => 'Kelly Annabelle Sutanto',
                'Walikelas' => 'Kristaty Pratiwi, S.Kom.',
                'Tugas' => '88',
                'UTS' => '84',
                'UAS' => '88',
            ),
            121 =>
            array(
                'Kelas' => '2B',
                'NIS' => '321047',
                'Nama' => 'Kenzo Harman',
                'Walikelas' => 'Kristaty Pratiwi, S.Kom.',
                'Tugas' => '91',
                'UTS' => '88',
                'UAS' => '91',
            ),
            122 =>
            array(
                'Kelas' => '2B',
                'NIS' => '321049',
                'Nama' => 'Kimberly Charlissa Lim',
                'Walikelas' => 'Kristaty Pratiwi, S.Kom.',
                'Tugas' => '88',
                'UTS' => '88',
                'UAS' => '88',
            ),
            123 =>
            array(
                'Kelas' => '2B',
                'NIS' => '321056',
                'Nama' => 'Michael Angelo Yang',
                'Walikelas' => 'Kristaty Pratiwi, S.Kom.',
                'Tugas' => '88',
                'UTS' => '88',
                'UAS' => '88',
            ),
            124 =>
            array(
                'Kelas' => '2B',
                'NIS' => '321057',
                'Nama' => 'Mikayla James Jusuf',
                'Walikelas' => 'Kristaty Pratiwi, S.Kom.',
                'Tugas' => '100',
                'UTS' => '91',
                'UAS' => '100',
            ),
            125 =>
            array(
                'Kelas' => '2B',
                'NIS' => '321064',
                'Nama' => 'Raven Leets D. Suyoto',
                'Walikelas' => 'Kristaty Pratiwi, S.Kom.',
                'Tugas' => '91',
                'UTS' => '81',
                'UAS' => '91',
            ),
            126 =>
            array(
                'Kelas' => '2B',
                'NIS' => '321066',
                'Nama' => 'Rebekah Faith Wibowo',
                'Walikelas' => 'Kristaty Pratiwi, S.Kom.',
                'Tugas' => '88',
                'UTS' => '100',
                'UAS' => '88',
            ),
            127 =>
            array(
                'Kelas' => '2B',
                'NIS' => '321074',
                'Nama' => 'Samantha Fay Margathe',
                'Walikelas' => 'Kristaty Pratiwi, S.Kom.',
                'Tugas' => '88',
                'UTS' => '94',
                'UAS' => '88',
            ),
            128 =>
            array(
                'Kelas' => '2C',
                'NIS' => '321007',
                'Nama' => 'Aloysius Hayden Atmadjaja',
                'Walikelas' => 'Joane Lynne Nahumury, S.Si.Teol.',
                'Tugas' => '88',
                'UTS' => '100',
                'UAS' => '88',
            ),
            129 =>
            array(
                'Kelas' => '2C',
                'NIS' => '321008',
                'Nama' => 'Alvaro Moreno Anthony',
                'Walikelas' => 'Joane Lynne Nahumury, S.Si.Teol.',
                'Tugas' => '94',
                'UTS' => '84',
                'UAS' => '94',
            ),
            130 =>
            array(
                'Kelas' => '2C',
                'NIS' => '321009',
                'Nama' => 'Ashley Kate Tjandradjaja',
                'Walikelas' => 'Joane Lynne Nahumury, S.Si.Teol.',
                'Tugas' => '88',
                'UTS' => '97',
                'UAS' => '88',
            ),
            131 =>
            array(
                'Kelas' => '2C',
                'NIS' => '321012',
                'Nama' => 'Austin Yves Johanes',
                'Walikelas' => 'Joane Lynne Nahumury, S.Si.Teol.',
                'Tugas' => '81',
                'UTS' => '81',
                'UAS' => '81',
            ),
            132 =>
            array(
                'Kelas' => '2C',
                'NIS' => '321020',
                'Nama' => 'Clarissa Angeline Wijono',
                'Walikelas' => 'Joane Lynne Nahumury, S.Si.Teol.',
                'Tugas' => '91',
                'UTS' => '84',
                'UAS' => '91',
            ),
            133 =>
            array(
                'Kelas' => '2C',
                'NIS' => '321022',
                'Nama' => 'David Bastian Aryanto',
                'Walikelas' => 'Joane Lynne Nahumury, S.Si.Teol.',
                'Tugas' => '88',
                'UTS' => '94',
                'UAS' => '88',
            ),
            134 =>
            array(
                'Kelas' => '2C',
                'NIS' => '321027',
                'Nama' => 'Felice Clarabelle Tanjaya',
                'Walikelas' => 'Joane Lynne Nahumury, S.Si.Teol.',
                'Tugas' => '91',
                'UTS' => '100',
                'UAS' => '91',
            ),
            135 =>
            array(
                'Kelas' => '2C',
                'NIS' => '321039',
                'Nama' => 'Jocelyn Christabel Sinar',
                'Walikelas' => 'Joane Lynne Nahumury, S.Si.Teol.',
                'Tugas' => '91',
                'UTS' => '94',
                'UAS' => '91',
            ),
            136 =>
            array(
                'Kelas' => '2C',
                'NIS' => '321040',
                'Nama' => 'Joffer Reagan Candra',
                'Walikelas' => 'Joane Lynne Nahumury, S.Si.Teol.',
                'Tugas' => '81',
                'UTS' => '88',
                'UAS' => '81',
            ),
            137 =>
            array(
                'Kelas' => '2C',
                'NIS' => '321044',
                'Nama' => 'Kelvin Benjamin',
                'Walikelas' => 'Joane Lynne Nahumury, S.Si.Teol.',
                'Tugas' => '84',
                'UTS' => '78',
                'UAS' => '84',
            ),
            138 =>
            array(
                'Kelas' => '2C',
                'NIS' => '321046',
                'Nama' => 'Kenzo Alexander Tjhin',
                'Walikelas' => 'Joane Lynne Nahumury, S.Si.Teol.',
                'Tugas' => '91',
                'UTS' => '94',
                'UAS' => '91',
            ),
            139 =>
            array(
                'Kelas' => '2C',
                'NIS' => '321052',
                'Nama' => 'Maria Chatura Zisel Pradoko',
                'Walikelas' => 'Joane Lynne Nahumury, S.Si.Teol.',
                'Tugas' => '91',
                'UTS' => '84',
                'UAS' => '91',
            ),
            140 =>
            array(
                'Kelas' => '2C',
                'NIS' => '321054',
                'Nama' => 'Maxwell Dominic Wu',
                'Walikelas' => 'Joane Lynne Nahumury, S.Si.Teol.',
                'Tugas' => '88',
                'UTS' => '84',
                'UAS' => '88',
            ),
            141 =>
            array(
                'Kelas' => '2C',
                'NIS' => '321055',
                'Nama' => 'Mercy Bellvania Cheryll Anjelita Rynnko',
                'Walikelas' => 'Joane Lynne Nahumury, S.Si.Teol.',
                'Tugas' => '97',
                'UTS' => '84',
                'UAS' => '97',
            ),
            142 =>
            array(
                'Kelas' => '2C',
                'NIS' => '321062',
                'Nama' => 'Raline Alissya Sutanto',
                'Walikelas' => 'Joane Lynne Nahumury, S.Si.Teol.',
                'Tugas' => '100',
                'UTS' => '100',
                'UAS' => '100',
            ),
            143 =>
            array(
                'Kelas' => '2C',
                'NIS' => '321063',
                'Nama' => 'Raphael Owen Muljono',
                'Walikelas' => 'Joane Lynne Nahumury, S.Si.Teol.',
                'Tugas' => '88',
                'UTS' => '78',
                'UAS' => '88',
            ),
            144 =>
            array(
                'Kelas' => '2C',
                'NIS' => '321073',
                'Nama' => 'Valerie Elena Candra',
                'Walikelas' => 'Joane Lynne Nahumury, S.Si.Teol.',
                'Tugas' => '100',
                'UTS' => '97',
                'UAS' => '100',
            ),
            145 =>
            array(
                'Kelas' => '2D',
                'NIS' => '321005',
                'Nama' => 'Alice May Hwang',
                'Walikelas' => 'Johana Alim, S.Psi.',
                'Tugas' => '88',
                'UTS' => '88',
                'UAS' => '88',
            ),
            146 =>
            array(
                'Kelas' => '2D',
                'NIS' => '321010',
                'Nama' => 'Ashton Santoso',
                'Walikelas' => 'Johana Alim, S.Psi.',
                'Tugas' => '97',
                'UTS' => '81',
                'UAS' => '97',
            ),
            147 =>
            array(
                'Kelas' => '2D',
                'NIS' => '321014',
                'Nama' => 'Aylee Dashellin Teja',
                'Walikelas' => 'Johana Alim, S.Psi.',
                'Tugas' => '100',
                'UTS' => '81',
                'UAS' => '100',
            ),
            148 =>
            array(
                'Kelas' => '2D',
                'NIS' => '321017',
                'Nama' => 'Cayleen Nathaniela Halim',
                'Walikelas' => 'Johana Alim, S.Psi.',
                'Tugas' => '91',
                'UTS' => '94',
                'UAS' => '91',
            ),
            149 =>
            array(
                'Kelas' => '2D',
                'NIS' => '321018',
                'Nama' => 'Celine Leyna Handoko',
                'Walikelas' => 'Johana Alim, S.Psi.',
                'Tugas' => '91',
                'UTS' => '81',
                'UAS' => '91',
            ),
            150 =>
            array(
                'Kelas' => '2D',
                'NIS' => '321024',
                'Nama' => 'Derrick Lionel Ongkowijoyo',
                'Walikelas' => 'Johana Alim, S.Psi.',
                'Tugas' => '91',
                'UTS' => '84',
                'UAS' => '91',
            ),
            151 =>
            array(
                'Kelas' => '2D',
                'NIS' => '321032',
                'Nama' => 'Haven Cheryl Muntono',
                'Walikelas' => 'Johana Alim, S.Psi.',
                'Tugas' => '100',
                'UTS' => '91',
                'UAS' => '100',
            ),
            152 =>
            array(
                'Kelas' => '2D',
                'NIS' => '321033',
                'Nama' => 'Jaden Chrisello',
                'Walikelas' => 'Johana Alim, S.Psi.',
                'Tugas' => '97',
                'UTS' => '91',
                'UAS' => '97',
            ),
            153 =>
            array(
                'Kelas' => '2D',
                'NIS' => '321042',
                'Nama' => 'Karen Chloe',
                'Walikelas' => 'Johana Alim, S.Psi.',
                'Tugas' => '91',
                'UTS' => '94',
                'UAS' => '91',
            ),
            154 =>
            array(
                'Kelas' => '2D',
                'NIS' => '321048',
                'Nama' => 'Kenzo Sugiono',
                'Walikelas' => 'Johana Alim, S.Psi.',
                'Tugas' => '91',
                'UTS' => '81',
                'UAS' => '91',
            ),
            155 =>
            array(
                'Kelas' => '2D',
                'NIS' => '321061',
                'Nama' => 'Kevin Rafael Xavier Tan',
                'Walikelas' => 'Johana Alim, S.Psi.',
                'Tugas' => '80',
                'UTS' => '-',
                'UAS' => '80',
            ),
            156 =>
            array(
                'Kelas' => '2D',
                'NIS' => '321051',
                'Nama' => 'Kimberly Wahjudy',
                'Walikelas' => 'Johana Alim, S.Psi.',
                'Tugas' => '97',
                'UTS' => '91',
                'UAS' => '97',
            ),
            157 =>
            array(
                'Kelas' => '2D',
                'NIS' => '321053',
                'Nama' => 'Matthew Keane Budianto',
                'Walikelas' => 'Johana Alim, S.Psi.',
                'Tugas' => '88',
                'UTS' => '94',
                'UAS' => '88',
            ),
            158 =>
            array(
                'Kelas' => '2D',
                'NIS' => '321059',
                'Nama' => 'Nicholas Matthew Salim',
                'Walikelas' => 'Johana Alim, S.Psi.',
                'Tugas' => '81',
                'UTS' => '81',
                'UAS' => '81',
            ),
            159 =>
            array(
                'Kelas' => '2D',
                'NIS' => '321067',
                'Nama' => 'Richelle Jocelyn Sutanto',
                'Walikelas' => 'Johana Alim, S.Psi.',
                'Tugas' => '97',
                'UTS' => '81',
                'UAS' => '97',
            ),
            160 =>
            array(
                'Kelas' => '2D',
                'NIS' => '321071',
                'Nama' => 'Timotius Raphael Yulianto',
                'Walikelas' => 'Johana Alim, S.Psi.',
                'Tugas' => '91',
                'UTS' => '97',
                'UAS' => '91',
            ),
            161 =>
            array(
                'Kelas' => '2D',
                'NIS' => '321072',
                'Nama' => 'Valerie Azlynn Ongkowijoyo',
                'Walikelas' => 'Johana Alim, S.Psi.',
                'Tugas' => '97',
                'UTS' => '94',
                'UAS' => '97',
            ),
            162 =>
            array(
                'Kelas' => '2D',
                'NIS' => '321075',
                'Nama' => 'Vinson Reynaldo Jayasaputra',
                'Walikelas' => 'Johana Alim, S.Psi.',
                'Tugas' => '91',
                'UTS' => '93',
                'UAS' => '91',
            ),
        );
        DB::beginTransaction();
        foreach ($data as $item) {
            $newKelas = Kelas::where("name", $item['Kelas'])->first();
            $wali = User::where("name", "like", "%" . explode(" ",$item["Walikelas"])[0] . "%")->first();
            if (!$newKelas) {
                $kelas = Kelas::create(["name" => $item["Kelas"], "user_id" => $wali?$wali->id:26]);
                $siswa=Siswa::create(["name" => $item["Nama"], "kelas_id" => $kelas->id, "tahun_ajaran_id" => 1]);
                Penempatan::create(["siswa_id"=>$siswa->id,"kelas_id"=>$kelas->id,"tahun_ajaran_id" => 1]);
                continue;
            }
            $siswa=Siswa::create(["name"=>$item["Nama"],"kelas_id"=>$newKelas->id,"tahun_ajaran_id"=>1]);
            Penempatan::create(["siswa_id"=>$siswa->id,"kelas_id"=>$newKelas->id,"tahun_ajaran_id" => 1]);
        }
        DB::commit();
    }
}
