<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catelory extends Model
{
    protected $fillable=['title','description'];
    protected $primaryKey = 'id';
    protected $table = 'catelories';
}
