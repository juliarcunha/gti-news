<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Noticia extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }
}
