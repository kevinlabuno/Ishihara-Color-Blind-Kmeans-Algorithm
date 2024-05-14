<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datakonver extends Model
{
    use HasFactory;
    protected $table = 'datakonver';
    protected $fillable = ['nama','alamat','umur','jenis', 'p1', 
    'p2', 'p3', 'p4', 'p5', 'p6', 'p7', 'p8', 'p9', 'p10', 'p12', 'p13','p14',
    'p15', 'p16', 'p17', 'p18', 'p19', 'p20', 'p21', ];
}
