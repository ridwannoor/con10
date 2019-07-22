<?php

use App\Models\User;
use Carbon\Carbon;
use App\Models\Tag;
use App\Models\Blog;
use App\Models\Comment;
use App\Models\Categorie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DummyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Categorie::class, 10)->create();
        factory(Tag::class, 10)->create();
        factory(User::class, 9)->create();
        factory(Blog::class, 25)->create();

        factory(Comment::class, 40)->create();

        $data = [];
        for($i=0; $i<60; $i++) {
            $data[] = [
                'post_id'    => rand(1, 25),
                'tag_id'     => rand(1, 10),
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ];
        }

        DB::table('post_tag')->insert($data);
    }
}
