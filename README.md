# A note maker for Laravel

1) Install Laranote `composer require haymetg/laranote`
2) Run `php artisan vendor:publish --provider="HaymeTG\Laranote\LaranoteServiceProvider"`
3) Use `HasLaranote` trait for models with notes.
4) Use it.

### Trait Methods:
`createNote()`
for creating a note
`example: $user->createNote('Im a note');`
will fetch all notes saved in the model.

`getNote($index)`
for updating a note
`example: $user->getNote($index);`
will get note by index saved in the model.
Please note that this will only return note belong to parent model

`updateNote($index, $noteText)`
for updating a note
`example: $user->updateNote($index);`
will update note by index saved in the model.
Please note that this will only update note belong to parent model

`deleteNote($index)`
for deleting a note
`example: $user->deleteNote($index);`
will delete note by index saved in the model.
Please note that this will only delete note belong to parent model

`deleteAll()`
for deleting a note
`example: $user->deleteAll();`
will delete all note saved in the model.
Please note that this will only delete note belong to parent model



### Trait Accessors:
* **notes**
`example: $user->notes`
Will retrieve all notes saved. This will return a collection

* **first_note**
`example: $user->first_note`
Will retrieve the first note created by id.

* **last_note**
`example: $user->last_note`
Will retrieve the last note created by id.

* **latest_note**
`example: $user->latest_note`
Will retrieve the latest note created by date.

### Model Accessors:
* **laranotable**
`example: $user->laranotable`
Will retrieve the parent model of a laranote.
