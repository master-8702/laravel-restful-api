<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $fillable = ['id','name', 'description', 'price','stars', 'image', 'location', 'type_id', 'created_at','updated_at'];
}
