<?php
// {{-- Bryan Theophilllus -2401953966
//     Kelas LL01 --}}
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'publisher_id'=> 2,
            'title'=> 'Twilight Forest',
            'author' => 'Cassey',
            'year' => '2022',
            'synopsis' => 'This is a book that tell a love story that happen in a mystical place ',
            'image' => 'image/BookCover.jpg'
        ]);

        Book::create([
            'publisher_id'=> 1,
            'title'=> 'Buku Menarik',
            'author' => 'Bryan',
            'year' => '2017',
            'synopsis' => 'This is a book that contains a number of unique facts about the world.',
            'image' => 'image/BookCover.jpg'
        ]);

        Book::create([
            'publisher_id'=> 2,
            'title'=> 'Bukunya Harris',
            'author' => 'Kelly',
            'year' => '2021',
            'synopsis' => 'This is a book that contains a history of life from harris',
            'image' => 'image/BookCover.jpg'
        ]);

        Book::create([
            'publisher_id'=> 3,
            'title'=> 'Malin Kundang',
            'author' => 'Joe',
            'year' => '1998',
            'synopsis' => 'This is a book about a legend name malin Kundang',
            'image' => 'image/BookCover.jpg'
        ]);

        Book::create([
            'publisher_id'=> 4,
            'title'=> 'Brave Dragon',
            'author' => 'Owen',
            'year' => '2018',
            'synopsis' => 'This is a book that tell a story about a brave dragon that live in the mountain',
            'image' => 'image/BookCover.jpg'
        ]);

        Book::create([
            'publisher_id'=> 4,
            'title'=> 'StarBlade: Return',
            'author' => 'Nicolas',
            'year' => '2022',
            'synopsis' => 'This is a book that tell a exploration in the space of the universe',
            'image' => 'image/BookCover.jpg'
        ]);

        Book::create([
            'publisher_id'=> 1,
            'title'=> 'Lonely Bunny',
            'author' => 'Christope',
            'year' => '2007',
            'synopsis' => 'This is a book that tell a story about a lonely bunny',
            'image' => 'image/BookCover.jpg'
        ]);

        Book::create([
            'publisher_id'=> 1,
            'title'=> 'The Return Jedi',
            'author' => 'Felix',
            'year' => '2019',
            'synopsis' => 'This is a book that tell a story about a jedi jurney to search for his home',
            'image' => 'image/BookCover.jpg'
        ]);

        Book::create([
            'publisher_id'=> 2,
            'title'=> 'Alexander Graham Bell',
            'author' => 'Bayu',
            'year' => '2010',
            'synopsis' => 'This is a book that tell a story about Alexander Graham Bell',
            'image' => 'image/BookCover.jpg'
        ]);

        Book::create([
            'publisher_id'=> 3,
            'title'=> 'Albert Einstein',
            'author' => 'Audia',
            'year' => '2021',
            'synopsis' => 'This is a book that tell a story about Albert Einstein',
            'image' => 'image/BookCover.jpg'
        ]);

        Book::create([
            'publisher_id'=> 3,
            'title'=> 'Tangkuban Perahu',
            'author' => 'Audina',
            'year' => '2005',
            'synopsis' => 'This is a book that tell a legend about Tagkuban Perahu',
            'image' => 'image/BookCover.jpg'
        ]);

        Book::create([
            'publisher_id'=> 4,
            'title'=> 'Candi Borobudur',
            'author' => 'Daffa',
            'year' => '2003',
            'synopsis' => 'This is a book that tell a legend about Candi Borobudur',
            'image' => 'image/BookCover.jpg'
        ]);

        Book::create([
            'publisher_id'=> 4,
            'title'=> 'Candi Prambanan',
            'author' => 'Fatma',
            'year' => '2004',
            'synopsis' => 'This is a book that tell a legend about Candi Prambanan',
            'image' => 'image/BookCover.jpg'
        ]);

        Book::create([
            'publisher_id'=> 1,
            'title'=> 'Love Bird',
            'author' => 'Yahya',
            'year' => '2020',
            'synopsis' => 'This is a book that tell about 2 person that love each other until the died',
            'image' => 'image/BookCover.jpg'
        ]);

        Book::create([
            'publisher_id'=> 2,
            'title'=> 'Science',
            'author' => 'Brian',
            'year' => '2016',
            'synopsis' => 'This Book is all about Science',
            'image' => 'image/BookCover.jpg'
        ]);

        Book::create([
            'publisher_id'=> 3,
            'title'=> 'Kancil',
            'author' => 'Wilbert',
            'year' => '2010',
            'synopsis' => 'This is a book that tell about kancil that really smart',
            'image' => 'image/BookCover.jpg'
        ]);
    }
}
