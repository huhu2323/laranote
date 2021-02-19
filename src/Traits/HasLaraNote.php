<?php

namespace HaymeTG\Laranote\Traits;

use HaymeTG\Laranote\Models\Laranote;

trait HasLaranote {

    /**
     * Create LaraNote for model
     *
     * @param string $note
     * @return Laranote
     */
    public function createNote($note)
    {
        $laranote = Laranote::create([
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
        return Laranote::where('model', get_class($this))
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
        return Laranote::where('model', get_class($this))
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
        return Laranote::where('model', get_class($this))
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
        return Laranote::where('model', get_class($this))
            ->where('model_id', $this->getKey())
            ->latest()
            ->first();
    }
}
