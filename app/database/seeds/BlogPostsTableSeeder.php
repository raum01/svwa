<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use svwa\BlogPosts\BlogPost;

class BlogPostsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		$user = \svwa\users\User::lists('id');

		foreach(range(1, 10) as $index)
		{
			BlogPost::create([
			'user_id' => $faker->randomElement($user),
				'body' => $faker->sentence()
			]);
		}
	}

}