<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class sagaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nombre_saga=["La guerra de las galaxias ","El imperio contraataca","El regreso del Jedi","Star wars: Episodio I - La amenaza fantasma","Star Wars: Episodio II - El ataque de los clones","Star wars: Episodio III - La venganza de los sith","Star Wars: El despertar de la Fuerza","Rogue One: Una historia de Star Wars","Star Wars: Los últimos Jedi","Han Solo: Una historia de Star Wars"];
        $año=["1977","1980","1983","1999","2002","2005","2015","2016","2017","2018"];
        $director=["George Lucas","Irvin Kershner","Richard Marquand","George Lucas","George Lucas","George Lucas","J.J. Abrams","Gareth Edwards","Rian Johnson","Ron Howard"];
        

        for($i =0;$i<5;$i++)
        {
            DB::table('sagas')->insert([
            'nombre_saga' =>$nombre_saga[$i],
            'año' =>$año[$i],
            'director' =>$director[$i]
            ]);
        }
    }
}
