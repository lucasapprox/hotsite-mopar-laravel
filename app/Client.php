<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    

    protected $table = 'clients';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'name',
        'registration',
        'location',
        'shirtSize',
        'word'
        
    ];

    

    protected $guarded = [];
}
