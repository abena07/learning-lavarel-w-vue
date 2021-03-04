<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    // use HasFactory;
    protected $fillable = [
        'post_title',
        'description'
    ];
    public function getRouteKeyName()
    {
        return 'post_slug';
    }
    //
}
