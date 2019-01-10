<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // untuk custom nama model terhadap tabel di db
    protected $table = 'categories';

    // untuk custom jenis koneksi db, default => mysql_production
    // protected $connection = 'mongo_stage_1';

    // untuk custom primary key
    protected $primaryKey = 'id';


    // untuk filter mengizinkan mass-assignment pada field tertentu (yg tidak masuk akan terlindung / tidak include ke mass-assignment)
    protected $fillable = ['name'];

    // untuk filter field apa aja yg tidak boleh di mass-assignment
    // protected $guards = ['name'];

    // untuk disable created_at dan updated_at jika di tabel tidak ada field tsb
    // protected $timestamps = false;

    // jika ingin menggunakan timestamps tapi menggunakan field lain
    // const CREATED_AT = 'tanggal_dibuat';
    // const UPDATED_AT = 'tanggal_diupdate';
    

}
