<?php

namespace App\Models;

use App\Models\Priority;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Priority extends Model
{
    use HasFactory;

    protected $fillable =[


        'low',
        'normal',
        'hig',
        

    ];


    // public function shops(): BelongsToMany
    // {
    //     return $this->belongsToMany(Shop::class);
    // }


    public function todolist(): BelongsTo
    {
        return $this->belongsTo(Todolist::class);
    }


    public function priority(): BelongsTo{

    return $this->belongsTo(TodoList::class);
}



}
