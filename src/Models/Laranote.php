<?php

namespace HaymeTG\Laranote\Models;

use Illuminate\Database\Eloquent\Model;

class Laranote extends Model
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
    public function getLaranotableAttribute()
    {
        $model = $this->model;
        $object = new $this->model;
        return $model::where($object->getKeyName(), $this->model_id)->first();
    }
}
