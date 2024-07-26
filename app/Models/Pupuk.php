<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pupuk extends Model
{
    protected $table = 'tbl_pupuk';

    protected $primaryKey = 'kodeunik_pupuk';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_pupuk', 'foto', 'foto_path'
    ];

    public function getKodeunikPupukAttribute()
    {
        return $this->attributes['kodeunik_pupuk'];
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $guarded = [
        'kodeunik_pupuk'
    ];

    /**
     * Definisikan relasi ke model Ladang.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ladang()
    {
        return $this->hasMany(Ladang::class, 'kode_pupuk');
    }
}
