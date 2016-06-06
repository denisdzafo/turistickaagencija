<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statistika extends Model
{
  protected $fillable = ['id', 'prijava_destinacija', 'prijava_na_destinacije', 'broj_prodatih_karata',
  ];
}
