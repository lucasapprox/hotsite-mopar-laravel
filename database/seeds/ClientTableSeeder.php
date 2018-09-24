<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('clients')->insert([
            'name'=>'Marcos',
            'registration'=>'0921309098182',
            'location'=>'MG',
            'shirtSize'=>'P',
            'word'=>'trabalho',
            
        ]);
        DB::table('clients')->insert([
            'name'=>'Maria',
            'registration'=>'8937482778972',
            'location'=>'SP',
            'shirtSize'=>'GG',
            'word'=>'trabalho',
            
        ]);
        DB::table('clients')->insert([
            'name'=>'Janaina',
            'registration'=>'01293091123',
            'location'=>'AC',
            'shirtSize'=>'M',
            'word'=>'trabalho',
            
        ]);
    }
}
