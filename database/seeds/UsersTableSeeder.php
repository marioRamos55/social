<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        

        for($i=0;$i<9;$i++) {
        	# code...
       
        DB::table('users')->insert([
            'nombre'=>'$Prestador'.$i,
            'correo'=> $i.'@l.com',
            'password'=>'123456',
            'codigo'=>$i,
            'carrera_id'=>'1',
            'rol'=>'Prestador',
            ]);
        	 }

    }
}
