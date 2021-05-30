<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecolectoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($ciudadano_id = 10;$ciudadano_id<31;$ciudadano_id++) {
            $i = random_int(2,8); //la cantidad de centros en los que voy a meter al ciudadano como recolector
            $centros_array = range(1,9); //los ids de los centros
            shuffle($centros_array);
            $centros_del_ciudadano = array_slice($centros_array,0,$i);
            $recolectores = [];
            foreach($centros_del_ciudadano as $centro_id) {
                $recolectores[] = [
                    "voluntario_id" => $ciudadano_id,
                    "centro_id" => $centro_id
                ];
            }
            DB::table('recolectores')->insert($recolectores);
        }
    }
}
