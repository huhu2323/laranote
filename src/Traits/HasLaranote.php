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

    /**
     * Delete a note by id
     * 
     * @return Laranote
     */
    public function deleteNote($id)
    {
        return Laranote::where('id', $id)
            ->where('model', get_class($this))
            ->where('model_id', $this->id)
            ->first()
            ->delete();
    }

    /**
     * Delete a note by id
     * 
     * @return Laranote
     */
    public function deleteAll()
    {
        return Laranote::where('model', get_class($this))
            ->where('model_id', $this->id)
            ->delete();
    }

    /**
     * Update a note by id
     * 
     * @return Laranote
     */
    public function updateNote($id, $noteText)
    {
        $note = Laranote::where('model', get_class($this))
            ->where('model_id', $this->id)
            ->where('id', $id)
            ->first();
        $note->note = $noteText;
        $note->save();

        return $note;
    }
}
