<?php

use Illuminate\Database\Seeder;


class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['title'=>'website','content'=>'info'],
            ['title'=>'website1','content'=>'info1'],
            ['title'=>'website2','content'=>'info2'],
        ];

        foreach($data as $d){
            DB::table('categories')->insert([
                'title' => $d['title'],
                'content' => $d['content'],
            ]);
        }
    }
}
