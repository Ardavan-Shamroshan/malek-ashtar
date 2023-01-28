<?php

namespace Modules\PostCategory\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Post\Entities\Post;
use Modules\PostCategory\Entities\PostCategory;

class PostCategoryDatabaseSeeder extends Seeder
{
    protected $categories = [
        ['name' => 'اخبار', 'status' => 1],
        ['name' => 'دلنوشته', 'status' => 1],
        ['name' => 'یادیاران', 'status' => 1],
        ['name' => 'جانبازان', 'status' => 1],
        ['name' => 'رویداد ها', 'status' => 1],
        ['name' => 'فراخوان', 'status' => 1],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Model::unguard();

        // $this->call("OthersTableSeeder");


        foreach ($this->categories as $category) {
            PostCategory::query()->create($category);
        }
    }
}
