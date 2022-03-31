<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\personajes;

class personajesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $n_personaje=["Princesa Leia","Anakin Skywalker","Han Solo","Chewbacca","Boba Fett","R2-D2","Luke Skywalker","C3PO"];
        $n_actor=["Leia Organa","Hayden Christensen","Harrison Ford","Temuera Morrison","Kenny Baker","Mark Hamill","Anthony Daniels"];
        $p_aparicion=["Star Wars: Episodio IV - Una nueva esperanza","Star Wars: Episode VI - Return of the Jedi (Anakin Skywalker)
        Star Wars: Episode IV - A New Hope (Darth Vader)","Episodio IV: Una nueva esperanza","Star Wars: Episodio IV - Una nueva esperanza","Star Wars: Episodio IV - Una nueva esperanza","Star Wars: Episodio IV - Una nueva esperanza","Star Wars: Episodio IV - Una nueva esperanza","Star Wars: Episodio IV - Una nueva esperanza","Star Wars: Episodio IV - Una nueva esperanza"];
        $sexo=["Femenino","Masculino","Masculino","Masculino","Masculino","Robot","Masculino","Robot"];
        $u_aparicion=["Star Wars: Episodio IX - El ascenso de Skywalker","Star Wars: Episodio IX - El ascenso de Skywalker","	
        Star Wars: Episodio IX - El ascenso de Skywalker","Star Wars: Episodio IX - El ascenso de Skywalker","The Book of Boba Fett","Star Wars: Episodio IX - El ascenso de Skywalker","El Libro de Boba Fett","Star Wars: Episodio IX - El ascenso de Skywalker"];


                
                for($i =0;$i<5;$i++)
                {
                    DB::table('personajes')->insert([
                    'nombre_personaje' =>$n_personaje[$i],
                    'Actor' =>$n_actor[$i],
                    'primera_aparicion' =>$p_aparicion[$i],
                    'sexo' =>$sexo[$i],
                    'ultima_aparicion' =>$u_aparicion[$i],
                    ]);
                }
                
            

        
        
    }
}
