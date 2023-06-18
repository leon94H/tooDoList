<?php

namespace App\Models;

use App\Models\Label;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    use HasFactory;


    
    protected $fillable =[


        'red_label',
        'blue_label',
        'green_label',
        'yellow_label',
        

    ];


    public function todolist(): BelongsTo
    {
        return $this->belongsTo(Todolist::class);
    }


    }
