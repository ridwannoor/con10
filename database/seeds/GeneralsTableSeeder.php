<?php

use Illuminate\Database\Seeder;

class GeneralsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name'=>'website','email'=>'info@website.com','alamat'=>'','twitter'=>'','linkedin'=>'','facebook'=>'','instagram'=>'','whatsapp'=>'+6287788518142'],
        ];

        foreach($data as $d){
            DB::table('generals')->insert([
                'name' => $d['name'],
                'email' => $d['email'],
                'twitter' => $d['twitter'],
                'linkedin' => $d['linkedin'],
                'facebook' => $d['facebook'],
                'instagram' => $d['instagram'],
                'whatsapp' => $d['whatsapp'],
            ]);
        }
    }
}
