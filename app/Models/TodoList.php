<?php

namespace App\Models;

use App\Models\Priority;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TodoList extends Model
{
    use HasFactory;

    protected $fillable = [

    
        'name',
        'priority_id',


    ];


    public function priorities(): hasMany
    {
        return $this->hasMany(Priority::class);
    }


 
}
