<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customerr extends Model
{
    use HasFactory;

    protected $fillable = ['name','address','phone','created_at','updated_at'];    // that's is exactly sir important
}
