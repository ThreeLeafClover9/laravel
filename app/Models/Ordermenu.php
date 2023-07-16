<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordermenu extends Model
{
    use HasFactory;

    protected $table = 'ordermenus';
    protected $fillable = [
        'from',
        'name',
        'count',
    ];
}
