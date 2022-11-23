<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catagory;
use App\Models\Publisher;
use App\Models\Book;

class PublisherController extends Controller
{
    public function Publisher() {
        $publisher = Publisher::simplePaginate(10);
        $catagories = Catagory::all();

        return view('publisher', compact('publisher','catagories'));
    }

    public function getPublisherDetail($PublisherDetail){
        $currPublisher = Publisher::find($PublisherDetail);
        $PublisherBook = Book::where('publisher_id',$PublisherDetail)->get();
        $catagories = Catagory::all();

        return view('publisherdetail', compact('PublisherBook','currPublisher','catagories'));
    }


}
// {{-- Bryan Theophilllus -2401953966
//     Kelas LL01 --}}
