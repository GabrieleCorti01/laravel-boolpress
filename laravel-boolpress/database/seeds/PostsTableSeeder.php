<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Post;

use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        
        for ($i= 0 ; $i <20 ; $i++){
            $newPost = new Post();
            $newPost->title = $faker->name();
            $newPost->author = $faker->name();
            $newPost->post_content = $faker->paragraphs(6, true);
            $newPost->image_url = $faker->imageUrl(1000, 400, $newPost->title , true, $newPost->author);


            $newPost->slug = Str::slug($newPost->title, '-');
            $newPost->save();
        }

    }
}
