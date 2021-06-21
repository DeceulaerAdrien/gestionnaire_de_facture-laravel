<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class facture extends Model
{
    use HasFactory;
    protected $table = 'facture';
    protected $fillable = ['facture'];
    public function clients()
    {
        return $this->belongsToMany(clients::class);
    }
}
