<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;
    protected $table = 'komentar';
    protected $primaryKey = 'id_komentar';
    protected $fillable = [
        'id_user',
        'id_resep',
        'komentar',
        'created_at'
    ];
    protected $dates = ['created_at'];

    public function resep()
    {
       return $this->belongsTo(Resep::class,'id_resep');
    }

    public function users()
    {
        return $this->belongsTo(User::class,'id');
    }
}
