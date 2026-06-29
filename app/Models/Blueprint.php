<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blueprint extends Model
{
    //

    use HasFactory;

    protected $fillable = [
        'user_id',
        'nom',
        'ton',
        'max_hashtags',
        'max_caracteres',
        'regles_supplementaires',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function rawContents()
    {
        return $this->HasMany(RawContent::class);
    }

    public function posts(){
        return $this->hasMany(GeneratedPost::class, RawContent::class);
    }
}
