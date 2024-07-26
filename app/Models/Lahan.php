<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lahan extends Model
{
    protected $table = 'tbl_ladang';

    protected $primaryKey = 'kodeunik_ladang';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'kode_petani', 'kode_tanaman', 'kode_hama', 'kode_pupuk',
        'luas_lahan', 'lokasi', 'provinsi', 'kotakab', 'kecamatan', 'desa',
        'tinggi_mdpl'
    ];
    

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $guarded = [
        'kodeunik_ladang','kode_petani', 'kode_tanaman', 'kode_hama', 'kode_pupuk',
    ];

    public function getKodeunikLadangAttribute()
    {
        return $this->attributes['kodeunik_ladang'];
    }

    /**
     * Definisikan relasi ke model petani.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function petani()
    {
        return $this->belongsTo(Petani::class, 'kode_petani');
    }

    /**
     * Definisikan relasi ke model petani.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tanaman()
    {
        return $this->belongsTo(Tanaman::class, 'kode_tanaman');
    }

    /**
     * Definisikan relasi ke model hama.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function hama()
    {
        return $this->belongsTo(Hama::class, 'kode_hama');
    }

    /**
     * Definisikan relasi ke model pupuk.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pupuk()
    {
        return $this->belongsTo(Pupuk::class, 'kode_pupuk');
    }
}
