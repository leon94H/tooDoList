<?php

namespace App\Models;

use App\Models\Label;
use App\Models\Priority;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TodoList extends Model
{
    use HasFactory;

    protected $fillable = [

    
        'name',
        'priority_id',
        'label_id',


    ];


    public function priorities(): hasOne
    {
        return $this->hasOne(Priority::class);
    }


    public function labels(): hasOne
    {
        return $this->hasOne(Label::class);
    }






 
}
