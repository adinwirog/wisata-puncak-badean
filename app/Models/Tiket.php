<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;

    public function tipeTiket() {
        return $this->belongsTo(TipeTiket::class);
    }

    public function bookList() {
        return $this->hasOne(BookList::class);
    }
}
