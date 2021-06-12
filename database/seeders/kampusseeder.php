<?php

namespace Database\Seeders;

use App\Models\kampus;
use Illuminate\Database\Seeder;

class kampusseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kmps1 = new kampus();
        $kmps1->nbi = "1461800030";
        $kmps1->nama_mhs = "Adam Pratama";
        $kmps1->save();


    }
}
