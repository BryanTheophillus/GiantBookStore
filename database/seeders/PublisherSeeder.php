<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Publisher;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Publisher::create([
            'name' => 'Toko Buku',
            'address' => 'Jalan Daan mogot no 10',
            'phone' =>'098881334',
            'email' => 'tokobuku@gmail.com',
            'image'=>'image/Logo.png'
        ]);

        Publisher::create([
            'name' => 'Lapak Buku',
            'address' => 'Ragunan no 9',
            'phone' =>'0584881334',
            'email' => 'lapakbuku@gmail.com',
            'image'=>'image/Logo.png'
        ]);

        Publisher::create([
            'name' => 'Salah Buku',
            'address' => 'Jalan Delima no 10',
            'phone' =>'08138434',
            'email' => 'Salahbuku@gmail.com',
            'image'=>'image/Logo.png'
        ]);

        Publisher::create([
            'name' => 'Buka Buku',
            'address' => 'Bintaro Jaya no 10',
            'phone' =>'087898152',
            'email' => 'bukabuku@gmail.com',
            'image'=>'image/Logo.png'
        ]);
    }
}
