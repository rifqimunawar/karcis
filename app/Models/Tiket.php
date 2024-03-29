<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tiket extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_tikets');
    }
    
    public function event()
    {
        return $this->belongsToMany(Event::class, 'event_tikets');
    }
    
    
}
