<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'budget',
        'user_id',
        'category_id'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function Category()
    {
        return $this->belongsTo(Category::class);
    }
    public function Contracts()
    {
        return $this->hasMany(Contract::class);
    }
    public function Favorites()
    {
        return $this->hasMany(Favorite::class);
    }
    public function Messages()
    {
        return $this->hasMany(Message::class);
    }
}
