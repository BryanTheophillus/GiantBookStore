<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catagory;
use App\Models\Book;
class NavigationController extends Controller
{
    public function Home(){
        return view('Home');
    }

    public function contact(){
        $catagories = Catagory::all();
        return view('contact', compact('catagories'));
    }

    public function getDetail($book) {
        $detail = Book::find($book);
        $catagories = Catagory::all();

        return view('detail', compact('detail', 'catagories'));
    }

    public function publisher(){
        return view('publisher');
    }


}
// {{-- Bryan Theophilllus -2401953966
//     Kelas LL01 --}}
