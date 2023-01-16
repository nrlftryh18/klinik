<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\CekUp;

class CekUpSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cekup')->insert([
            'CERVICAL'=>'coba',
            'THORAXAL'=>'coba',
            'LUMBAR'=>'coba',
            'SACRAL'=>'coba',
            'PELVIS'=>'coba',
            'PLINTIRAN'=>'coba',
            'KOMPRESI'=>'coba',
            'TYPE_VETERBRA'=>'coba',
            'TYPE_THORAX'=>'coba',
            'VISUAL'=>'coba',
        ]);
    }
}
