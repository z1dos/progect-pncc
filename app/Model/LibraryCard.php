<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibraryCard extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'id',
        'id_reader',
        'id_book',
        'date_of_receiving',
        'delivery_date',
        'passed',
    ];
}