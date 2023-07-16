<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Petugas extends Model
{
    use HasFactory;
    protected $table = 'tb_petugas';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public function sampah(): HasMany
    {
        return $this->hasMany(Sampah::class);
    }
}
