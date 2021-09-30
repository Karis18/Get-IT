<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lostitem extends Model
{
    use HasFactory;

    protected $table = 'losstitems';
    public $timestamps = true;

    

    protected $fillable = [
        'name',
        'category',
        'description',      
        'updated_at'
    ];

}
