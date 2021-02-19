# A note maker for Laravel

1) Install Laranote `composer require haymetg/laranote`
2) Use `HasLaranote` trait for models with notes.
3) Run `php artisan vendor:publish --provider="HaymeTG\Laranote\LaranoteServiceProvider`
4) Use it.

### Methods:
`createNote()`
for creating a note
`example: $user->createNote('Im a note');`
will fetch all notes saved in the model.

### Accessors:
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
