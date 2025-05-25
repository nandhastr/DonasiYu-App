<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Donasi extends Model
{
    use HasFactory;

    protected $keyType = 'string';   
    public $incrementing = false;

    protected $fillable = [
        'user_id',
        'nominal',
        'methode',
        'peristiwa',
        'pesan',
    ];


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = (string) Str::uuid();
        });
    }

    public function user(){
        return $this->belongsTo((User::class));
    }
}
