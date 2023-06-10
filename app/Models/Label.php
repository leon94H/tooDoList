<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    use HasFactory;


    
    protected $fillable =[


        'red',
        'blue',
        'green',
        'yellow',
        

    ];


    public function todolist(): BelongsTo
    {
        return $this->belongsTo(Todolist::class);
    }


    public function label(): BelongsTo{

    return $this->belongsTo(TodoList::class);


}}
