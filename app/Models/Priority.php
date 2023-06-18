<?php

namespace App\Models;

use App\Models\Priority;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Priority extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = [
        
        'low_priority',
        'normal_priority',
        'high_priority',


    ];



    public function todolist(): BelongsTo{


        return $this->belongsTo(Todolist::class);

        
    }





}
