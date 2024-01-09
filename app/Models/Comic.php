<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;
    // metto qua quelli che non voglio salvare (quelli che voglio escludere)
    // protected $guarded = [];

    // or
    
    // i dati che voglio salvare sul database
    protected $fillable = ['title', 'description', 'price', 'type'];
}
