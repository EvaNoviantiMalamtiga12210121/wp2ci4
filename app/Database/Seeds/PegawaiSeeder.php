<?php

namespace App\Database\Seeds;

use App\Models\PegawaiModel;
use CodeIgniter\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    public function run()
    {
        $id = (new PegawaiModel())->insert([
            'nip'               => '123456789',
            'nama_depan'        => 'Shanks',
            'nama_belakang'     => 'Red Hair',
            'gelar_depan'       => 'S.H',
            'gelar_belakang'    => 'M.H',
            'gender'            => 'L',
            'no_telp'           => '086512124567',
            'no_wa'             => '086545624567',
            'email'             => 'Shanks@gmail.com',
            'bagian_id'         => '3',
            'alamat'            => 'Jalan Tebu',
            'kota'              => 'Pontianak',
            'tgl_lahir'         => '1975-02-03',
            'tempat_lahir'      => 'Pontianak', 
            'sandi'             => '123456', 
        ]);
            echo "hasil id = $id";


        $id = (new PegawaiModel())->insert([
            'nip'               => '12321312',
            'nama_depan'        => 'Alung',
            'nama_belakang'     => 'Tan',
            'gelar_depan'       => 'S.KOM',
            'gelar_belakang'    => 'M.KOM',
            'gender'            => 'L',
            'no_telp'           => '08652312331',
            'no_wa'             => '08956732112',
            'email'             => 'alung@gmail.com',
            'bagian_id'         => '1',
            'alamat'            => 'Jalan Pasir',
            'kota'              => 'Pontianak',
            'tgl_lahir'         => '1963-02-20',
            'tempat_lahir'      => 'Pontianak',
            'sandi'             => '123456', 
        ]);


        echo "hasil id = $id";
    }
}

