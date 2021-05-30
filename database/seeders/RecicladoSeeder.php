<?php

namespace Database\Seeders;

use App\Models\Reciclado;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecicladoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reciclados = [];

        for($ciudadano = 31; $ciudadano<41;$ciudadano++) {
            for($i = 0;$i<5;$i++) { //cada ciudadano hace 5 reciclados
                $centro_id = rand(1,9);
                $recolectores_id = DB::select('select voluntario_id from recolectores where centro_id = ?', [$centro_id]);
                $recolector = $recolectores_id[array_rand($recolectores_id)];
                $reciclados[] = [
                    "transporte" => Reciclado::TRANSPORTES[rand(0,3)],
                    "objeto" => Reciclado::OBJETOS[rand(0,2)],
                    "fecha_contacto" => Carbon::now()->subDays(rand(16,40)),
                    "fecha_recoleccion" => Carbon::now()->subDays(rand(1,15)),
                    "ciudadano_id" => $ciudadano,
                    "recolector_id" => $recolector->voluntario_id,
                    "centro_id" => $centro_id
                ];
            }
        }

        DB::table('reciclados')->insert($reciclados);
    }
}
