<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rahim extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','price','expiry_date',
    ];
}
