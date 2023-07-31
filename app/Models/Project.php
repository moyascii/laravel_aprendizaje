<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Project extends Model
{
//    Reemplazamos
//    protected $fillable = ['title', 'url', 'description'];
    //Por
    protected $guarded = [];
    use HasFactory;
    public function getRouteKeyName()
    {
        return 'url';
    }
}
