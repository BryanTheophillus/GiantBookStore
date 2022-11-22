<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Catagory;
use App\Models\BookCatagory;
class BookController extends Controller
{
    public function getAllBooks() {
        $books = Book::Paginate(4);
        $catagories = Catagory::all();
        return view('Home', compact('books','catagories'));
    }

    public function getBooksByCategory($catagory) {
        $currCatagory = Catagory::find($catagory);
        $booksCat = BookCatagory::where('catagory_id',$catagory)->get();

        $catagories = Catagory::all();
        return view('catagory', compact('booksCat','currCatagory', 'catagories'));
    }

    public function viewContact() {
        $catagories = Catagory::all();

        return view('contact', compact('categories'));
    }
}
