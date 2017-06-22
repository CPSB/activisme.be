<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actions extends Model
{
    /**
     * Mass-assign fields for tha database table.
     *
     * @return array
     */
    protected $fillable = ['author_id', 'type_id', 'link', 'name', 'end_date'];

    /**
     * Type relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function types()
    {
        return $this->belongsTo(Types::class, 'type_id');
    }
}
