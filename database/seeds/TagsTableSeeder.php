<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name'=>'Compaisi'],
            ['name'=>'Skksnja'],
            ['name'=>'Hyushs'],
        ];

        foreach($data as $d){
            DB::table('tags')->insert([
                'name' => $d['name'],
               
            ]);
        }
    }
}
