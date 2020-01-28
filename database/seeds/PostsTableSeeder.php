<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        for ($counter=0; $counter < 100; $counter++){
        $title = Str::random(10);

        DB::table('posts')->insert([
                 'author' => Str::random(10),
                 'title' => $title,
                 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                 incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco',
                 'image' => 'https://www.google.com/search?q=images&source=lnms&tbm=isch&sa=X&ved=2ahUKEwiintuEoaXnAhVB_XMBHTK_B6IQ_AUoAXoECA8QAw&biw=1680&bih=939#imgrc=pK-xSEi-XN8AhM:',
                 'slug' => Str::slug($title),
                 'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                 incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcoLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                 incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco',
        ]);
    }
    }
}
