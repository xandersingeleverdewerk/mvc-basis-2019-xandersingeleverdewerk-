<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(App\User::class, 1)->create(['name' => 'owner',
            'email' => 'owner@site.nl',
            'password' => bcrypt('test123')]);

        factory(App\User::class, 1)->create(['name' => 'moderator',
            'email' => 'moderator@site.nl',
            'password' => bcrypt('test123')]);
    
        factory(App\User::class, 1)->create(['name' => 'customer',
            'email' => 'costumer@site.nl',
            'password' => bcrypt('test123')]);

        factory(App\User::class, 25)->create();
    }
}
