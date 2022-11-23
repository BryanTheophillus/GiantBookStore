<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    use HasFactory;
    public function book() {
        return $this->hasMany(Book::class);
    }
}
// {{-- Bryan Theophilllus -2401953966
//     Kelas LL01 --}}
