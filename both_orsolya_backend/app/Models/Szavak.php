<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Szavak extends Model
{
    /** @use HasFactory<\Database\Factories\SzavakFactory> */
    use HasFactory;

    protected $table = 'szavak';
    protected $primaryKey = 'id';

    protected $fillable = [
        'angol',
        'magyar',
        'temaId',
    ];

    public function tobbhoz(){
        return $this->belongsTo(Tema::class, 'temaId');
    }
}
