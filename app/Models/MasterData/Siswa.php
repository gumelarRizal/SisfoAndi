<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $guarded = ['NIS','nama_siswa','tempat_lahir','tanggal_lahir','jenis_kelamin','no_telp','kelas_id'];
    protected $fillable = ['NIS','nama_siswa','tempat_lahir','tanggal_lahir','jenis_kelamin','no_telp','kelas_id'];
    protected $table = 'mt_siswa';
}
