<?php

namespace HaymeTG\Laranote\Models;

use Illuminate\Database\Eloquent\Model;

class LaraNote extends Model
{

    protected $table = 'notes';
    protected $primaryKey = 'id';

    protected $fillable = [
        'note',
        'model',
        'model_id'
    ];

    /**
     * Get the parent commentable model (post or video).
     */
    public function laranotable()
    {
        return $this->morphTo();
    }
}
