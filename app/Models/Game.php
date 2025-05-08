<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = ['id', 'judul', 'deskripsi','foto','penulis','id_genre'];
    public $timestamp   = true;

    public function genre()
    {
    return $this->belongsTo(Genre::class, 'id_genre');
    }
}
