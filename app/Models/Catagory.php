<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    use HasFactory;
    public function bookcatagory() {
        return $this->hasMany(BookCatagory::class);
    }
}
// {{-- Bryan Theophilllus -2401953966
//     Kelas LL01 --}}
