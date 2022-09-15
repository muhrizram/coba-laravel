<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function scopeFilter($query, array $filters){

        $query->when($filters['search'] ?? false, function ($query, $search){
            return $query->where('name', 'like', '%'.$search.'%');
        });
    }
}
