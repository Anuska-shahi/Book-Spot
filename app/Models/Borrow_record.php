<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrow_record extends Model
{
    protected $fillable = [
        'book_id',
        'user_id',
        'issued_date',
        'due_date',
        'status',
        'returned_date',
    ];
}