<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        Listing::factory(6)->create();
      /*  Listing::create(
            [
                'id'=>1,
                'title'=>'title1',
                'tags'=>'tag1',
                'company'=>'company1',
                'location'=>'location1',
                'email'=>'email1',
                'website'=>'website1',
                'description'=>'Google Translate is a multilingual neural machine translation service developed by Google to translate text, documents and websites from one language into another. It offers a website interface, a mobile app for Android and iOS, and an API that helps developers',
            ]
        );

        Listing::create(
            [
                'id'=>2,
                'title'=>'title2',
                'tags'=>'tag2',
                'company'=>'company2',
                'location'=>'location2',
                'email'=>'email2',
                'website'=>'website2',
                'description'=>'Google Translate is a multilingual neural machine translation service developed by Google to translate text, documents and websites from one language into another. It offers a website interface, a mobile app for Android and iOS, and an API that helps developers',
            ]
        );*/

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
