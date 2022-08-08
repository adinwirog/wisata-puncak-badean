<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookList extends Model
{
    use HasFactory;

    public $timestamps = false;

    

    public function visitor() {
        return $this->belongsTo(Visitors::class);
    }

    public function tiket() {
        return $this->belongsTo(Tiket::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
