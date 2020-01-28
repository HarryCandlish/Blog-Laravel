<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($counter=0; $counter < 100; $counter++){
    
            DB::table('comments')->insert([
                     'post_id' => rand(1,100),
                     'user_id' => Str::random(10),
                     'comment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                     incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco',
                     'image' => Str::random(10),
            ]);
        }
    }
}
