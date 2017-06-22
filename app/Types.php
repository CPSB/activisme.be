<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Types extends Model
{
    /**
     * The mass-assign fields for the database table.
     *
     * @var array
     */
    protected $fillable = ['name'];
}
