<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardItems extends Model
{   
    use HasFactory; 
    protected $table = 'Card_Items';
    protected $primaryKey = 'id';
}
