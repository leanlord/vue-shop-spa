<?php

    namespace Database\Seeders;

    use App\Models\Household;
    use App\Models\Product;
    use App\Models\User;
    use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use Illuminate\Database\Seeder;

    class DatabaseSeeder extends Seeder
    {
        /**
         * Seed the application's database.
         *
         * @return void
         */
        public function run() {
            User::factory(5)->create();
            Household::factory(20)->create();
            Product::factory(20)->create();
        }
    }
