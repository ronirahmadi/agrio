<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanaman extends Model
{
    protected $table = 'tbl_tanaman';

    protected $primaryKey = 'kodeunik_tanaman';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_tanaman', 'foto', 'foto_path'
    ];

    public function getKodeunikTanamanAttribute()
    {
        return $this->attributes['kodeunik_tanaman'];
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $guarded = [
        'kodeunik_tanaman'
    ];

    /**
     * Definisikan relasi ke model Ladang.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ladang()
    {
        return $this->hasMany(Ladang::class, 'kode_tanaman');
    }
}
