<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beasiswa extends Model
{
    use HasFactory;
    // Nama tabel yang digunakan
    protected $table = 'beasiswa';

    // Jika kolom `created_at` dan `updated_at` tidak digunakan
    public $timestamps = true;

    // Kolom yang dapat diisi secara massal
    protected $fillable = ['nama_beasiswa', 'jumlah_dana', 'kategori', 'tanggal_mulai', 'aktif'];
}
