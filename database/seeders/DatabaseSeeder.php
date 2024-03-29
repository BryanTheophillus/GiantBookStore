<?php
// {{-- Bryan Theophilllus -2401953966
//     Kelas LL01 --}}
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
        // \App\Models\User::factory(10)->create();
        $this->call(PublisherSeeder::class);
        $this->call(CatagorieSeeder::class);
        $this->call(BookSeeder::class);
        $this->call(BookCatagorySeeder::class);
    }
}
