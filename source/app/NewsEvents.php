<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsEvents extends Model
{
    //
    protected $table='newsEvents';
    protected $fillable = [
       'title', 'description',
    ];
}
