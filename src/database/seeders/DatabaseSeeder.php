<?php

namespace Database\Seeders;

use App\Models\Todo;
use App\Models\Category;
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
        // \App\Models\User::factory(10)->create();
        Category::factory(6)->create();

        Todo::factory(10)->create();

        /*
        各カテゴリに１つずつTodoを作る場合（合計１０）
        
         $categories = Category::factory(10)->create();
        
         foreach ($categories as $category) {
            Todo::factory()->create([
                'category_id' => $category->id,
            ]];
         }
        */
    }
}
