<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function board(){
        return $this->belongsTo(Board::class);
    }
    public function attachments(){
        return $this->hasMany(Attachment::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function users(){
        return $this->hasMany(User::class);
    }
}
