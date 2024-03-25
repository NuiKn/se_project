<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Setkpi extends DB
{
   
    protected $fillable = [
        'titleset'
    ];
}
