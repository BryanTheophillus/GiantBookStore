<?php
// {{-- Bryan Theophilllus -2401953966
//     Kelas LL01 --}}
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Catagory;
class CatagorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $catagories = ['Fiction', 'Science', 'Romance', 'Legend','Fantacy'];
        for ($i=0; $i < count($catagories ); $i++) {
            Catagory::create([
                'name' => $catagories [$i],
            ]);
        }
    }
}
