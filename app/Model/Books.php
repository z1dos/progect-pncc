<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'author',
        'title',
        'the_year_of_publishing',
        'is_it_a_new_edition',
        'description',
        'demand',
        'price',
    ];
}