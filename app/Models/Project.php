<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Project extends Model
{
    protected $fillable = ['title', 'url', 'description'];
    use HasFactory;
    public function getRouteKeyName()
    {
        return 'url';
    }
}
