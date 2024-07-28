<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeeCurrency extends Model
{
    use HasFactory;

    protected $fillable = ['currency', 'fee'];
    
}
