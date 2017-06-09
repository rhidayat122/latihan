<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sepakbola extends Model
{
    //
    protected $table = 'sepakbola';
    protected $fillable = ['nama', 'club', 'umur', 'negara'];
    protected $visible = ['nama', 'club', 'umur', 'negara'];
    public $timestamps = true;
}
