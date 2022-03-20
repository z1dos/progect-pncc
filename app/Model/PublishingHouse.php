<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublishingHouse extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'id_PH',
        'title_publishing_house',
    ];
}