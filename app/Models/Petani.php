<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petani extends Model
{

    protected $table = 'tbl_petani';

    protected $primaryKey = 'kodeunik_petani';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_petani', 'foto', 'foto_path'
    ];

    public function getKodeunikPetaniAttribute()
    {
        return $this->attributes['kodeunik_petani'];
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $guarded = [
        'kodeunik_petani'
    ];

    /**
     * Definisikan relasi ke model Ladang.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ladang()
    {
        return $this->hasMany(Ladang::class, 'kode_petani');
    }
}
