<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::create(['name' => 'カテゴリ']);
        $category2 = Category::create(['name' => 'category2']);
        $category3 = Category::create(['name' => 'category3']);

        $todos = [
            ['category_id' => $category->id, 'content' => 'Todo'],
            ['category_id' => $category2->id, 'content' => 'Todo'],
            ['category_id' => $category3->id, 'content' => 'Todo'],
        ];
        DB::table('todos')->insert($todos);
    }
}
