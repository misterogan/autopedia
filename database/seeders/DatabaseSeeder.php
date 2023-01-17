<?php

namespace Database\Seeders;

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
        \App\Models\User::factory(1)->create();
        $this->call(AboutsTableSeeder::class);
        $this->call(BannersTableSeeder::class);
        $this->call(BlogCategoriesTableSeeder::class);
        $this->call(BlogsTableSeeder::class);
        $this->call(BusinessFeaturesTableSeeder::class);
        $this->call(BusinessesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(FeedbacksTableSeeder::class);
        $this->call(FilesTableSeeder::class);
        $this->call(JobsTableSeeder::class);
        $this->call(ManagementsTableSeeder::class);
        $this->call(SubcategoryTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(MilestonesTableSeeder::class);
    }
}
