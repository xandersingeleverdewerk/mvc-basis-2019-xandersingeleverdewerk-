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
        //
        factory(App\Category::class, 10)->create()
            ->each(function ($category) {
                $category->Book()->saveMany (factory(\App\Book::class, rand(0,5))
                    ->create(['category_id' => $category->id]));
            });
    }
}
