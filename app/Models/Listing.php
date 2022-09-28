<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;
    public function scopeFilter($quary , array $filters){
         if($filters['tag'] ?? false){
            $quary->where('tags','like','%'.request('tag').'%');
        }
    }
}
