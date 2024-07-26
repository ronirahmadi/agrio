<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hama extends Model
{
    protected $table = 'tbl_hama';

    protected $primaryKey = 'kodeunik_hama';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_hama'
    ];

    public function getKodeunikHamaAttribute()
    {
        return $this->attributes['kodeunik_hama'];
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $guarded = [
        'kodeunik_hama'
    ];

    /**
     * Definisikan relasi ke model Ladang.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ladang()
    {
        return $this->hasMany(Lahan::class, 'kode_hama');
    }
}
