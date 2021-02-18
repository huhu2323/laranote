<?php

namespace HaymeTG\Laranote\Traits;

use HaymeTG\Laranote\Models\LaraNote;

trait HasLaranote {

    /**
     * Create LaraNote for model
     *
     * @param string $note
     * @return Laranote
     */
    public function createNote($note)
    {
        $laranote = LaraNote::create([
            'model' => get_class($this),
            'model_id' => $this->{$this->primaryKey},
            'note' => $note
        ]);

        return $laranote;
    }


    /**
     * Retrive all Laranotes
     *
     * @return Collection
     */
    public function getNotesAttribute()
    {
        return LaraNote::where('model', get_class($this))
            ->where('model_id', $this->getKey())
            ->get();
    }

    /**
     * Retrive first Laranotes
     *
     * @return Collection
     */
    public function getFirstNoteAttribute()
    {
        return LaraNote::where('model', get_class($this))
            ->where('model_id', $this->getKey())
            ->first();
    }

    /**
     * Retrive last Laranotes
     *
     * @return Collection
     */
    public function getLastNoteAttribute()
    {
        return LaraNote::where('model', get_class($this))
            ->where('model_id', $this->getKey())
            ->get()
            ->last();
    }

    /**
     * Retrive latest Laranotes
     *
     * @return Collection
     */
    public function getLatestNoteAttribute()
    {
        return LaraNote::where('model', get_class($this))
            ->where('model_id', $this->getKey())
            ->latest()
            ->first();
    }
}
