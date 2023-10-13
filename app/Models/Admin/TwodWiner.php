<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TwodWiner extends Model
{
    use HasFactory;
    protected $fillable = [
        'prize_no',
    ];
     public function users()
    {
        return $this->belongsToMany(User::class);
    }
}