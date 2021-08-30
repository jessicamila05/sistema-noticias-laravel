<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Middleware\ControlAccessNews;

class News extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table='News';
    protected $fillable=['theme', 'text', 'user_id'];

    public function relUsers()
    {
        return $this->hasOne('App\Models\User','id', 'user_id');
    }
}
