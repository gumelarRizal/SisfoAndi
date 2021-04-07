<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $guarded = ['kelas_id','no_kelas','nama_kelas'];
    protected $fillable = ['kelas_id','no_kelas','nama_kelas'];
    protected $table = 'mt_kelas';
}
