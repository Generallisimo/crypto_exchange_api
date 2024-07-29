<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionConfirmBot extends Model
{
    use HasFactory;

    protected $fillable = ['transaction_id', 'confirmed', 'status'];
}
