<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class student extends Model
{
    // Membuat fillable untuk memberikan akses yang boleh diakses oleh user
    protected $fillable = ['nama', 'npm', 'email', 'jurusan'];
    // Menggunakan $guarded, jika diluar nama npm, itu diperbolehkan

    // Menambahkan model untuk softdelete
    use SoftDeletes;
}
