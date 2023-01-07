<?php

namespace App\Models;

use App\Models\Resep;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bookmark extends Model
{
    use HasFactory;
    protected $table = 'bookmark';

    protected $primaryKey = 'id_bookmark';
    protected $fillable = [
        'id_user',
        'id_resep',
        'updated_by',
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