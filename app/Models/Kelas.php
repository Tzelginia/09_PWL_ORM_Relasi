<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use\App\Models\Mahasiswa;

class Kelas extends Model
{
    use HasFactory;
    protected $table='kelas'; //mendefinisikan bahwa model ini terkait dengan tabel kelas

    public function mahasiswa(){
        // return $this->/**
        //  * Get all of the comments for the Kelas
        //  *
        //  * @return \Illuminate\Database\Eloquent\Relations\HasMany
        //  */
        // public function comments(): HasMany
        // {
            return $this->hasMany(Mahasiswa::class);
        }
    }

