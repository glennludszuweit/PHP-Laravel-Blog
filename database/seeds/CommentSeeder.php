<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            ['user_id' => 6, 'post_id' => 13, 'content' => 'Comment one content'],
            ['user_id' => 6, 'post_id' => 14, 'content' => 'Comment two content'],
            ['user_id' => 6, 'post_id' => 15, 'content' => 'Comment three content'],
            ['user_id' => 6, 'post_id' => 16, 'content' => 'Comment four content'],
            ['user_id' => 6, 'post_id' => 17, 'content' => 'Comment five content'],
        ]);
    }
}
