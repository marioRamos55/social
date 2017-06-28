<?php

use Illuminate\Database\Seeder;

class ProgramsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

    	DB::table('programas')->insert([
            'nombrePrograma' => 'CTA',
            'horario' => '8-1',
      
        ]);

    	DB::table('programas')->insert([
            'nombrePrograma' => 'FINANZAS',
            'horario' => '9-5',
      
        ]);

        DB::table('programas')->insert([
            'nombrePrograma' => 'BIBLIOTECA',
            'horario' => '9-6',
      
        ]);
    	
        


    }
}
