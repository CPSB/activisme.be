<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Links extends Model
{
    /**
     * Mass-assign fields for the databaser table.
     *
     * @var array
     */
    protected $fillable = ['author_id', 'type_id', 'action_date', 'name', 'link'];

    /**
     * Type data relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type()
    {
        return $this->belongsTo(Types::class, 'type_id');
    }

    /**
     * Creator data relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
