<?php

namespace Database\Seeders;
// {{-- Bryan Theophilllus -2401953966
//     Kelas LL01 --}}
use Illuminate\Database\Seeder;
use App\Models\BookCatagory;
class BookCatagorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BookCatagory::create([
            'book_id'=> 1,
            'catagory_id' => 3
        ]);

        BookCatagory::create([
            'book_id'=> 1,
            'catagory_id' => 1
        ]);

        BookCatagory::create([
            'book_id'=> 2,
            'catagory_id' => 3
        ]);

        BookCatagory::create([
            'book_id'=> 3,
            'catagory_id' => 4
        ]);

        BookCatagory::create([
            'book_id'=> 4,
            'catagory_id' => 5
        ]);

        BookCatagory::create([
            'book_id'=> 5,
            'catagory_id' => 1
        ]);

        BookCatagory::create([
            'book_id'=> 6,
            'catagory_id' => 3
        ]);

        BookCatagory::create([
            'book_id'=> 7,
            'catagory_id' => 2
        ]);

        BookCatagory::create([
            'book_id'=> 8,
            'catagory_id' => 1
        ]);

        BookCatagory::create([
            'book_id'=> 8,
            'catagory_id' => 5
        ]);

        BookCatagory::create([
            'book_id'=> 9,
            'catagory_id' => 2
        ]);

        BookCatagory::create([
            'book_id'=> 10,
            'catagory_id' => 2
        ]);

        BookCatagory::create([
            'book_id'=> 11,
            'catagory_id' => 4
        ]);

        BookCatagory::create([
            'book_id'=> 12,
            'catagory_id' => 4
        ]);

        BookCatagory::create([
            'book_id'=> 13,
            'catagory_id' => 4
        ]);

        BookCatagory::create([
            'book_id'=> 14,
            'catagory_id' => 1
        ]);

        BookCatagory::create([
            'book_id'=> 14,
            'catagory_id' => 5
        ]);

        BookCatagory::create([
            'book_id'=> 14,
            'catagory_id' => 3
        ]);

        BookCatagory::create([
            'book_id'=> 15,
            'catagory_id' => 2
        ]);

        BookCatagory::create([
            'book_id'=> 16,
            'catagory_id' => 5
        ]);
    }
}
