<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class ProuctCategory extends Model
{
    protected $table="productcategory";
    protected $fillable=['name','description'];
}
