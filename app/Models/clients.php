<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;
    protected $table = 'clients';
    protected $fillable = ['clients'];

    public function invoices()
    {
        return $this->hasMany(Invoices::class);
    }
}
