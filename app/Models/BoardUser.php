<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoardUser extends Model
{
    use HasFactory;
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function board()
    {
        return $this->belongsTo(Board::class);
    }
}
