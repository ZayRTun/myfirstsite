<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // protected $fillable = [
    //     'title', 'description'
    // ];

    // Or you could do the inverse to above as below
    protected $guarded = []; // Accept everything except these within the array
}
